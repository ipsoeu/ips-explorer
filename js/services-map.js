$(document).ready(function () {

  //configuring JVecorMap
  var countries = _.map(services, function (p) {
      return p.geocoverage_codes;
//      return p.geocoverage_codes.toLowerCase();
  });
  countries = _.flatten(countries);
  countries = _.groupBy(countries);
  var data = {};
  _.each(countries, function (v, k) {
      data[k] = _.size(v);
  }, data);

  var map = new jvm.Map({
//    map: 'world_mill',
//    map: 'europe_mill',
//    map: 'europe_merc',
// jvectormap 1.2.2
    map: 'europe_mill_en',
//   map: 'europe_merc_en',
// JQVMap
//    map: 'europe_en',
    container: $('#search-map'),
    regionsSelectable: true,
    regionStyle: {
      selected: {
        fill: '#F4A582'
      }
    },
    series: {
      regions: [{
        values: data,
        scale: ['#C8EEFF', '#0071A4'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionTipShow: function (e, el, code) {
      var current_data = map.series.regions[0].values;
      el.html(el.html() + ' - Services: ' + (current_data[code] ? current_data[code] : 'unknown'));
    },
    onRegionSelected: function (e, code, is_selected, selected_regions) {
      var active_services = _.filter(services, function(service){
        return _.isEmpty(this.selected_regions) || ! _.isEmpty(_.intersection(service.geocoverage_codes, this.selected_regions));
      },{selected_regions:selected_regions});
      FJS.removeRecords({'id.$gt': 0});
      FJS.addRecords(active_services);
      FJS.filter();
    }
  });

  initSliders();

  //NOTE: To append in different container
  var appendToContainer = function (htmlele, record) {
      console.log(record)
  };

  var afterFilter = function (result, jQ) {
    $('#total_services').text(result.length);

    var checkboxes = $("#technology_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'technology': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes = $("#geoextent_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'geoextent': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    
    var checkboxes = $("#uptake_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'uptake': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    
    var checkboxes = $("#cross_sector_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'cross_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    
    var checkboxes = $("#type_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'type': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes = $("#primary_sector_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0

      if (result.length > 0) {
        count = jQ.where({ 'primary_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    
    var checkboxes = $("#secondary_sector_criteria :input:gt(0)");

    checkboxes.each(function () {
      var c = $(this), count = 0;

      if (result.length > 0) {
        count = jQ.where({ 'secondary_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    // Managing JVectorMap
    
    var countries = _.map(result, function (p) {
      return p.geocoverage_codes;
    });
    countries = _.flatten(countries);
    countries = _.groupBy(countries);
    var data = {};
    _.each(countries, function (v, k) {
      data[k] = _.size(v);
    }, data);
    
    map.series.regions[0].clear();
    map.series.regions[0].setValues(data);
  };

  var FJS = FilterJS(services, '#services', {
    template: '#service-template',
    search: { ele: '#searchbox' },
    //search: {ele: '#searchbox', fields: ['runtime']}, // With specific fields
    callbacks: {
      afterFilter: afterFilter
    },
    pagination: {
      container: '#pagination',
      visiblePages: 5,
      perPage: {
        values: [10, 20, 50],
        container: '#per_page'
      },
    }
  });

  FJS.addCriteria({ field: 'technology', ele: '#technology_criteria input:checkbox' });
  FJS.addCriteria({ field: 'geoextent', ele: '#geoextent_criteria input:checkbox' });
  FJS.addCriteria({ field: 'uptake', ele: '#uptake_criteria input:checkbox' });
  FJS.addCriteria({ field: 'cross_sector', ele: '#cross_sector_criteria input:checkbox' });
  FJS.addCriteria({ field: 'type', ele: '#type_criteria input:checkbox' });
  FJS.addCriteria({ field: 'primary_sector', ele: '#primary_sector_criteria input:checkbox' });
  FJS.addCriteria({ field: 'secondary_sector', ele: '#secondary_sector_criteria input:checkbox' });

  window.FJS = FJS;
});

function initSliders() {
  $('#technology_criteria :checkbox').prop('checked', true);
  $('#all_technology').on('click', function () {
      $('#technology_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#geoextent_criteria :checkbox').prop('checked', true);
  $('#all_geoextent').on('click', function () {
      $('#geoextent_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#uptake_criteria :checkbox').prop('checked', true);
  $('#all_uptake').on('click', function () {
      $('#uptake_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#cross_sector_criteria :checkbox').prop('checked', true);
  $('#all_cross_sector').on('click', function () {
      $('#cross_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#type_criteria :checkbox').prop('checked', true);
  $('#all_type').on('click', function () {
      $('#type_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#primary_sector_criteria :checkbox').prop('checked', true);
  $('#all_primary_sector').on('click', function () {
      $('#primary_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#secondary_sector_criteria :checkbox').prop('checked', true);
  $('#all_secondary_sector').on('click', function () {
      $('#secondary_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
}

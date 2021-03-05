$(document).ready(function () {

  //configuring JVecorMap
  var countries = _.map(cases, function (x) {
      return x.geocoverage_codes;
//      return x.geocoverage_codes.toLowerCase();
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
      el.html(el.html() + ' - Project: ' + (current_data[code] ? current_data[code] : 'unknown'));
    },
    onRegionSelected: function (e, code, is_selected, selected_regions) {
      var active_cases = _.filter(cases, function(x){
        return _.isEmpty(this.selected_regions) || ! _.isEmpty(_.intersection(x.geocoverage_codes, this.selected_regions));
      },{selected_regions:selected_regions});
      FJS.removeRecords({'id.$gt': 0});
      FJS.addRecords(active_cases);
      FJS.filter();
    }
  });

  initSliders();

  //NOTE: To append in different container
  var appendToContainer = function (htmlele, record) {
      console.log(record)
  };

  var afterFilter = function (result, jQ) {
    $('#total_cases').text(result.length);

    var checkboxes = $("#rtype_criteria :input:gt(0)");
    checkboxes.each(function () {
      var c = $(this), count = 0
      if (result.length > 0) {
        count = jQ.where({ 'rtype': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

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
    
    var checkboxes = $("#cross_border_criteria :input:gt(0)");
    checkboxes.each(function () {
      var c = $(this), count = 0
      if (result.length > 0) {
        count = jQ.where({ 'cross_border': c.val() }).count;
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

    var checkboxes = $("#status_criteria :input:gt(0)");
    checkboxes.each(function () {
      var c = $(this), count = 0
      if (result.length > 0) {
        count = jQ.where({ 'status': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes = $("#active_criteria :input:gt(0)");
    checkboxes.each(function () {
      var c = $(this), count = 0
      if (result.length > 0) {
        count = jQ.where({ 'active': c.val() }).count;
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

  var FJS = FilterJS(cases, '#cases', {
    template: '#case-template',
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

  FJS.addCriteria({ field: 'rtype', ele: '#rtype_criteria input:checkbox' });
  FJS.addCriteria({ field: 'technology', ele: '#technology_criteria input:checkbox' });
  FJS.addCriteria({ field: 'geoextent', ele: '#geoextent_criteria input:checkbox' });
  FJS.addCriteria({ field: 'uptake', ele: '#uptake_criteria input:checkbox' });
  FJS.addCriteria({ field: 'status', ele: '#status_criteria input:checkbox' });
  FJS.addCriteria({ field: 'active', ele: '#active_criteria input:checkbox' });
  FJS.addCriteria({ field: 'cross_border', ele: '#cross_border_criteria input:checkbox' });
  FJS.addCriteria({ field: 'cross_sector', ele: '#cross_sector_criteria input:checkbox' });
  FJS.addCriteria({ field: 'type', ele: '#type_criteria input:checkbox' });
  FJS.addCriteria({ field: 'primary_sector', ele: '#primary_sector_criteria input:checkbox' });
  FJS.addCriteria({ field: 'secondary_sector', ele: '#secondary_sector_criteria input:checkbox' });

  window.FJS = FJS;
});

function initSliders() {
  $('#rtype_criteria :checkbox').prop('checked', true);
  $('#all_rtype').on('click', function () {
      $('#rtype_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
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
  $('#cross_border_criteria :checkbox').prop('checked', true);
  $('#all_cross_border').on('click', function () {
      $('#cross_border_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#cross_sector_criteria :checkbox').prop('checked', true);
  $('#all_cross_sector').on('click', function () {
      $('#cross_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#type_criteria :checkbox').prop('checked', true);
  $('#all_type').on('click', function () {
      $('#type_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#status_criteria :checkbox').prop('checked', true);
  $('#all_status').on('click', function () {
      $('#status_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#active_criteria :checkbox').prop('checked', true);
  $('#all_active').on('click', function () {
      $('#active_criteria :checkbox').prop('checked', $(this).is(':checked'));
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

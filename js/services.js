$(document).ready(function(){

  initSliders();

  //NOTE: To append in different container
  var appendToContainer = function(htmlele, record){
    console.log(record)
  };

  var afterFilter = function(result, jQ){
    $('#total_services').text(result.length);

    var checkboxes  = $("#category_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'category': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#geoextent_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'geoextent': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes  = $("#social_uptake_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'social_uptake': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes  = $("#policy_uptake_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'policy_uptake': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes  = $("#policy_relevance_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'policy_relevance': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes  = $("#primary_sector_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'primary_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
    var checkboxes  = $("#secondary_sector_criteria :input:gt(0)");

    checkboxes.each(function(){
      var c = $(this), count = 0

      if(result.length > 0){
        count = jQ.where({ 'secondary_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
  }

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
/*
  FJS.addCallback('beforeAddRecords', function(){
    if(this.recordsCount >= 450){
      this.stopStreaming();
    }
  });

  FJS.addCallback('afterAddRecords', function(){
    var percent = (this.recordsCount - 250)*100/250;

    $('#stream_progress').text(percent + '%').attr('style', 'width: '+ percent +'%;');

    if (percent == 100){
      $('#stream_progress').parent().fadeOut(1000);
    }
  });

  FJS.setStreaming({
//    data_url: 'http://jiren.github.io/filter.js/data/stream_services.json',
    data_url: '../data/services-4.json',
    stream_after: 1,
    batch_size: 50
  });
*/
//  FJS.addCriteria({field: 'year', ele: '#year_filter', type: 'range', all: 'all'});
//  FJS.addCriteria({field: 'rating', ele: '#rating_filter', type: 'range'});
//  FJS.addCriteria({field: 'runtime', ele: '#runtime_filter', type: 'range'});
  FJS.addCriteria({field: 'category', ele: '#category_criteria input:checkbox'});
  FJS.addCriteria({field: 'geoextent', ele: '#geoextent_criteria input:checkbox'});
  FJS.addCriteria({field: 'social_uptake', ele: '#social_uptake_criteria input:checkbox'});
  FJS.addCriteria({field: 'policy_uptake', ele: '#policy_uptake_criteria input:checkbox'});
  FJS.addCriteria({field: 'policy_relevance', ele: '#policy_relevance_criteria input:checkbox'});
  FJS.addCriteria({field: 'primary_sector', ele: '#primary_sector_criteria input:checkbox'});
  FJS.addCriteria({field: 'secondary_sector', ele: '#secondary_sector_criteria input:checkbox'});

  /*
   * Add multiple criterial.
    FJS.addCriteria([
      {field: 'geoextent', ele: '#geoextent_criteria input:checkbox'},
      {field: 'year', ele: '#year_filter', type: 'range'}
    ])
  */

  window.FJS = FJS;
});

function initSliders(){
/*
  $("#rating_slider").slider({
    min: 8,
    max: 10,
    values:[8, 10],
    step: 0.1,
    range:true,
    slide: function( event, ui ) {
      $("#rating_range_label" ).html(ui.values[ 0 ] + ' - ' + ui.values[ 1 ]);
      $('#rating_filter').val(ui.values[0] + '-' + ui.values[1]).trigger('change');
    }
  });

  $("#runtime_slider").slider({
    min: 50,
    max: 250,
    values:[0, 250],
    step: 10,
    range:true,
    slide: function( event, ui ) {
      $("#runtime_range_label" ).html(ui.values[ 0 ] + ' mins. - ' + ui.values[ 1 ] + ' mins.');
      $('#runtime_filter').val(ui.values[0] + '-' + ui.values[1]).trigger('change');
    }
  });
*/
  $('#category_criteria :checkbox').prop('checked', true);
  $('#all_category').on('click', function(){
    $('#category_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#geoextent_criteria :checkbox').prop('checked', true);
  $('#all_geoextent').on('click', function(){
    $('#geoextent_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#social_uptake_criteria :checkbox').prop('checked', true);
  $('#all_social_uptake').on('click', function(){
    $('#social_uptake_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#policy_uptake_criteria :checkbox').prop('checked', true);
  $('#all_policy_uptake').on('click', function(){
    $('#policy_uptake_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#policy_relevance_criteria :checkbox').prop('checked', true);
  $('#all_policy_relevance').on('click', function(){
    $('#policy_relevance_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#primary_sector_criteria :checkbox').prop('checked', true);
  $('#all_primary_sector').on('click', function(){
    $('#primary_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#secondary_sector_criteria :checkbox').prop('checked', true);
  $('#all_secondary_sector').on('click', function(){
    $('#secondary_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
}

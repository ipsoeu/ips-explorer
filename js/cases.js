$(document).ready(function(){

  initSliders();

  //NOTE: To append in different container
  var appendToContainer = function(htmlele, record){
    console.log(record)
  };

  var afterFilter = function(result, jQ){
    $('#total_cases').text(result.length);

    var checkboxes  = $("#rtype_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'rtype': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#technology_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'technology': c.val() }).count;
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
/*
    var checkboxes  = $("#uptake_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'uptake': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });
*/
    var checkboxes  = $("#cross_border_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'cross_border': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#cross_sector_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'cross_sector': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#type_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'type': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#status_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'status': c.val() }).count;
      }
      c.next().text(c.val() + ' (' + count + ')')
    });

    var checkboxes  = $("#active_criteria :input:gt(0)");
    checkboxes.each(function(){
      var c = $(this), count = 0
      if(result.length > 0){
        count = jQ.where({ 'active': c.val() }).count;
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
//    data_url: 'http://jiren.github.io/filter.js/data/stream_cases.json',
    data_url: '../data/cases-4.json',
    stream_after: 1,
    batch_size: 50
  });
*/
//  FJS.addCriteria({field: 'year', ele: '#year_filter', type: 'range', all: 'all'});
//  FJS.addCriteria({field: 'rating', ele: '#rating_filter', type: 'range'});
//  FJS.addCriteria({field: 'runtime', ele: '#runtime_filter', type: 'range'});
  FJS.addCriteria({field: 'rtype', ele: '#rtype_criteria input:checkbox'});
  FJS.addCriteria({field: 'technology', ele: '#technology_criteria input:checkbox'});
  FJS.addCriteria({field: 'geoextent', ele: '#geoextent_criteria input:checkbox'});
//  FJS.addCriteria({field: 'uptake', ele: '#uptake_criteria input:checkbox'});
  FJS.addCriteria({field: 'cross_border', ele: '#cross_border_criteria input:checkbox'});
  FJS.addCriteria({field: 'cross_sector', ele: '#cross_sector_criteria input:checkbox'});
  FJS.addCriteria({field: 'type', ele: '#type_criteria input:checkbox'});
  FJS.addCriteria({field: 'active', ele: '#active_criteria input:checkbox'});
  FJS.addCriteria({field: 'status', ele: '#status_criteria input:checkbox'});
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
  $('#rtype_criteria :checkbox').prop('checked', true);
  $('#all_rtype').on('click', function(){
    $('#rtype_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#technology_criteria :checkbox').prop('checked', true);
  $('#all_technology').on('click', function(){
    $('#technology_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#geoextent_criteria :checkbox').prop('checked', true);
  $('#all_geoextent').on('click', function(){
    $('#geoextent_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
/*
  $('#uptake_criteria :checkbox').prop('checked', true);
  $('#all_uptake').on('click', function(){
    $('#uptake_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
*/
  $('#cross_border_criteria :checkbox').prop('checked', true);
  $('#all_cross_border').on('click', function(){
    $('#cross_border_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#cross_sector_criteria :checkbox').prop('checked', true);
  $('#all_cross_sector').on('click', function(){
    $('#cross_sector_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#type_criteria :checkbox').prop('checked', true);
  $('#all_type').on('click', function(){
    $('#type_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#status_criteria :checkbox').prop('checked', true);
  $('#all_status').on('click', function(){
    $('#status_criteria :checkbox').prop('checked', $(this).is(':checked'));
  });
  $('#active_criteria :checkbox').prop('checked', true);
  $('#all_active').on('click', function(){
    $('#active_criteria :checkbox').prop('checked', $(this).is(':checked'));
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

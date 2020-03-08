<?php

  $sec = "service";

  require_once("../config/settings.php");

  $baseuri = $baseuri . "service/";

  $fn[] = "technology";
  $fn[] = "geoextent";
  $fn[] = "primary_sector";
  $fn[] = "secondary_sector";
  $fn[] = "uptake";
  $fn[] = "cross_border";
  $fn[] = "cross_sector";
  $fn[] = "type";
  $fn[] = "status";
  $fn[] = "active";
  
  $records = json_decode(file_get_contents($data_folder . "services.json"), true);

  foreach ($records as $rv) {
    foreach ($fn as $fv) {
      $filter[$fv][] = $rv[$fv];
    }
  }
  
  foreach ($fn as $fv) {
    $filter[$fv] = array_unique($filter[$fv]);
    sort($filter[$fv]);
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $site_title; ?> | <?php echo $section[$sec]["name"]; ?></title>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://eloquentstudio.github.io/filter.js/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="https://eloquentstudio.github.io/filter.js/assets/css/jquery-ui-1.10.2.custom.min.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.3/jquery-jvectormap.min.css" crossorigin="anonymous" />
    
    <link href="<?php echo $site_abs_path; ?>css/common.css" media="screen" rel="stylesheet" type="text/css">    
    <link href="<?php echo $site_abs_path; ?>css/services.css" media="screen" rel="stylesheet" type="text/css">
    <script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
    <script src="https://eloquentstudio.github.io/filter.js/filter.min.js" type="text/javascript"></script>

    <script src="<?php echo $site_abs_path; ?>js/jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?php echo $site_abs_path; ?>js/jvectormap.com/js/jquery-jvectormap-europe-mill-en.js"></script>
        
    <script type="text/javascript" src="<?php echo $site_abs_path; ?>js/common.js"></script>
    <script src="<?php echo $section[$sec]["data"] ; ?>.js" type="text/javascript"></script>
    <script src="<?php echo $site_abs_path; ?>js/services-map.js" type="text/javascript"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" integrity="sha256-G7A4JrJjJlFqP0yamznwPjAApIKPkadeHfyIwiaa9e0=" crossorigin="anonymous"></script>    
  </head>
  <body>
<?php echo $nav; ?>
<!--
    <header class="page-header">
      <div class="container">
      <h1 class="title"><?php echo $site_title; ?></h1>
      <p class="lead"><?php echo $site_subtitle; ?></p>
      </div>
    </header>
-->    
    <article class="container">
      <aside class="sidebar col-md-3">
        <div>
          <h4 class='col-md-6'><?php echo $section[$sec]["name"]; ?> (<span id="total_services">0</span>)</h4>
        </div>
        <div>
          <label class="sr-only" for="searchbox">Search</label>
          <input type="text" class="form-control" id="searchbox" placeholder="Search &hellip;" autocomplete="off">
          <span class="glyphicon glyphicon-search search-icon"></span>
        </div>
        <br>
        <div class="well">
            <fieldset id="technology_criteria">
                <legend>Technologies</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_technology">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["technology"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="geoextent_criteria">
                <legend>Geographic extent</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_geoextent">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["geoextent"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="primary_sector_criteria">
                <legend>Primary sector</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_primary_sector">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["primary_sector"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="secondary_sector_criteria">
                <legend>Secondary sector</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_secondary_sector">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["secondary_sector"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="uptake_criteria">
                <legend>Uptake</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_uptake">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["uptake"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="cross_border_criteria">
                <legend>Cross-border</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_cross_border">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["cross_border"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="cross_sector_criteria">
                <legend>Cross-sector</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_cross_sector">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["cross_sector"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="type_criteria">
                <legend>Type</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_type">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["type"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="status_criteria">
                <legend>Status</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_status">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["status"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="active_criteria">
                <legend>Active</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_active">
                    <span>All</span>
                  </label>
                </div>
<?php foreach ($filter["active"] as $filter_value) { ?>            
            <div class="checkbox">
              <label>
                <input type="checkbox" value="<?php echo $filter_value; ?>">
                <span><?php echo $filter_value; ?><span>
              </label>
            </div>
<?php } ?>            
            </fieldset>
        </div>
    </aside>

<!-- /.col-md-3 -->
    <section class="col-md-9">
      <div class="row">
        <div class="content col-md-12">
          <div id="search-map" class="services row col-md-12" style="height:300px;"></div>        
          <div id="pagination" class="pagination col-md-9"></div>
          <div class="col-md-3 content">
            Per Page: <span id="per_page" class="content"></span>
          </div>
        </div>
      </div>

      <div class="services row col-md-12" id="services"> </div>
      
    </section>
<!-- /.col-md-9 -->
</article>
<footer>
<?php echo $footer; ?>
</footer>
<!-- /.container -->
      <script id="service-template" type="text/html">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><a href="./<%= id %>.html"><%= name %></a></h4>
          </div>
          <div class="panel-body">
            <p><%= description %></p>
          </div>
          <div class="panel-footer">
<!--          
            <p>
              <span class="icon icon-ca" title="Technology">IT</span> <%= technology %> 
              <span class="icon icon-ed" title="Primary sector">PS</span> <%= primary_sector %> 
              <span class="icon icon-ef" title="Secondary sector">SS</span> <%= secondary_sector %> 
              <span class="icon icon-su" title="Uptake">UP</span> <%= uptake %>
              <span class="icon icon-pr" title="Type">TY</span> <%= type %> 
              <span class="icon icon-pu" title="Cross-sector">CS</span> <%= cross_sector %> 
            </p>
-->              
          </div>
        </div>
      </div>
      </script>
<!--      
      <script id="geoextent-template" type="text/html">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="<%= geoextent %>"> <%= geoextent %>
          </label>
        </div>
      </script>
-->      
    </body>
  </html>

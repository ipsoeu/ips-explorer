<?php

  $sec = "";

  require_once("../config/settings.php");

  $baseuri = $baseuri;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $site_title; ?> - <?php echo $site_subtitle; ?></title>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://eloquentstudio.github.io/filter.js/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
<link href="https://eloquentstudio.github.io/filter.js/assets/css/jquery-ui-1.10.2.custom.min.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.3/jquery-jvectormap.min.css" crossorigin="anonymous" />
<link href="<?php echo $site_abs_path; ?>css/common.css" media="screen" rel="stylesheet" type="text/css">
<script src="<?php echo $section["service"]["data"]; ?>.js"></script>
<script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $site_abs_path; ?>js/jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="<?php echo $site_abs_path; ?>js/jvectormap.com/js/jquery-jvectormap-world-mill.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" integrity="sha256-G7A4JrJjJlFqP0yamznwPjAApIKPkadeHfyIwiaa9e0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $site_abs_path; ?>js/common.js"></script> 
<!--
<style>
#citsci-view {
  position: absolute;
  top: 240px;
  left: 0;
  right: 0;
  bottom: 0;
}
</style>
<script>
$(document).ready(function () {
  var countries = _.map(services, function (p) {
    return p.geocoverage_codes;
  });
  countries = _.flatten(countries);
  countries = _.groupBy(countries);
  var data = {};
  _.each(countries, function (v, k) {
    data[k] = _.size(v);
  }, data);

  $('#citsci-view').vectorMap({
    map: 'world_mill',
    zoomOnScroll: false,
    zoomButtons: false,
    regionsSelectable: false,
    regionStyle: {
      hover: {
        cursor: 'default'
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
//      el.html(el.html() + ' - Services: ' + (data[code] ? data[code] : 'unknown') );
    },
    onRegionClick: function(e, code){
//      window.location.href = window.location.href + 'service';
    }
  });
});
</script>
-->
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

<div id="citsci-view"></div>
-->

<!--
<header class="jumbotron">
  <div class="container">
    <img src="/ips-explorer/img/ipso-logo.jpg"/>
-->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
<?php
  
  $hnr = 0; 
  $active = ' class="active"';
  foreach ($headline as $kh => $vh) {
    if ($hnr > 0) {
      $active = '';
    }
    echo '        <li data-target="#myCarousel" data-slide-to="' . $hnr . '"' . $active . '></li>' . "\n";
    $hnr++;
  }

?>
      </ol>
      <div class="carousel-inner" role="listbox">
<?php
  
  $hnr = 0; 
  $active = ' active';
  foreach ($headline as $kh => $vh) {
    if ($hnr > 0) {
      $active = '';
    }
    echo '        <div class="item' . $active . '">' . "\n";
    echo '          <div class="container">' . "\n";
    echo '            <div class="carousel-caption">' . "\n";
    echo '              <h1>' . $vh["name"] . '</h1>' . "\n";
    echo '              <p>' . $vh["descr"] . '</p>' . "\n";
    echo '              <p><a class="btn btn-lg btn-primary" href="' . $vh["url"] . '" role="button">' . $vh["url_caption"] . '</a></p>' . "\n";
    echo '            </div>' . "\n";
    echo '          </div>' . "\n";
    echo '        </div>' . "\n";
    $hnr++;
  }

?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
<!--
  </div>
</header>
-->
-

        
<article class="container">
<div class="row thumbnails-container">
<?php

  foreach ($section as $sk => $sv) {

    echo '<a class="col-sm-6 col-md-4 block-link" href="' . $sv["url"] . '">' . "\n";
//    echo '<div class="col-sm-6 col-md-4">' . "\n";  
    echo '<div class="thumbnail">' . "\n";
    echo '<div class="img"><span class="fa ' . $sv["icon"] . '"></span></div>' . "\n";
    echo '<div class="caption">' . "\n";
    echo '<h3>' . $sv["name"] . '</h3>' . "\n";
    echo '<p>' . $sv["descr"] . '</p>' . "\n";
    echo '</div>' . "\n";
    echo '</div>' . "\n";
//    echo '</div>' . "\n";
    echo '</a>' . "\n";
  }

?>
<!--
<div class="col-sm-12 col-md-12">
<div class="thumbnail">
<div class="caption">
<p><?php echo $site_description; ?></p>
</div>
</div>
</div>
-->
</div>
</article>        
        
</body>
</html>

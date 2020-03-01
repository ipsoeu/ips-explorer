<?php

  require_once("../config/baseuri.php");
  require_once("../config/folders.php");

  $sec = "service";

  require_once("../config/settings.php");

  $data[1] = $data_folder . 'services.json';

  $target_folder = $section[$sec]["path"];

  $baseuri = $baseuri . "service/";

  foreach ($data as $i => $file) {

//  $n = $i * 10000;

  $json = file_get_contents($file);

  $d = json_decode($json, true);

//  var_dump($d);
//  exit; 

//  foreach ($d["data"] as $k => $v) {
  foreach ($d as $k => $v) {
//    var_dump($v);

//    $id = $v["id"] + $n;
    $cid = $v["cid"];
    $id = $v["id"];
    $name = $v["name"];
    $url = $v["url"];
    $contact = $v["contact"];
    $description = $v["description"];
    $geoextent = $v["geoextent"];
//    $geocoverage = $v["geocoverage_dirty"];
    $geocoverage = $v["geocoverage"];
    $lead_organisation["name"] = $v["lead_organisation"]["name"];
    $lead_organisation["category"] = $v["lead_organisation"]["category"];
    $start_date = $v["start_date"];
    $active = $v["active"];
    $end_date = $v["end_date"];
    $primary_sector = $v["primary_sector"];
    $secondary_sector = $v["secondary_sector"];
    $category = $v["category"];
    $social_uptake = $v["social_uptake"];
    $cross_sector = $v["cross_sector"];
    $type = $v["type"];
/*
    $unsdg[1]  = $v["unsdg"][1];
    $unsdg[2]  = $v["unsdg"][2];
    $unsdg[3]  = $v["unsdg"][3];
    $unsdg[4]  = $v["unsdg"][4];
    $unsdg[5]  = $v["unsdg"][5];
    $unsdg[6]  = $v["unsdg"][6];
    $unsdg[7]  = $v["unsdg"][7];
    $unsdg[8]  = $v["unsdg"][8];
    $unsdg[9]  = $v["unsdg"][9];
    $unsdg[10] = $v["unsdg"][10];
    $unsdg[11] = $v["unsdg"][11];
    $unsdg[12] = $v["unsdg"][12];
    $unsdg[13] = $v["unsdg"][13];
    $unsdg[14] = $v["unsdg"][14];
    $unsdg[15] = $v["unsdg"][15];
    $unsdg[16] = $v["unsdg"][16];
    $unsdg[17] = $v["unsdg"][17];
*/    
    foreach (json_decode(file_get_contents($data_folder . "catalogs.json"), true) as $rv) {
      if ($rv["c_id"] == $cid) {
        $cid_name = $rv["c_name"];
      }
    }

    $html = '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<title>' . $site_title . ' | ' . $name . '</title>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://eloquentstudio.github.io/filter.js/assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" media="screen"/>
<link href="https://eloquentstudio.github.io/filter.js/assets/css/jquery-ui-1.10.2.custom.min.css" media="screen" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="https://getbootstrap.com/docs/3.3/assets/css/docs.min.css"/>
<link href="' . $site_abs_path . 'css/common.css" media="screen" rel="stylesheet" type="text/css">
<script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="https://eloquentstudio.github.io/filter.js/assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
<script src="https://eloquentstudio.github.io/filter.js/filter.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://getbootstrap.com/docs/3.3/assets/js/docs.min.js"></script> 
<script type="text/javascript" src="' . $site_abs_path . 'js/common.js"></script>
';
/*
<title>' . $name . '</title>
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/readable/bootstrap.min.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="https://getbootstrap.com/docs/3.3/assets/css/docs.min.css"/>
<style rel="stylesheet" type="text/css">
.metadata dd {
  margin-left: 40px;
}
.metadata a, .metadata code, .metadata pre {
  overflow-wrap: break-word;
  word-wrap: break-word;
  word-break: break-all;
}
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://getbootstrap.com/docs/3.3/assets/js/docs.min.js"></script>  
<script type="text/javascript">
$(document).ready(function() {
//$("header").addClass("navbar bg-primary container-fluid");
//$("header > h1").addClass("navbar-header container");
//$("header > p").addClass("lead container");
$("header").addClass("bs-docs-header");
$("header > h1").addClass("container");
$("header > p").addClass("container");
$("header").addClass("hide");
$("nav").addClass("navbar navbar-default container-fluid");
$("nav > p").addClass("navbar-header");
$("nav > p > a").addClass("navbar-brand");        
$("nav > ul").addClass("nav navbar-nav collapse navbar-collapse");
$("nav > ul li > ul").addClass("dropdown-menu");
$("nav > ul li > ul").attr("role", "menu");
$("nav > ul li > ul").parent().addClass("dropdown");
$("body > article").addClass("bs-docs-container container");
$("body > article section").addClass("bs-docs-section").css("padding","1em");
$("footer").addClass("page-footer container text-muted small text-center").css("padding","1em");
});
</script>
*/

  $html .= '<script>
$(document).ready(function() {
  var related_services_table = $("#related_services").DataTable( { 
    "scrollY": "500px", "scrollCollapse": true, "paging": false, "dom": "Bfrtip", 
    "order": [[ 1, "desc" ]],
    "buttons": [ "copy", "csv", "excel", "pdf" ] 
  } );
  related_services_table.columns().every( function () {
    var that = this;
    $( "input.filter", this.footer() ).on( "keyup change", function () {
      if ( that.search() !== this.value ) {
        that.search( this.value ).draw();
      }
    } );
  } );    
});
</script>
';  
  $html .= '<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"Service",
  "@id":"' . $baseuri . $id . '",
  "name":"' . $name . '",
  "url":"' . $url . '",
  "description":"' . $description . '",
  "spatialCoverage":[
';

  foreach ($geocoverage as $gk => $gc) {
    $html .= '    {"@type":"Place","name":"' . $gc . '"}';
    if ($gk < (count($geocoverage) - 1)) {
      $html .= ",\n";
    }
    else {
      $html .= "\n";
    }
  }  
  
  $html .= "  ]";
  $html .= '
}
</script>

</head>
<body>
';
  $html .= $nav;
/*  
  $html .= '<header class="page-header">
<div class="container">
<h1 class="title">' . $site_title . '</h1>
<p class="lead">' . $site_subtitle . '</p>
</div>
</header>
';
*/
  $html .= '<article class="container">
<aside class="sidebar col-md-3">
<div>
<div class="well">
<p><strong>Technologies</strong></p>
<p>' . $category . '</p>
<p><strong>Geographic extent</strong></p>
<p>' . $geoextent . '</p>
<p><strong>Geographic coverage</strong></p>
<p>' . join(", ", $geocoverage) . '</p>
<p><strong>Primary sector</strong></p>
<p>' . $primary_sector . '</p>
<p><strong>Secondary sector</strong></p>
<p>' . $secondary_sector . '</p>
<p><strong>Uptake</strong></p>
<p>' . $social_uptake . '</p>
<p><strong>Cross-sector</strong></p>
<p>' . $cross_sector . '</p>
<p><strong>Type</strong></p>
<p>' . $type . '</p>
</div>
</div>
</aside>
<section class="col-md-9">
<h2>' . $name . '</h2>
<address class="small">
<p>Responsible organisation: ' . $lead_organisation["name"] . ' (' . $lead_organisation["category"] . ')</p>
</address>
<p>' . $description . '</p>
';
  $html .= '<section>
<h3>Additional information</h3>
<table class="table table-hover table-striped">
<tbody>
';
  if ($cid != '') {
    $html .= '<tr>
<th>Source</th>
<td><a href="' . $site_abs_path . 'catalog/' . $cid . '.html">' . $cid_name . '</a></td>
</tr>
';
  }
  if ($url != '') {
    $html .= '<tr>
<th>Web site</th>
<td><a href="' . $url . '">' . $url . '</a></td>
</tr>
';
  }
  if ($contact != '') {
    $html .= '<tr><th>Contact point</th>
<td><a href="' . $contact . '">' . $contact . '</a></td></tr>
';
  }
  $html .= '<tr>
<th>Start/end date</th>
<td>' . $start_date . ' - ' . $end_date . '</td>
</tr>
<tr>
<th>Still active?</th>
<td>' . $active . '</td>
</tr>
</tbody>
</table>
</section>';
/*
  $html .= '<section>
<h3>Contribution to UN Sustainable Development Goals</h3>
<table id="table-unsdg">
<tbody>
<tr>
';
  $html .= '<tr>';
  foreach ($unsdg as $c) {
    $contrib = '';
    if ($c == "1") {
      $contrib = "Direct";
    }
    if ($c == "2") {
      $contrib = "Indirect";
    }
    if ($c != '') {
      $html .= '  <td class="unsdg-' . strtolower($contrib) . '" title="' . $contrib . '">' . substr($contrib,0,1) . '</td>';
    }
    else {
      $html .= '  <td>&nbsp;</td>';
    }
  }
  $html .= '</tr>';

  $html .= '</tbody>
<tfoot>
<tr>
';

  $sdgs = json_decode(file_get_contents("../base/un-sdg.json"),true);
  
  foreach ($sdgs as $sdg) {
    $html .= '<th title="' . $sdg["name"] . '"><a href="' . $sdg["url"] . '">' . $sdg["code"] . '</a></th>' . "\n";
  }

  $html .= '</tr>
</tfoot>
</table>
</section>';
*/
  $html .= '<section>
<h3>Related services</h3>
';

  $related_services = array();
  foreach ($d as $p) {
    if ($p["id"] != $id) {
      if ($category == $p["category"]) {
        $related_services[$p["id"]]["category"] = "Yes";
      }
      if ($geoextent == $p["geoextent"]) {
        $related_services[$p["id"]]["geoextent"] = "Yes";
      }
      if (count(array_intersect($geocoverage, $p["geocoverage"])) > 0) {
        $related_services[$p["id"]]["geocoverage"] = "Yes";
      }
      if ($primary_sector == $p["primary_sector"]) {
        $related_services[$p["id"]]["primary_sector"] = "Yes";
      }
      if ($secondary_sector == $p["secondary_sector"]) {
        $related_services[$p["id"]]["secondary_sector"] = "Yes";
      }
      if ($social_uptake == $p["social_uptake"]) {
        $related_services[$p["id"]]["social_uptake"] = "Yes";
      }
      if ($cross_sector == $p["cross_sector"]) {
        $related_services[$p["id"]]["cross_sector"] = "Yes";
      }
      if ($type == $p["type"]) {
        $related_services[$p["id"]]["type"] = "Yes";
      }
/*      
      if (count(array_intersect_assoc($unsdg, $p["unsdg"])) > 0) {
        $related_services[$p["id"]]["unsdg"] = "Yes";
      }
*/      
      if (isset($related_services[$p["id"]])) {
        $related_services[$p["id"]]["name"] = $p["name"];
      }
    }
  }

//var_dump($related_services);

  if (count($related_services) > 0) {
    $html .= '<table id="related_services" class="table table-hover table-striped">
<thead>
<tr>
<th>Service</th>
<th>Similarity</th>
<th>Relationships</th>
</tr>
</thead>
<tbody>
';
    foreach ($related_services as $rpi => $rp) {
//      $score = count($rp) - 1;
      $score = 100*((count($rp) - 1)/10) . "%";
      $html .= '<tr>
<td><a href="./' . $rpi . '.html">' . $rp["name"] . '</a></td>
<td>' . $score . '</td>      
<td>';
      foreach ($rp as $rpfn => $rpf) {
        $tag = "";
        $label = "";
        if ($rpf == "Yes") {
          switch ($rpfn) {
            case "category":
              $tag = "IT";
              $label = "Same technology";
              break;
            case "geoextent":
              $tag = "GE";
              $label = "Same geographic extent";
              break;
            case "geocoverage":
              $tag = "GC";
              $label = "Overlapping geographic coverage";
              break;
            case "primary_sector":
              $tag = "PS";
              $label = "Same primary sector";
              break;
            case "secondary_sector":
              $tag = "SS";
              $label = "Same secondary sector";
              break;
            case "social_uptake":
              $tag = "UP";
              $label = "Same level of uptake";
              break;
            case "cross_sector":
              $tag = "CS";
              $label = "Same cross-sector applicability";
              break;
            case "type":
              $label = "Same type";
              $tag = "TY";
	      break;
/*	      
            case "unsdg":
              $label = "Similar contribution to UN SDGs";
              $tag = "SDG";
	      break;
*/	      
          }
          $html .= '<span class="icon icon-' . strtolower($tag) . '" title="' . $label . '">' . $tag . '</span>&nbsp;';
        }
      }
      $html .= '</td>
</tr>
';
    }
  $html .= '</tbody>
<tfoot>
<tr>
<th><input class="filter" type="text" placeholder="Filter by service" data-index="0" /></th>
<th><input class="filter" type="text" placeholder="Filter by similarity" data-index="1" /></th>
<th><input class="filter" type="text" placeholder="Filter by relationship" data-index="2" /></th>
</tr>
</tfoot>
</table>
';  
  }
  
  $html .= '</section>
</section>
</article>
<footer>
<?php echo $footer; ?>
</footer>
</body>
</html>
';

    echo "Creating file: " . $target_folder . $id . ".html\n";
    if (file_put_contents($target_folder . $id . ".html", $html)) {
      echo "Done." . "\n\n";
    }

  }
  
  }
  exit; 

?>

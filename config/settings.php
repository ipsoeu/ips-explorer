<?php

  require_once("../config/baseuri.php");
  require_once("../config/folders.php");

  $site_logo = "ipso-logo.jpg";
  $site_title = "IPS-X";
  $site_subtitle = "Innovative Public Services Explorer";
  $site_description = "These pages allow you to explore innovative public services that have been collected from different sources in an integrated and harmonized way. Services can be discovered using a text-based, as well as, a graphic-based approach. We also list the contributing sources and offer the possibility to add your own service descriptions.";

  $twitter = "";
  $github = "https://github.com/ipsoeu/ips-explorer/";

  $footer = '<p></p>';

// Web site sections. Used to generated the navbar and the titles used in the different pages.

//  $section["about"]["name"] = "About";
//  $section["about"]["url"] = $site_abs_path;
   
  $section["service"]["name"] = "Services";
  $section["service"]["icon"] = "fa-group";
  $section["service"]["descr"] = "Explore the services collected by our partners and us. Find past and current services addressing different domains, participatory approaches, etc. Discover their relationships to the Sustainable Development Goals, and much more.";
  $section["service"]["url"] = $site_abs_path . "service/";
  $section["service"]["path"] = $root_abs_path . "service/";
//  $section["service"]["data"] = $site_abs_path . $data_folder . "services";
  $section["service"]["data"] = $data_path . "services";
/*   
  $section["i-chart"]["name"] = "Interactive Charts";
  $section["i-chart"]["url"] = $site_abs_path . "datavis/";
  $section["i-chart"]["path"] = $root_abs_path . "datavis/";
*/   
  $section["chart"]["name"] = "Gallery";
  $section["chart"]["icon"] = "fa-area-chart";
  $section["chart"]["descr"] = "Enjoy graphic representations of public services based on their core characteristics, including geographic and thematic coverage, policy uptake and policy relevance. Browse the already prepared views, and create dynamic visualizations.";
  $section["chart"]["url"] = $site_abs_path . "chart/";
  $section["chart"]["path"] = $root_abs_path . "chart/";

  $section["catalog"]["name"] = "Sources";
  $section["catalog"]["icon"] = "fa-download";
  $section["catalog"]["descr"] = "Get to know the surveys, catalogs and data sets of public services that are integrated here. Find out how you could add your own public service, or results from a longitudinal study.";
  $section["catalog"]["url"] = $site_abs_path . "catalog/";
  $section["catalog"]["path"] = $root_abs_path . "catalog/";
//  $section["catalog"]["data"] = $site_abs_path . $data_folder . "catalogs";
  $section["catalog"]["data"] = $data_path . "catalogs";
   
  $subsection["chart"]["10001"]["name"] = "Geographic coverage";
  $subsection["chart"]["10001"]["icon"] = "fa-globe";
  $subsection["chart"]["10001"]["descr"] = "Countries covered by the different public services. Hovering the mouse on one country, a tooltip shows the number of public services covering it.";
//  $subsection["chart"]["10001"]["url"] = $site_abs_path . "chart/10001.html";
//  $subsection["chart"]["10001"]["path"] = $root_abs_path . "chart/10001.html";
//  $subsection["chart"]["10001"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10001"]["data"] = $data_path . "services";
  $subsection["chart"]["10001"]["graph"] = '<div id="chart-10001"></div>';
  $subsection["chart"]["10001"]["lib"] = 'jvectormap';

  $subsection["chart"]["10002"]["name"] = "Primary sector";
  $subsection["chart"]["10002"]["icon"] = "fa-area-chart";
//  $subsection["chart"]["10002"]["descr"] = "The primary sector tackled by public services. Hovering the mouse on a sector name, a tooltip shows the number of public services tackling it.";
  $subsection["chart"]["10002"]["descr"] = "The primary sector tackled by public services.";
//  $subsection["chart"]["10002"]["url"] = $site_abs_path . "chart/10002.html";
//  $subsection["chart"]["10002"]["path"] = $root_abs_path . "chart/10002.html";
//  $subsection["chart"]["10002"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10002"]["data"] = $data_path . "services";
  $subsection["chart"]["10002"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["secondary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10002"></perspective-viewer>';
  $subsection["chart"]["10002"]["lib"] = 'perspective';
  
  $subsection["chart"]["10003"]["name"] = "Organisation category";
  $subsection["chart"]["10003"]["icon"] = "fa-area-chart";
//  $subsection["chart"]["10003"]["descr"] = "Type of organisation responsible for the public service. Hovering the mouse on an organisation category, a tooltip shows the number of public services with organisations that belong in this category.";
  $subsection["chart"]["10003"]["descr"] = "Distribution of type of organisation responsible for the collected public services.";
//  $subsection["chart"]["10003"]["url"] = $site_abs_path . "chart/10003.html";
//  $subsection["chart"]["10003"]["path"] = $root_abs_path . "chart/10003.html";
//  $subsection["chart"]["10003"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10003"]["data"] = $data_path . "services";
  $subsection["chart"]["10003"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["lead_organisation_category"]\' columns=\'["id", "name"]\' id="chart-10003"></perspective-viewer>';
  $subsection["chart"]["10003"]["lib"] = 'perspective';
  
  $subsection["chart"]["10004"]["name"] = "Primary sector vs. secondary sector";
  $subsection["chart"]["10004"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10004"]["descr"] = "Joint visual representation of the primary sector and the secondary sector of the collected public services.";
//  $subsection["chart"]["10004"]["url"] = $site_abs_path . "chart/10004.html";
//  $subsection["chart"]["10004"]["path"] = $root_abs_path . "chart/10004.html";
//  $subsection["chart"]["10004"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10004"]["data"] = $data_path . "services";
  $subsection["chart"]["10004"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["primary_sector", "secondary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' id="chart-10004"></perspective-viewer>';
  $subsection["chart"]["10004"]["lib"] = 'perspective';
  
  $subsection["chart"]["10005"]["name"] = "Policy uptake vs. technology";
  $subsection["chart"]["10005"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10005"]["descr"] = "Joint visual representation of the public service policy uptake and the used technologies.";
//  $subsection["chart"]["10005"]["url"] = $site_abs_path . "chart/10005.html";
//  $subsection["chart"]["10005"]["path"] = $root_abs_path . "chart/10005.html";
//  $subsection["chart"]["10005"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10005"]["data"] = $data_path . "services";
  $subsection["chart"]["10005"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["policy_uptake", "category"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' id="chart-10005"></perspective-viewer>';
  $subsection["chart"]["10005"]["lib"] = 'perspective';
  
  $subsection["chart"]["10006"]["name"] = "Policy relevance vs. technology";
  $subsection["chart"]["10006"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10006"]["descr"] = "Joint visual representation of the public service policy relevance and the used technologies.";
//  $subsection["chart"]["10006"]["url"] = $site_abs_path . "chart/10006.html";
//  $subsection["chart"]["10006"]["path"] = $root_abs_path . "chart/10006.html";
//  $subsection["chart"]["10006"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10006"]["data"] = $data_path . "services";
  $subsection["chart"]["10006"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["policy_relevance", "category"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' id="chart-10006"></perspective-viewer>';
  $subsection["chart"]["10006"]["lib"] = 'perspective';
  
  $subsection["chart"]["10007"]["name"] = "Social uptake vs. organisation category";
  $subsection["chart"]["10007"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10007"]["descr"] = "Joint visual representation of the public service social uptake and the responsible organisation category.";
//  $subsection["chart"]["10007"]["url"] = $site_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["path"] = $root_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10007"]["data"] = $data_path . "services";
  $subsection["chart"]["10007"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["social_uptake", "lead_organisation_category"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' id="chart-10007"></perspective-viewer>';
  $subsection["chart"]["10007"]["lib"] = 'perspective';
  
  $subsection["chart"]["10008"]["name"] = "Policy uptake vs. social uptake";
  $subsection["chart"]["10008"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10008"]["descr"] = "Joint visual representation of the public service policy uptake and its social uptake.";
//  $subsection["chart"]["10008"]["url"] = $site_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["path"] = $root_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10008"]["data"] = $data_path . "services";
  $subsection["chart"]["10008"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["policy_uptake", "social_uptake"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "start_date"]\' id="chart-10008"></perspective-viewer>';
  $subsection["chart"]["10008"]["lib"] = 'perspective';

  foreach ($subsection["chart"] as $ssk => $ssv) {
    $subsection["chart"][$ssk]["url"] = $site_abs_path . "chart/" . $ssk . ".html";
    $subsection["chart"][$ssk]["path"] = $root_abs_path . "chart/" . $ssk . ".html";
  }  
  
  
  $nav = null;
  $nav .= '<nav role="navigation" class="navbar navbar-default">' . "\n";
  $nav .= '<div class="container">' . "\n";
//  $nav .= '<p class="navbar-header"><a class="navbar-brand" href="' . $site_abs_path . '">About</a></p>' . "\n";
  $nav .= '<p class="navbar-header"><a class="navbar-brand" href="' . $site_abs_path . '">' . $site_title . '</a></p>' . "\n";
  $nav .= '<ul class="nav navbar-nav collapse navbar-collapse">' . "\n";
  foreach ($section as $sk => $sv) {
    $liclasses = array();
    $aattr = "";
    $decoration = "";
    $subitems = "";
    
    if ($sk == $sec) {
      $liclasses[] = "active";
    }
    if (isset($subsection[$sk])) {
//      $liclasses[] = "dropdown";
//      $aattr = ' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"';
//      $decoration = ' <span class="caret"></span>';
      $subitems .= "\n" . '<ul role="menu" class="dropdown-menu">' . "\n";
      foreach ($subsection[$sk] as $ssk => $ssv) {
        $subitems .= '<li><a href="' . $ssv["url"] . '">' . $ssv["name"] . '</a></li>' . "\n";
      }
      $subitems .= "</ul>\n";
    }
    $liclasses = ' class="' . join(" ", $liclasses) . '"';
    $nav .= '<li' . $liclasses . '><a href="' . $sv["url"] . '"' . $aattr . '>' . $sv["name"] . $decoration . '</a>';
//    $nav .= $subitems;
    $nav .= '</li>' . "\n";
  }
  $nav .= '</ul>' . "\n";
  $nav .= '<ul class="nav navbar-nav collapse navbar-collapse navbar-right">' . "\n";
  if ($twitter != "") {
    $nav .= '<li><a target="_blank" href="' . $twitter . '" title="Twitter"><i class="fa fa-twitter"></i></a></li>' . "\n";
  }
  if ($github != "") {
    $nav .= '<li><a target="_blank" href="' . $github . '" title="GitHub"><i class="fa fa-github"></i> About ' . $site_title . '</a></li>' . "\n";
  }
  $nav .= '</ul>' . "\n";
  $nav .= '</div>' . "\n";
  $nav .= '</nav>' . "\n";


?>

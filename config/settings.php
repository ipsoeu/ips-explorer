<?php

  require_once("../config/baseuri.php");
  require_once("../config/folders.php");

  $site_logo = $img_path . "ipso-logo.jpg";
  $site_title = "IPS-X";
  $site_subtitle = "Innovative Public Services Explorer";
  $site_description = "These pages allow you to explore innovative public services that have been collected from different sources in an integrated and harmonised way. Services can be discovered using a text-based, as well as, a graphic-based approach. We also list the contributing sources and offer the possibility to add your own service descriptions.";

  $twitter = "";
  $github = "https://github.com/ipsoeu/ips-explorer/";
  $contribute = "https://github.com/ipsoeu/ips-explorer/";
 $feedback = "https://github.com/ipsoeu/ips-explorer/issues/";
  $survey = "https://ec.europa.eu/eusurvey/runner/isa2-ips-survey-review";

  $footer = '<p></p>';

  $headline["welcome"]["name"] = "Welcome to " . $site_title . "!";
  $headline["welcome"]["icon"] = "";
  $headline["welcome"]["descr"] = "The Innovative Public Services Explorer is an exercise to provide an integrated view of public services using emerging and disruptive technologies.";
  $headline["welcome"]["url"] = $site_abs_path . "service/";
  $headline["welcome"]["url_caption"] = "Explore";
  
  $headline["contribute"]["name"] = "Contribute";
  $headline["contribute"]["icon"] = "";
  $headline["contribute"]["descr"] = "If you are aware of any project, service, or initiative that is not listed here, please let us know. We will be happy to add them to the catalogue.";
  $headline["contribute"]["url"] = $contribute;
  $headline["contribute"]["url_caption"] = "How to contribute";
  
  $headline["survey"]["name"] = "IPS survey";
  $headline["survey"]["icon"] = "";
  $headline["survey"]["descr"] = "If you are involved in the provision of public services using emerging technologies, please consider filling in our survey.";
  $headline["survey"]["url"] = $survey;
  $headline["survey"]["url_caption"] = "Start the survey";
  
// Web site sections. Used to generated the navbar and the titles used in the different pages.

//  $section["about"]["name"] = "About";
//  $section["about"]["url"] = $site_abs_path;
   
  $section["service"]["name"] = "Services";
  $section["service"]["icon"] = "fa-cogs";
  $section["service"]["descr"] = "Explore European public services making use of emerging and disruptive technologies, such as AI, DLT, IoT and APIs, and find out their distribution and scope in terms of public administration levels and sectors.";
  $section["service"]["url"] = $site_abs_path . "service/";
  $section["service"]["path"] = $root_abs_path . "service/";
//  $section["service"]["data"] = $site_abs_path . $data_folder . "services";
  $section["service"]["data"] = $data_path . "services";

  $section["project"]["name"] = "Projects";
  $section["project"]["icon"] = "fa-group";
  $section["project"]["descr"] = "Explore European projects developing pubic services making use of emerging and disruptive technologies, such as AI, DLT, IoT and APIs, and find out their distribution in terms of public administration levels and sectors.";
  $section["project"]["url"] = $site_abs_path . "project/";
  $section["project"]["path"] = $root_abs_path . "project/";
//  $section["project"]["data"] = $site_abs_path . $data_folder . "projects";
  $section["project"]["data"] = $data_path . "projects";
   
/*   
  $section["i-chart"]["name"] = "Interactive Charts";
  $section["i-chart"]["url"] = $site_abs_path . "datavis/";
  $section["i-chart"]["path"] = $root_abs_path . "datavis/";
*/   

  $section["chart"]["name"] = "Statistics";
  $section["chart"]["icon"] = "fa-area-chart";
  $section["chart"]["descr"] = "Access statistics of public services and projects based on their core characteristics, including geographic coverage, uptake and the technologies used. Browse the already prepared views, and create dynamic visualisations.";
  $section["chart"]["url"] = $site_abs_path . "chart/";
  $section["chart"]["path"] = $root_abs_path . "chart/";

  $section["catalog"]["name"] = "Sources";
  $section["catalog"]["icon"] = "fa-download";
  $section["catalog"]["descr"] = "Get to know the surveys, catalogues and data sets of public services and projects that are integrated and documented here. Find out how you could add your own public services, projects, or results from a longitudinal study.";
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
  $subsection["chart"]["10002"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["primary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10002"></perspective-viewer>';
  $subsection["chart"]["10002"]["lib"] = 'perspective';
  
  $subsection["chart"]["10003"]["name"] = "Activity";
  $subsection["chart"]["10003"]["icon"] = "fa-area-chart";
//  $subsection["chart"]["10003"]["descr"] = "Main activity addressed by public services. Hovering the mouse on an activity, a tooltip shows the number of public services addressing this activity.";
  $subsection["chart"]["10003"]["descr"] = "Distribution of activities for the collected public services.";
//  $subsection["chart"]["10003"]["url"] = $site_abs_path . "chart/10003.html";
//  $subsection["chart"]["10003"]["path"] = $root_abs_path . "chart/10003.html";
//  $subsection["chart"]["10003"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10003"]["data"] = $data_path . "services";
  $subsection["chart"]["10003"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["secondary_sector"]\' columns=\'["id", "name"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10003"></perspective-viewer>';
  $subsection["chart"]["10003"]["lib"] = 'perspective';
  
  $subsection["chart"]["10004"]["name"] = "Primary sector vs. activity";
  $subsection["chart"]["10004"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10004"]["descr"] = "Joint visual representation of the primary sector and the activity of the collected public services.";
//  $subsection["chart"]["10004"]["url"] = $site_abs_path . "chart/10004.html";
//  $subsection["chart"]["10004"]["path"] = $root_abs_path . "chart/10004.html";
//  $subsection["chart"]["10004"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10004"]["data"] = $data_path . "services";
  $subsection["chart"]["10004"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["primary_sector", "secondary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10004"></perspective-viewer>';
  $subsection["chart"]["10004"]["lib"] = 'perspective';
  
  $subsection["chart"]["10005"]["name"] = "Service type vs. technology";
  $subsection["chart"]["10005"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10005"]["descr"] = "Joint visual representation of the public service type and the used technologies.";
//  $subsection["chart"]["10005"]["url"] = $site_abs_path . "chart/10005.html";
//  $subsection["chart"]["10005"]["path"] = $root_abs_path . "chart/10005.html";
//  $subsection["chart"]["10005"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10005"]["data"] = $data_path . "services";
  $subsection["chart"]["10005"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["type", "technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10005"></perspective-viewer>';
  $subsection["chart"]["10005"]["lib"] = 'perspective';
  
  $subsection["chart"]["10006"]["name"] = "Cross-sector applicability vs. technology";
  $subsection["chart"]["10006"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10006"]["descr"] = "Joint visual representation of the public service applicability in cross-sector scenarios and the used technologies.";
//  $subsection["chart"]["10006"]["url"] = $site_abs_path . "chart/10006.html";
//  $subsection["chart"]["10006"]["path"] = $root_abs_path . "chart/10006.html";
//  $subsection["chart"]["10006"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10006"]["data"] = $data_path . "services";
  $subsection["chart"]["10006"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["cross_sector", "technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10006"></perspective-viewer>';
  $subsection["chart"]["10006"]["lib"] = 'perspective';
  
  $subsection["chart"]["10007"]["name"] = "Uptake vs. organisation category";
  $subsection["chart"]["10007"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10007"]["descr"] = "Joint visual representation of the public service uptake and the responsible organisation category.";
//  $subsection["chart"]["10007"]["url"] = $site_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["path"] = $root_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10007"]["data"] = $data_path . "services";
  $subsection["chart"]["10007"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["uptake", "lead_organisation_category"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10007"></perspective-viewer>';
  $subsection["chart"]["10007"]["lib"] = 'perspective';
  
  $subsection["chart"]["10008"]["name"] = "Technology vs. uptake";
  $subsection["chart"]["10008"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10008"]["descr"] = "Joint visual representation of the public service technology and its social uptake.";
//  $subsection["chart"]["10008"]["url"] = $site_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["path"] = $root_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["data"] = $site_abs_path . $data_folder . "services";
  $subsection["chart"]["10008"]["data"] = $data_path . "services";
  $subsection["chart"]["10008"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["technology", "uptake"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10008"></perspective-viewer>';
  $subsection["chart"]["10008"]["lib"] = 'perspective';

  foreach ($subsection["chart"] as $ssk => $ssv) {
    $subsection["chart"][$ssk]["url"] = $site_abs_path . "chart/" . $ssk . ".html";
    $subsection["chart"][$ssk]["path"] = $root_abs_path . "chart/" . $ssk . ".html";
  }  
  
  
  $nav = null;
  $nav .= '<nav role="navigation" class="navbar navbar-default">' . "\n";
  $nav .= '<div class="container">' . "\n";
//  $nav .= '<p class="navbar-header"><a class="navbar-brand" href="' . $site_abs_path . '">About</a></p>' . "\n";
  $nav .= '<p class="navbar-header"><a title="' . $site_subtitle . '" class="navbar-brand" href="' . $site_abs_path . '">' . $site_title . '</a></p>' . "\n";
//  $nav .= '<p class="navbar-header"><a title="' . $site_subtitle . '" class="navbar-brand" href="' . $site_abs_path . '"><img width="30" src="' . $site_logo . '"/>' . $site_title . '</a></p>' . "\n";
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
/*  
  if ($github != "") {
    $nav .= '<li><a target="_blank" href="' . $github . '" title="GitHub"><i class="fa fa-github"></i> About ' . $site_title . '</a></li>' . "\n";
  }
*/  
  if ($feedback != "") {
    $nav .= '<li><a target="_blank" href="' . $feedback . '" title="Send us your feedback."><i class="fa fa-comment"></i> Feedback</a></li>' . "\n";
  }
  if ($contribute != "") {
    $nav .= '<li><a target="_blank" href="' . $contribute . '" title="Report projects, services, initiatives you are aware of."><i class="fa fa-github"></i> Contribute</a></li>' . "\n";
  }
  if ($contribute != "") {
    $nav .= '<li><a target="_blank" href="' . $survey . '" title="Fill in the IPS survey."><i class="fa fa-edit"></i> IPS Survey</a></li>' . "\n";
  }
  $nav .= '</ul>' . "\n";
  $nav .= '</div>' . "\n";
  $nav .= '</nav>' . "\n";


?>

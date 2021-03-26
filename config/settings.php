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
//  $survey = "https://ec.europa.eu/eusurvey/runner/isa2-ips-survey-review";
  $survey = "https://ec.europa.eu/eusurvey/runner/6c2c3469-14fe-6d78-129d-0cc558731310";

  $footer = '<p></p>';

  $headline["welcome"]["name"] = "Welcome to " . $site_title . "!";
  $headline["welcome"]["icon"] = "";
  $headline["welcome"]["descr"] = "The Innovative Public Services Explorer is an exercise to provide an integrated view of public services using emerging and disruptive technologies.";
  $headline["welcome"]["url"] = $site_abs_path . "case/";
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
   
  $section["case"]["name"] = "Cases";
  $section["case"]["icon"] = "fa-flag";
  $section["case"]["descr"] = "Explore European cases of pubic services making use of emerging and disruptive technologies, such as AI, DLT, IoT and APIs, and find out their distribution in terms of public administration levels and sectors.";
  $section["case"]["url"] = $site_abs_path . "case/";
  $section["case"]["path"] = $root_abs_path . "case/";
//  $section["case"]["data"] = $site_abs_path . $data_folder . "cases";
  $section["case"]["data"] = $data_path . "cases";
/*   
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
*/   
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
  $section["chart"]["data"] = $data_path . "cases";

  $section["catalog"]["name"] = "Sources";
  $section["catalog"]["icon"] = "fa-download";
  $section["catalog"]["descr"] = "Get to know the surveys, catalogues and data sets of public services and projects that are integrated and documented here. Find out how you could add your own public services, projects, or results from a longitudinal study.";
  $section["catalog"]["url"] = $site_abs_path . "catalog/";
  $section["catalog"]["path"] = $root_abs_path . "catalog/";
//  $section["catalog"]["data"] = $site_abs_path . $data_folder . "catalogs";
  $section["catalog"]["data"] = $data_path . "catalogs";

// Charts
   
  $subsection["chart"]["10001"]["name"] = "Geographic coverage";
  $subsection["chart"]["10001"]["icon"] = "fa-globe";
  $subsection["chart"]["10001"]["descr"] = "Countries covered by the different public services. Hovering the mouse on one country, a tooltip shows the number of public services covering it.";
  $subsection["chart"]["10001"]["data"] = $data_path . "cases";
  $subsection["chart"]["10001"]["graph"] = '<div id="chart-10001"></div>';
  $subsection["chart"]["10001"]["lib"] = 'jvectormap';

  $subsection["chart"]["10002"]["name"] = "Technology";
  $subsection["chart"]["10002"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10002"]["descr"] = "Technology distribution in the collected cases.";
  $subsection["chart"]["10002"]["data"] = $data_path . "cases";
  $subsection["chart"]["10002"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10002"></perspective-viewer>';
  $subsection["chart"]["10002"]["lib"] = 'perspective';
  
  $subsection["chart"]["10003"]["name"] = "Primary sector";
  $subsection["chart"]["10003"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10003"]["descr"] = "Primary sectors covered by the collected cases.";
  $subsection["chart"]["10003"]["data"] = $data_path . "cases";
  $subsection["chart"]["10003"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["primary_sector"]\' columns=\'["id", "name"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10003"></perspective-viewer>';
  $subsection["chart"]["10003"]["lib"] = 'perspective';
  
  $subsection["chart"]["10004"]["name"] = "Primary sector vs. technology";
  $subsection["chart"]["10004"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10004"]["descr"] = "Technology distribution per primary sector in the collected cases.";
  $subsection["chart"]["10004"]["data"] = $data_path . "cases";
  $subsection["chart"]["10004"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["primary_sector"]\' column-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10004"></perspective-viewer>';
  $subsection["chart"]["10004"]["lib"] = 'perspective';
  
  $subsection["chart"]["10005"]["name"] = "Activity vs. technology";
  $subsection["chart"]["10005"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10005"]["descr"] = "Technology distribution per activity in the collected cases.";
  $subsection["chart"]["10005"]["data"] = $data_path . "cases";
  $subsection["chart"]["10005"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["secondary_sector"]\' column-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10005"></perspective-viewer>';
  $subsection["chart"]["10005"]["lib"] = 'perspective';
  
  $subsection["chart"]["10006"]["name"] = "Cross-sector vs. technology";
  $subsection["chart"]["10006"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10006"]["descr"] = "Technology distribution in cross-sector cases.";
  $subsection["chart"]["10006"]["data"] = $data_path . "cases";
  $subsection["chart"]["10006"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["cross_sector"]\' column-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10006"></perspective-viewer>';
  $subsection["chart"]["10006"]["lib"] = 'perspective';
  
  $subsection["chart"]["10007"]["name"] = "Cross-sector vs. activity";
  $subsection["chart"]["10007"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10007"]["descr"] = "Activity distribution in cross-sector cases.";
  $subsection["chart"]["10007"]["data"] = $data_path . "cases";
  $subsection["chart"]["10007"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["cross_sector"]\' column-pivots=\'["secondary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10007"></perspective-viewer>';
  $subsection["chart"]["10007"]["lib"] = 'perspective';

  $subsection["chart"]["10008"]["name"] = "Cross-border vs. technology";
  $subsection["chart"]["10008"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10008"]["descr"] = "Technology distribution in cross-border cases.";
  $subsection["chart"]["10008"]["data"] = $data_path . "cases";
  $subsection["chart"]["10008"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["cross_border"]\' column-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10008"></perspective-viewer>';
  $subsection["chart"]["10008"]["lib"] = 'perspective';
  
  $subsection["chart"]["10009"]["name"] = "Cross-border vs. activity";
  $subsection["chart"]["10009"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10009"]["descr"] = "Activity distribution in cross-border cases.";
  $subsection["chart"]["10009"]["data"] = $data_path . "cases";
  $subsection["chart"]["10009"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["cross_border"]\' column-pivots=\'["secondary_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10009"></perspective-viewer>';
  $subsection["chart"]["10009"]["lib"] = 'perspective';

  $subsection["chart"]["10010"]["name"] = "Administration level";
  $subsection["chart"]["10010"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10010"]["descr"] = "Distribution of cases per administration level.";
  $subsection["chart"]["10010"]["data"] = $data_path . "cases";
  $subsection["chart"]["10010"]["graph"] = '<perspective-viewer view="treemap" row-pivots=\'["geoextent"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10010"></perspective-viewer>';
  $subsection["chart"]["10010"]["lib"] = 'perspective';
  
  $subsection["chart"]["10011"]["name"] = "Administration level vs. technology";
  $subsection["chart"]["10011"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10011"]["descr"] = "Technology distribution per administration level in the collected cases.";
  $subsection["chart"]["10011"]["data"] = $data_path . "cases";
  $subsection["chart"]["10011"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["geoextent"]\' column-pivots=\'["technology"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10011"></perspective-viewer>';
  $subsection["chart"]["10011"]["lib"] = 'perspective';
  
  $subsection["chart"]["10012"]["name"] = "Administration level vs. cross-sector";
  $subsection["chart"]["10012"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10012"]["descr"] = "Distribution of cross-sector cases per administration level.";
  $subsection["chart"]["10012"]["data"] = $data_path . "cases";
  $subsection["chart"]["10012"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["geoextent"]\' column-pivots=\'["cross_sector"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10012"></perspective-viewer>';
  $subsection["chart"]["10012"]["lib"] = 'perspective';
  
  $subsection["chart"]["10013"]["name"] = "Administration level vs. cross-border";
  $subsection["chart"]["10013"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10013"]["descr"] = "Distribution of cross-border cases per administration level.";
  $subsection["chart"]["10013"]["data"] = $data_path . "cases";
  $subsection["chart"]["10013"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["geoextent"]\' column-pivots=\'["cross_border"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10013"></perspective-viewer>';
  $subsection["chart"]["10013"]["lib"] = 'perspective';
  
  $subsection["chart"]["10014"]["name"] = "Cases per year";
  $subsection["chart"]["10014"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10014"]["descr"] = "Distribution of the collected cases across the years.";
  $subsection["chart"]["10014"]["data"] = $data_path . "cases";
  $subsection["chart"]["10014"]["graph"] = '<perspective-viewer view="y_bar" row-pivots=\'["start_date"]\' sort=\'[["start_date", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10014"></perspective-viewer>';
  $subsection["chart"]["10014"]["lib"] = 'perspective';
  
  $subsection["chart"]["10015"]["name"] = "Cases per year and technology";
  $subsection["chart"]["10015"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10015"]["descr"] = "Distribution of the collected cases per technology across the years.";
  $subsection["chart"]["10015"]["data"] = $data_path . "cases";
  $subsection["chart"]["10015"]["graph"] = '<perspective-viewer view="y_bar" row-pivots=\'["start_date"]\' column-pivots=\'["technology"]\' sort=\'[["start_date", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10015"></perspective-viewer>';
  $subsection["chart"]["10015"]["lib"] = 'perspective';
  
  $subsection["chart"]["10016"]["name"] = "Cases per year and administration level";
  $subsection["chart"]["10016"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10016"]["descr"] = "Distribution of the collected cases per administration level across the years.";
  $subsection["chart"]["10016"]["data"] = $data_path . "cases";
  $subsection["chart"]["10016"]["graph"] = '<perspective-viewer view="y_bar" row-pivots=\'["start_date"]\' column-pivots=\'["geoextent"]\' sort=\'[["start_date", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10016"></perspective-viewer>';
  $subsection["chart"]["10016"]["lib"] = 'perspective';
  
  $subsection["chart"]["10017"]["name"] = "Cross-sector cases per year";
  $subsection["chart"]["10017"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10017"]["descr"] = "Distribution of cross-sector cases across the years.";
  $subsection["chart"]["10017"]["data"] = $data_path . "cases";
  $subsection["chart"]["10017"]["graph"] = '<perspective-viewer view="y_bar" row-pivots=\'["start_date"]\' column-pivots=\'["cross_sector"]\' sort=\'[["start_date", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10017"></perspective-viewer>';
  $subsection["chart"]["10017"]["lib"] = 'perspective';
  
  $subsection["chart"]["10018"]["name"] = "Cross-border cases per year";
  $subsection["chart"]["10018"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10018"]["descr"] = "Distribution of cross-border cases across the years.";
  $subsection["chart"]["10018"]["data"] = $data_path . "cases";
  $subsection["chart"]["10018"]["graph"] = '<perspective-viewer view="y_bar" row-pivots=\'["start_date"]\' column-pivots=\'["cross_border"]\' sort=\'[["start_date", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10018"></perspective-viewer>';
  $subsection["chart"]["10018"]["lib"] = 'perspective';
  
/*  
  $subsection["chart"]["10007"]["name"] = "Uptake vs. organisation category";
  $subsection["chart"]["10007"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10007"]["descr"] = "Joint visual representation of the public service uptake and the responsible organisation category.";
//  $subsection["chart"]["10007"]["url"] = $site_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["path"] = $root_abs_path . "chart/10007.html";
//  $subsection["chart"]["10007"]["data"] = $site_abs_path . $data_folder . "cases";
  $subsection["chart"]["10007"]["data"] = $data_path . "cases";
  $subsection["chart"]["10007"]["graph"] = '<perspective-viewer view="x_bar" row-pivots=\'["uptake", "lead_organisation_category"]\' sort=\'[["id", "asc"]]\' columns=\'["id"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10007"></perspective-viewer>';
  $subsection["chart"]["10007"]["lib"] = 'perspective';
  
  $subsection["chart"]["10008"]["name"] = "Technology vs. uptake";
  $subsection["chart"]["10008"]["icon"] = "fa-area-chart";
  $subsection["chart"]["10008"]["descr"] = "Joint visual representation of the public service technology and its social uptake.";
//  $subsection["chart"]["10008"]["url"] = $site_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["path"] = $root_abs_path . "chart/10008.html";
//  $subsection["chart"]["10008"]["data"] = $site_abs_path . $data_folder . "cases";
  $subsection["chart"]["10008"]["data"] = $data_path . "cases";
  $subsection["chart"]["10008"]["graph"] = '<perspective-viewer view="sunburst" row-pivots=\'["technology", "uptake"]\' sort=\'[["id", "asc"]]\' columns=\'["id", "geocoverage"]\' aggregates=\'{"id": "distinct count"}\' id="chart-10008"></perspective-viewer>';
  $subsection["chart"]["10008"]["lib"] = 'perspective';
*/

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

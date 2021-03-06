<?php

  require_once("../config/baseuri.php");
  require_once("../config/folders.php");
  require_once("../config/sources.php");

  $target_folder = $data_folder;

  foreach (glob($data_folder . "*.json") as $json) {
   $csv = dirname($json) . "/" . basename($json,".json") . ".csv";
    json2csv($json, $csv);
  }

  function json2csv($jfilename, $cfilename)
  {
    if (($json = file_get_contents($jfilename)) == false)
      die('Error reading json file...');
    $data = json_decode($json, true);
    if (is_array($data) && isset($data[0]) && is_array($data[0])) {
    $fp = fopen($cfilename, 'w');
    $header = false;
    foreach ($data as $row)
    {
      if (is_array($row)) {
      $row = flatten_array($row);
//var_dump($row);
      if (empty($header))
      {
        $header = array_keys($row);
        fputcsv($fp, $header);
        $header = array_flip($header);
      }
      fputcsv($fp, array_merge($header, $row));
    }
    }
    fclose($fp);
    }
    return;
  }

  function flatten_array($a) {
    foreach ($a as $k => $v) {
      if (is_array($v)) {
        if (is_assoc_array($v)) {
          foreach ($v as $vk => $vv) {
            if (is_array($vv)) {
              
            }
            else {
              $a[$k . ":" . $vk] = $vv;
            }
            unset($a[$k]);
          }
        }
        else {
          $a[$k] = implode("|", $v);
        }
      }
    }
    return $a;
  }

  function is_assoc_array($a){
    $keys = array_keys($a);
    return $keys !== array_keys($keys);
  }

?>

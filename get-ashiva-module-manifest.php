<?php

  //******************//
 //* DISPLAY ERRORS *//
//******************//

error_reporting(E_ALL);
ini_set('display_errors', 1);


  //****************//
 //* INCLUDE CORE *//
//****************//

require_once $_SERVER['DOCUMENT_ROOT'].'/.assets/system/core/core.php';


  //*****************************//
 //* GET ashivaModule MANIFEST *//
//*****************************//

function getAshivaModuleManifest($Module, $Publisher) {

  $moduleManifestPath = $_SERVER['DOCUMENT_ROOT'].'/.assets/modules/'.url($Publisher).'/'.url($Module).'/'.url($Module).'.php';
  $moduleManifest = file_get_contents($moduleManifestPath);
  $moduleManifest = str_replace('<?php', '', $moduleManifest);
  $moduleManifest = str_replace('?>', '', $moduleManifest);

  return $moduleManifest;
}

?>

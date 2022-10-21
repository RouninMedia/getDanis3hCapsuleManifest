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


  //*******************************//
 //* GET danis3hCapsule MANIFEST *//
//*******************************//

function getDanis3hCapsuleManifest($Capsule, $Publisher) {

  $capsuleManifestPath = $_SERVER['DOCUMENT_ROOT'].'/.assets/modules/'.url($Publisher).'/'.url($Capsule).'/'.url($Capsule).'.php';
  $capsuleManifest = file_get_contents($moduleManifestPath);
  $capsuleManifest = str_replace('<?php', '', $moduleManifest);
  $capsuleManifest = str_replace('?>', '', $moduleManifest);

  return $capsuleManifest;
}

?>

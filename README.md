# getAshivaModuleManifest
`getAshivaModuleManifest()` is a PHP function which requests and returns an ashivaModule Manifest.

The function requires **two parameters**:

 - `$Module`
 - `$Publisher`

## getAshivaModuleManifest Function:

```
function getModuleManifest($Module, $Publisher) {

  $moduleManifestPath = $_SERVER['DOCUMENT_ROOT'].'/.assets/modules/'.url($Publisher).'/'.url($Module).'/'.url($Module).'.php';
  $moduleManifest = file_get_contents($moduleManifestPath);
  $moduleManifest = str_replace('<?php', '', $moduleManifest);
  $moduleManifest = str_replace('?>', '', $moduleManifest);

  return $moduleManifest;
}
```

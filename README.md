# getDanis3hCapsuleManifest
`getDanis3hCapsuleManifest()` is a PHP function which requests and returns a Danis3h Capsule Manifest.

The function requires **two parameters**:

 - `$Module`
 - `$Publisher`

## getDanis3hCapsuleManifest Function:

```
function getDanis3hCapsuleManifest($Capsule, $Publisher) {

  $capsuleManifestPath = $_SERVER['DOCUMENT_ROOT'].'/.assets/modules/'.url($Publisher).'/'.url($Capsule).'/'.url($Capsule).'.php';
  $capsuleManifest = file_get_contents($capsuleManifestPath);
  $capsuleManifest = str_replace('<?php', '', $capsuleManifest);
  $capsuleManifest = str_replace('?>', '', $capsuleManifest);

  return $capsuleManifest;
}
```

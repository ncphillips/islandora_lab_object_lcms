<?php
/*
  Template file for lcms object page.

  Honestly not sure what's going on here, basically just copying from specimen...

  What will we do with the raw, we probably don't want to display it by any means.
*/

$islandora_content = $islandora_object['LCMS']->content;
$path = drupal_get_path('module', 'islandora_bioinformatics_lcms');

?>

<div class="islandora-lcms-object islandora">
  <div class ="lcms_csv">
  <?php print $variables['islandora_csv'] ?>
  <?php print $variables['islandora_raw'] ?>
  <?php print $variables['islandora_lcms'] ?>
  </div>
</div>

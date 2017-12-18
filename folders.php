<?php
  $element = "";
  if (!empty($_GET['element'])) {
    $element = $_GET['element'];

    // We loop through the element folders to see if ours exists
    foreach (new DirectoryIterator('./recipes') as $eleFolder) {
      // Always ignore dot folders
      if ($eleFolder->isDot()) continue;

      if (strtolower($eleFolder) == strtolower($element)) echo "exists";
    }
  }
?>

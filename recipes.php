<?php
  $element = "";
  if (!empty($_GET['element'])) {
    $element = $_GET['element'];

    // First, we loop through the element folders to see if ours exists
    foreach (new DirectoryIterator('./recipes') as $eleFolder) {
      // Always ignore dot folders
      if ($eleFolder->isDot()) continue;

      if (strtolower($eleFolder) == strtolower($element)) {
        // Then, we find all items inside the element folder, which should be information and recipe folders
        foreach (new DirectoryIterator('./recipes/' . $eleFolder->getFilename()) as $recipeFolder) {
          if ($recipeFolder->isDot()) continue;

          // One of these folders might be a file with information to display to the user
          if ($recipeFolder->isFile()) {
            $eleInfo = file_get_contents('./recipes/' . $eleFolder->getFilename() . "/" . $recipeFolder);
            echo '<div class="element-info-container">' . $eleInfo . "</div>";
          }

          // Then, we need to iterate through the recipe folders for each recipe file
          if ($recipeFolder->isDir()) {
            // We want all of the recipe files to be grouped together
            echo '<div class="recipe">';
            echo '<h4>' . $recipeFolder->getFilename() . '</h4>';
            foreach (new DirectoryIterator('./recipes/' . $eleFolder->getFilename() . '/' . $recipeFolder->getFilename()) as $recipe) {
              if ($recipe->isDot()) continue;

              if ($recipe->isFile()) {
                // author.txt is the contributor information for the recipe
                if ($recipe->getFilename() == "author.txt") {
                  $authorInfo = file_get_contents('./recipes/' . $eleFolder->getFilename() . '/' . $recipeFolder->getFilename() . "/author.txt");
                  echo '<p class="author-info-container">' . $authorInfo . "</p>";
                }
                // Create a link to each file in the group, except author.txt
                else echo '<a href="recipes/' . $eleFolder->getFilename() . '/' . $recipeFolder->getFilename() . '/' . $recipe->getFilename() . '">' . $recipe->getFilename() . "</a><br />";
              }
            }
            echo '</div>'; // end recipie
          }
        }
      }
    }
  }
?>

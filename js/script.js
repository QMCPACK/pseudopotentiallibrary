/*
  Author: Ashley Pressley
  Description: Pseudopotentials Library Specific Scripting
  Version: 0.5.0
  Updated: 2017/12/13
  License: GNU General Public License v2 or later
  Text Domain: pseudopotentialslibrary
*/

// Here we prep the call and handle the callback response for folder and file data
function getRecipe(element) {
  var capitalized = element.charAt(0).toUpperCase() + element.slice(1);
  var text = "<h2>" + capitalized + "</h2>";
  // Let's craft our recipe call with our specific element
  var url = "recipes.php?element=" + element;

  // Call for our folder and file information
  ajax(url)
    .then(function(result) {
      if (result === "") text += "No files found.";
      else text += '<div class="recipe-container">' + result + "</div>";
    })
    .catch(function(e) {
      text += "<p>An error occured: " + e + "</p>";
    })
    .then(function() { document.getElementById('results').innerHTML = text; });
}

// This is the AJAX request to acquire the data from PHP
function ajax(url) {
  return new Promise(function(resolve, reject) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
      resolve(this.responseText);
    };
    xhr.onerror = reject;
    xhr.open('GET', url);
    xhr.send();
  });
}

// Document ready
$(document).ready(function() {
  $('.element').each(function() {
    var elementName = $(this).attr('id');
    // Let's craft our folder call with our specific element
    var url = "folders.php?element=" + elementName;

    // Call for our folder existence
    ajax(url)
      .then(function(result) {
        if (result !== "") {
          var element = document.getElementById(elementName);
          element.className += " active";
        }
      })
      .catch(function(e) {
        console.log("<p>An error occured: " + e + "</p>");
      });
  });
});

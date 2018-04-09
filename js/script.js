/*
  Author: Ashley Pressley
  Description: Pseudopotentials Library Specific Scripting
  Version: 1.1
  Updated: 2018/04/09
  License: GNU General Public License v2 or later
  Text Domain: pseudopotentialslibrary
*/

// Global Periodic Table Arrays
var elementsName = [ "Hydrogen", "Helium", "Lithium", "Beryllium", "Boron", "Carbon", "Nitrogen", "Oxygen", "Fluorine", "Neon", "Sodium", "Magnesium", "Aluminum", "Silicon", "Phosphorus", "Sulfur", "Chlorine", "Argon", "Potassium", "Calcium", "Scandium", "Titanium", "Vanadium", "Chromium", "Manganese", "Iron", "Cobalt", "Nickel", "Copper", "Zinc", "Gallium", "Germanium", "Arsenic", "Selenium", "Bromine", "Krypton", "Rubidium", "Strontium", "Yttrium", "Zirconium", "Niobium", "Molybdenum", "Technetium", "Ruthenium", "Rhodium", "Palladium", "Silver", "Cadmium", "Indium", "Tin", "Antimony", "Tellurium", "Iodine", "Xenon", "Cesium", "Barium", "Lanthanum", "Cerium", "Praseodymium", "Neodymium", "Promethium", "Samarium", "Europium", "Gadolinium", "Terbium", "Dysprosium", "Holmium", "Erbium", "Thulium", "Ytterbium", "Lutetium", "Hafnium", "Tantalum", "Tungsten", "Rhenium", "Osmium", "Iridium", "Platinum", "Gold", "Mercury", "Thallium", "Lead", "Bismuth", "Polonium", "Astatine", "Radon", "Francium", "Radium", "Actinium", "Thorium", "Protactinium", "Uranium", "Neptunium", "Plutonium", "Americium", "Curium", "Berkelium", "Californium", "Einsteinium", "Fermium", "Mendelevium", "Nobelium", "Lawrencium", "Rutherfordium", "Dubnium", "Seaborgium", "Bohrium", "Hassium", "Meitnerium", "Darmstadtium",  "Roentgenium", "Copernicium", "Nihonium", "Flerovium", "Moscovium", "Livermorium", "Tennessine", "Oganesson" ];
var elementsSymbol = [ "H", "He", "Li", "Be", "B", "C", "N", "O", "F", "Ne", "Na", "Mg", "Al", "Si", "P", "S", "Cl", "Ar", "K", "Ca", "Sc", "Ti", "V", "Cr", "Mn", "Fe", "Co", "Ni", "Cu", "Zn", "Ga", "Ge", "As", "Se", "Br", "Kr", "Rb", "Sr", "Y", "Zr", "Nb", "Mo", "Tc", "Ru", "Rh", "Pd", "Ag", "Cd", "In", "Sn", "Sb", "Te", "I", "Xe", "Cs", "Ba", "La", "Ce", "Pr", "Nd", "Pm", "Sm", "Eu", "Gd", "Tb", "Dy", "Ho", "Er", "Tm", "Yb", "Lu", "Hf", "Ta", "W", "Re", "Os", "Ir", "Pt", "Au", "Hg", "Tl", "Pb", "Bi", "Po", "At", "Rn", "Fr", "Ra", "Ac", "Th", "Pa", "U", "Np", "Pu", "Am", "Cm", "Bk", "Cf", "Es", "Fm", "Md", "No", "Lr", "Rf", "Db", "Sg", "Bh", "Hs", "Mt", "Ds", "Rg", "Cn", "Nh", "Fl", "Mc", "Lv", "Ts", "Og" ];


// Here we prep the call and handle the callback response for folder and file data
function getRecipe(element) {
  var capitalized = element.charAt(0).toUpperCase() + element.slice(1);
  var text = "<h2>" + capitalized + "</h2>";
  // Let's craft our recipe call with our specific element
  var symbol = elementsSymbol[elementsName.indexOf(capitalized)];
  var url = "recipes.php?element=" + symbol;

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
    var capitalized = elementName.charAt(0).toUpperCase() + elementName.slice(1);
    // Let's craft our folder call with our specific element
    var symbol = elementsSymbol[elementsName.indexOf(capitalized)];
    var url = "folders.php?element=" + symbol;

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

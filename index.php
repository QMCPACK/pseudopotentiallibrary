<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Pseudopotential Library">
		<meta name="keywords" content="HTML,CSS,JavaScript">
		<meta name="author" content="Ashley Pressley">

		<title>Pseudopotential Library</title>

		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">
		<link href="./images/fav.ico" rel="icon">

		<?php require_once 'Parsedown.php'; ?>
	</head>

	<body>
		<div id="main" class="container">
			<h1>Pseudopotential Library</h1>
			<div id="text-above">
				<?php
					$ParsedownAbove = new Parsedown();
					echo $ParsedownAbove->text(file_get_contents('includes/above.php'));
				?>
			</div>

			<div id="periodic-table">
				<div id="group-1" class="element-row">
					<div id="hydrogen" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('hydrogen')">H</div>
					<div class="element-block-16">&nbsp;</div>
					<div id="helium" class="element element-block-1 noble-gas" onclick="getRecipe('helium')">He</div>
				</div>
				<div id="group-2" class="element-row">
					<div id="lithium" class="element element-block-1 alkali-metal" onclick="getRecipe('lithium')">Li</div>
					<div id="beryllium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('beryllium')">Be</div>
					<div class="element-block-10">&nbsp;</div>
					<div id="boron" class="element element-block-1 metalloid" onclick="getRecipe('boron')">B</div>
					<div id="carbon" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('carbon')">C</div>
					<div id="nitrogen" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('nitrogen')">N</div>
					<div id="oxygen" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('oxygen')">O</div>
					<div id="flourine" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('flourine')">F</div>
					<div id="neon" class="element element-block-1 noble-gas" onclick="getRecipe('neon')">Ne</div>
				</div>
				<div id="group-3" class="element-row">
					<div id="sodium" class="element element-block-1 alkali-metal" onclick="getRecipe('sodium')">Na</div>
					<div id="magnesium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('magnesium')">Mg</div>
					<div class="element-block-10">&nbsp;</div>
					<div id="aluminium" class="element element-block-1 post-transition-metal" onclick="getRecipe('aluminium')">Al</div>
					<div id="silicon" class="element element-block-1 metalloid" onclick="getRecipe('silicon')">Si</div>
					<div id="phosporus" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('phosporus')">P</div>
					<div id="sulfur" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('sulfur')">S</div>
					<div id="chlorine" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('chlorine')">Cl</div>
					<div id="argon" class="element element-block-1 noble-gas" onclick="getRecipe('argon')">Ar</div>
				</div>
				<div id="group-4" class="element-row">
					<div id="potassium" class="element element-block-1 alkali-metal" onclick="getRecipe('potassium')">K</div>
					<div id="calcium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('calcium')">Ca</div>
					<div id="scandium" class="element element-block-1 transition-metal" onclick="getRecipe('scandium')">Sc</div>
					<div id="titanium" class="element element-block-1 transition-metal" onclick="getRecipe('titanium')">Ti</div>
					<div id="vanadium" class="element element-block-1 transition-metal" onclick="getRecipe('vanadium')">V</div>
					<div id="chromium" class="element element-block-1 transition-metal" onclick="getRecipe('chromium')">Cr</div>
					<div id="manganese" class="element element-block-1 transition-metal" onclick="getRecipe('manganese')">Mn</div>
					<div id="iron" class="element element-block-1 transition-metal" onclick="getRecipe('iron')">Fe</div>
					<div id="cobalt" class="element element-block-1 transition-metal" onclick="getRecipe('cobalt')">Co</div>
					<div id="nickel" class="element element-block-1 transition-metal" onclick="getRecipe('nickel')">Ni</div>
					<div id="copper" class="element element-block-1 transition-metal" onclick="getRecipe('copper')">Cu</div>
					<div id="zinc" class="element element-block-1 transition-metal" onclick="getRecipe('zinc')">Zn</div>
					<div id="gallium" class="element element-block-1 post-transition-metal" onclick="getRecipe('gallium')">Ga</div>
					<div id="germanium" class="element element-block-1 metalloid" onclick="getRecipe('germanium')">Ge</div>
					<div id="arsenic" class="element element-block-1 metalloid" onclick="getRecipe('arsenic')">As</div>
					<div id="selenium" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('selenium')">Se</div>
					<div id="bromine" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('bromine')">Br</div>
					<div id="krypton" class="element element-block-1 noble-gas" onclick="getRecipe('krypton')">Kr</div>
				</div>
				<div id="group-5" class="element-row">
					<div id="rubidium" class="element element-block-1 alkali-metal" onclick="getRecipe('rubidium')">Rb</div>
					<div id="strontium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('strontium')">Sr</div>
					<div id="yttrium" class="element element-block-1 transition-metal" onclick="getRecipe('yttrium')">Y</div>
					<div id="zironium" class="element element-block-1 transition-metal" onclick="getRecipe('zironium')">Zr</div>
					<div id="niobium" class="element element-block-1 transition-metal" onclick="getRecipe('niobium')">Nb</div>
					<div id="molybdenum" class="element element-block-1 transition-metal" onclick="getRecipe('molybdenum')">Mo</div>
					<div id="technetium" class="element element-block-1 transition-metal" onclick="getRecipe('technetium')">Tc</div>
					<div id="ruthenium" class="element element-block-1 transition-metal" onclick="getRecipe('ruthenium')">Ru</div>
					<div id="rhodium" class="element element-block-1 transition-metal" onclick="getRecipe('rhodium')">Rh</div>
					<div id="palladium" class="element element-block-1 transition-metal" onclick="getRecipe('palladium')">Pd</div>
					<div id="silver" class="element element-block-1 transition-metal" onclick="getRecipe('silver')">Ag</div>
					<div id="cadmium" class="element element-block-1 transition-metal" onclick="getRecipe('cadmium')">Cd</div>
					<div id="indium" class="element element-block-1 post-transition-metal" onclick="getRecipe('indium')">In</div>
					<div id="tin" class="element element-block-1 post-transition-metal" onclick="getRecipe('tin')">Sn</div>
					<div id="antimony" class="element element-block-1 metalloid" onclick="getRecipe('antimony')">Sb</div>
					<div id="tellurium" class="element element-block-1 metalloid" onclick="getRecipe('tellurium')">Te</div>
					<div id="iodine" class="element element-block-1 diatomic-nonmetal" onclick="getRecipe('iodine')">I</div>
					<div id="xenon" class="element element-block-1 noble-gas" onclick="getRecipe('xenon')">Xe</div>
				</div>
				<div id="group-6" class="element-row">
					<div id="caesium" class="element element-block-1 alkali-metal" onclick="getRecipe('caesium')">Cs</div>
					<div id="barium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('barium')">Ba</div>
					<div id="lanthanum" class="element element-block-1 lanthanide" onclick="getRecipe('lanthanum')">La</div>
					<div id="hafnium" class="element element-block-1 transition-metal" onclick="getRecipe('hafnium')">Hf</div>
					<div id="tatalum" class="element element-block-1 transition-metal" onclick="getRecipe('tatalum')">Ta</div>
					<div id="tungsten" class="element element-block-1 transition-metal" onclick="getRecipe('tungsten')">W</div>
					<div id="rhenium" class="element element-block-1 transition-metal" onclick="getRecipe('rhenium')">Re</div>
					<div id="osmium" class="element element-block-1 transition-metal" onclick="getRecipe('osmium')">Os</div>
					<div id="iridium" class="element element-block-1 transition-metal" onclick="getRecipe('iridium')">Ir</div>
					<div id="platinum" class="element element-block-1 transition-metal" onclick="getRecipe('platinum')">Pt</div>
					<div id="gold" class="element element-block-1 transition-metal" onclick="getRecipe('gold')">Au</div>
					<div id="mercury" class="element element-block-1 transition-metal" onclick="getRecipe('mercury')">Hg</div>
					<div id="thallium" class="element element-block-1 post-transition-metal" onclick="getRecipe('thallium')">Tl</div>
					<div id="lead" class="element element-block-1 post-transition-metal" onclick="getRecipe('lead')">Pb</div>
					<div id="bismuth" class="element element-block-1 post-transition-metal" onclick="getRecipe('bismuth')">Bi</div>
					<div id="polonium" class="element element-block-1 post-transition-metal" onclick="getRecipe('polonium')">Po</div>
					<div id="astatine" class="element element-block-1 metalloid" onclick="getRecipe('astatine')">At</div>
					<div id="radon" class="element element-block-1 noble-gas" onclick="getRecipe('radon')">Rn</div>
				</div>
				<div id="group-7" class="element-row">
					<div id="francium" class="element element-block-1 alkali-metal" onclick="getRecipe('francium')">Fr</div>
					<div id="radium" class="element element-block-1 alkaline-earth-metal" onclick="getRecipe('radium')">Ra</div>
					<div id="actinium" class="element element-block-1 actinide" onclick="getRecipe('actinium')">Ac</div>
					<div id="rutherfordium" class="element element-block-1 transition-metal" onclick="getRecipe('rutherfordium')">Rf</div>
					<div id="dubnium" class="element element-block-1 transition-metal" onclick="getRecipe('dubnium')">Db</div>
					<div id="seaborgium" class="element element-block-1 transition-metal" onclick="getRecipe('seaborgium')">Sg</div>
					<div id="bohrium" class="element element-block-1 transition-metal" onclick="getRecipe('bohrium')">Bh</div>
					<div id="hassium" class="element element-block-1 transition-metal" onclick="getRecipe('hassium')">Hs</div>
					<div id="meitnerium" class="element element-block-1 unknown" onclick="getRecipe('meitnerium')">Mt</div>
					<div id="darmstadtium" class="element element-block-1 unknown" onclick="getRecipe('darmstadtium')">Ds</div>
					<div id="roentgenium" class="element element-block-1 unknown" onclick="getRecipe('roentgenium')">Rg</div>
					<div id="copernicium" class="element element-block-1 transition-metal" onclick="getRecipe('copernicium')">Cn</div>
					<div id="nihonium" class="element element-block-1 unknown" onclick="getRecipe('nihonium')">Nh</div>
					<div id="flerovium" class="element element-block-1 post-transition-metal" onclick="getRecipe('flerovium')">Fl</div>
					<div id="moscovium" class="element element-block-1 unknown" onclick="getRecipe('moscovium')">Mc</div>
					<div id="livermorium" class="element element-block-1 unknown" onclick="getRecipe('livermorium')">Lv</div>
					<div id="tennessine" class="element element-block-1 unknown" onclick="getRecipe('tennessine')">Ts</div>
					<div id="oganesson" class="element element-block-1 unknown" onclick="getRecipe('oganesson')">Og</div>
				</div>
				<p class="periodic-split">&nbsp;</p>
				<div id="group-8" class="element-row">
					<div class="element-block-3">&nbsp;</div>
					<div id="cerium" class="element element-block-1 lanthanide" onclick="getRecipe('cerium')">Ce</div>
					<div id="praseodymium" class="element element-block-1 lanthanide" onclick="getRecipe('praseodymium')">Pr</div>
					<div id="neodymium" class="element element-block-1 lanthanide" onclick="getRecipe('neodymium')">Nd</div>
					<div id="promethium" class="element element-block-1 lanthanide" onclick="getRecipe('promethium')">Pm</div>
					<div id="samarium" class="element element-block-1 lanthanide" onclick="getRecipe('samarium')">Sm</div>
					<div id="europium" class="element element-block-1 lanthanide" onclick="getRecipe('europium')">Eu</div>
					<div id="gadolinium" class="element element-block-1 lanthanide" onclick="getRecipe('gadolinium')">Gd</div>
					<div id="terbium" class="element element-block-1 lanthanide" onclick="getRecipe('terbium')">Tb</div>
					<div id="dysprosium" class="element element-block-1 lanthanide" onclick="getRecipe('dysprosium')">Dy</div>
					<div id="holmium" class="element element-block-1 lanthanide" onclick="getRecipe('holmium')">Ho</div>
					<div id="erbium" class="element element-block-1 lanthanide" onclick="getRecipe('erbium')">Er</div>
					<div id="thulium" class="element element-block-1 lanthanide" onclick="getRecipe('thulium')">Tm</div>
					<div id="ytterbium" class="element element-block-1 lanthanide" onclick="getRecipe('ytterbium')">Yb</div>
					<div id="lutetuim" class="element element-block-1 lanthanide" onclick="getRecipe('lutetuim')">Lu</div>
				</div>
				<div id="group-9" class="element-row">
					<div class="element-block-3">&nbsp;</div>
					<div id="thorium" class="element element-block-1 actinide" onclick="getRecipe('thorium')">Th</div>
					<div id="protactinium" class="element element-block-1 actinide" onclick="getRecipe('protactinium')">Pa</div>
					<div id="uranium" class="element element-block-1 actinide" onclick="getRecipe('uranium')">U</div>
					<div id="neptunium" class="element element-block-1 actinide" onclick="getRecipe('neptunium')">Np</div>
					<div id="plutonium" class="element element-block-1 actinide" onclick="getRecipe('plutonium')">Pu</div>
					<div id="americium" class="element element-block-1 actinide" onclick="getRecipe('americium')">Am</div>
					<div id="curium" class="element element-block-1 actinide" onclick="getRecipe('curium')">Cm</div>
					<div id="berkelium" class="element element-block-1 actinide" onclick="getRecipe('berkelium')">Bk</div>
					<div id="californium" class="element element-block-1 actinide" onclick="getRecipe('californium')">Cf</div>
					<div id="einsteinium" class="element element-block-1 actinide" onclick="getRecipe('einsteinium')">Es</div>
					<div id="fermium" class="element element-block-1 actinide" onclick="getRecipe('fermium')">Fm</div>
					<div id="mendelevium" class="element element-block-1 actinide" onclick="getRecipe('mendelevium')">Md</div>
					<div id="nobelium" class="element element-block-1 actinide" onclick="getRecipe('nobelium')">No</div>
					<div id="lawrencium" class="element element-block-1 actinide" onclick="getRecipe('lawrencium')">Lr</div>
				</div>
			</div>

			<div id="text-middle">
				<?php
					$ParsedownMiddle = new Parsedown();
					echo $ParsedownMiddle->text(file_get_contents('includes/middle.php'));
				?>
			</div>

			<div id="results">
				<p>Click an element above to view available recipes.</p>
			</div>

			<div id="text-below">
				<?php
					$ParsedownBelow = new Parsedown();
					echo $ParsedownBelow->text(file_get_contents('includes/below.php'));
				?>
			</div>
		</div>

		<script src="./js/jquery.js" type="text/javascript"></script>
		<script src="./js/bootstrap.min.js" type="text/javascript"></script>
		<script src="./js/script.js" type="text/javascript"></script>

		<!-- Site Improve Capture -->
		<script>
			(function() {
		    var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
		    sz.src = '//siteimproveanalytics.com/js/siteanalyze_6024880.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
			})();
		</script>
	</body>

</html>

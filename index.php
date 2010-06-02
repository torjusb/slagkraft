<!DOCTYPE html>
<html>
<head>
	<?php
	define('BASEPATH', 'http://' . $_SERVER['HTTP_HOST'] . '/slagkraft/');
	
	$artists = array('BigBang', 'DumDum Boys', 'Bertine Zetlitz', 'Tolv Volt', 'Burning Rubber', 'Pain of Salvation', 'Bonk', 'Lukas Kasha');
	$tree = array(
		'Nyheter' => array('2010', '2009', '2008', '2007', 'Tidligere arkiver'),
		'Program' => array('Torsdag 24.', 'Fredag 25.', 'Lørdag 26.'),
		'Artister' => $artists,
		'Bestilling & Priser' => 'Bestilling & Priser',
		'Urørt' => array('Påmelding', 'Avstemming'),
		'Praktisk informasjon' => array('Spørmål og svar'),
		'Om Slagkraft' => array('Historie', 'Tidligere arrangementer', 'Kontakt oss'),
		'English' => 'English'
	);
	$lorems = array(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a diam quis felis sollicitudin tempor ac sed massa. Duis condimentum, augue ut molestie varius, tellus turpis bibendum elit, vitae bibendum ipsum risus in ipsum. Praesent ut aliquam odio.',
		'Donec hendrerit, felis non tristique ullamcorper, urna sem convallis orci, eu aliquet augue augue sed purus. Suspendisse potenti.',
		'Quisque ac quam magna. Vivamus eleifend tortor non odio viverra accumsan. Fusce ac tortor at augue vehicula accumsan in et dolor. Cras augue diam, gravida quis euismod non, pharetra non eros. Etiam iaculis eleifend libero, in lobortis lacus accumsan id.',
		'Phasellus ac luctus erat. Quisque et elit eros, ut vulputate augue. Nam tincidunt fermentum lorem a bibendum. Curabitur venenatis semper velit. Maecenas sagittis metus sed magna pulvinar et consectetur tortor vestibulum. Vivamus mollis velit sit amet ipsum aliquam fringilla eu eget mauris.',
		'Nulla vel vestibulum leo. Suspendisse lacus dui, euismod vitae sodales mollis, vulputate non lectus. Vivamus tristique mattis euismod.',
	);
	$loremCount = count($lorems);
	
	if (isset($_GET['page']) && !empty($_GET['page']) && file_exists('tpl/' . $_GET['page'] . '.php')) {
		$tpath = 'tpl/' . $_GET['page'] . '.php';
		$tname = $_GET['page'];
	} else {
		$tpath = 'tpl/frontpage.php';
		$tname = 'frontpage';
	}
	?>
	<meta charset="utf-8" />
	<title></title>
	<base href="<?php echo BASEPATH; ?>" />
	<link href="style.css" rel="stylesheet" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		$(function () {
			(function () {
			var latlng = new google.maps.LatLng(61.143235,9.0966);
			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				navigationControl: true,
			};
			var map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
			})();
		});
	
	</script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body class="<?php echo $tname; ?>">
	<div id="wrapper">
		<?php include 'inc/header.inc'; ?>
		<?php include $tpath; ?>		
		<?php include 'inc/footer.inc'; ?>
	</div>
</body>
</html>
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
	
	$suffix = 'Slagkraft';
	switch ($tname) {
		case 'frontpage':
			$suffix = false;
			$ptitle = 'Velkommen til Slagkraft';
			break;
		case 'article':
			$ptitle = 'Lorem ipsum dolor sit amet';
			break;
		case 'artist':
			$ptitle = 'Tolv Volt';
			break;
		case 'contact':
			$ptitle = 'Kontakt oss';
			break;
		case 'program':
			$ptitle = 'Program';
			break;
	}
	?>
	<meta charset="utf-8" />
	<title><?php echo $ptitle; ?><?php if ($suffix) echo ' » ' . $suffix; ?></title>
	<base href="<?php echo BASEPATH; ?>" />
	<link href="style.css" rel="stylesheet" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="js/modernizr-1.1.min.js"></script>
	<script src="js/js.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		$(function () {
			(function () {
			var latlng = new google.maps.LatLng(61.143235,9.0966);
			var mapTypes = [];
			mapTypes["TERRAIN"] = false;
			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				navigationControl: true,
				navigationControlOptions: {
					position: google.maps.ControlPosition.BOTTOM_LEFT,
				},
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
					position: google.maps.ControlPosition.BOTTOM,
			    },
			};
			console.log(google.maps);
			google.maps.ControlPosition.BOTTOM = 15;
			google.maps.MapTypeId.HYBRID = '';
			google.maps.MapTypeId.TERRAIN = '';

			console.log(google.maps.MapTypeId);
			var map = new google.maps.Map(document.getElementById("googlemaps"), myOptions);
			})();
		});
	
	</script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if IE 7]>
		<link href="ie7hacks.css" rel="stylesheet" media="screen" />
	<![endif]-->
</head>
<body class="<?php echo $tname; ?>">
	<div id="wrapper">
		<?php include 'inc/header.inc'; ?>
		<?php include $tpath; ?>		
		<?php include 'inc/footer.inc'; ?>
	</div>
</body>
</html>
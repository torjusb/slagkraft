<!DOCTYPE html>
<html>
<head>
	<?php
	$artists = array('BigBang', 'DumDum Boys', 'Bertine Zetlitz', 'Tolv Volt', 'Buring Rubber', 'Pain of Salvation', 'Bonk', 'Lukas Krasha');
	$tree = array(
		'Nyheter' => array('2010', '2009', '2008', '2007', 'Tidligere arkiver'),
		'Program' => array('Torsdag 24.', 'Fredag 25.', 'Lørdag 26.'),
		'Artister' => $artists,
		'Urørt' => array('Påmelding', 'Avstemming'),
		'Praktisk informasjon' => array('Spørmål og svar'),
		'Om Slagkraft' => array('Historie', 'Tidligere arrangementer', 'Kontakt oss'),
		'English' => 'English'
	);
	?>
	<meta charset="utf-8" />
	<title></title>
	<link href="style.css" rel="stylesheet" media="screen" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
	<div id="wrapper">
		<?php include 'header.inc'; ?>
		
		<div id="mainframe" class="clearfix">
			<div class="box-wrapper">
				<section id="featured">
					<nav class="slide-nav">
						<ul>
							<li><a href="#slide-1">1</a></li>
							<li><a href="#slide-2">2</a></li>
							<li><a href="#slide-3">3</a></li>
						</ul>
					</nav>
					<ul>
						<li id="slide-1">
							<img src="#" />
							<p>Vi lader opp til festivalen</p>
						</li>
						<li id="slide-2"><img src="#" /></li>
						<li id="slide-3"><img src="#" /></li>
					</ul>
				</section>
				<div id="news-subs">
					<section id="latest-news">
						<h1>Siste <b>nytt</b></h1>
						<ul>
							<li>
								<time>29 Apr</time>
								<a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
							</li>
							<li>
								<time>20 Apr</time>
								<a href="#">Mauris ultrices ultricies felis, vitae fermentum dui volutpat sed.</a>
							</li>
							<li>
								<time>20 Feb</time>
								<a href="#">Pellentesque imperdiet quam nec velit euismod sed.</a>
							</li>
						</ul>
					</section>
					<aside id="subs-box">
						<h1>Meld deg på <b>nyhetsbrev</b></h1>
						<form action="">
							<p>Meld deg på nyhetsbrev i dag, og få ukentlige oppdateringer på mail.</p>
							<label>
								<span>Din e-post adresse</span>
								<input type="text" />
							</label>
						</form>		
						<ul>
							<li><a href="#">RSS</a></li>
							<li><a href="#">Følg oss på Twitter</a></li>
							<li><a href="#">Bli fan på Facebook</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<nav id="artists">
				<ul>
					<?php foreach ($artists as $artist) { ?>
						<li>
							<a href="#"><?php echo $artist; ?></a>
						</li>
					<?php } ?>
				</ul>
			</nav>
			<aside id="right-col">
				<section id="order-tickets">
					<h1>Bestill biletter <b>i dag!</b></h1>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in arcu at du.</p>
					<p class="order-button">
						<a href="#">Bestll biletter nå »</a>
					</p>
					<span class="top-left"></span>
					<span class="bottom-right"></span>
				</section>
				
				<section id="playlists">
					<ul>
						<li class="wimp">
							<a href="#"><span></span>Wimp playlist</a>
						</li>
						<li class="spotify">
							<a href="#"><span></span>Spotify playlist</a>
						</li>
					</ul>
				</section>
				
				<section id="untouched">
					<h1><a href="#"><span></span>Urørt</a></h1>
					<nav>
						<ul>
							<li><a href="#">Stem på <b>din favoritt</b></a></li>
							<li><a href="">Meld på <b>ditt band</b></a></li>
						</ul>
					</nav>
				</section>
				
				<section id="twitter-updates">
					<h1>Snakk på <b>Twitter</b></h1>
					<ul>
						<li>
							<h2><a href="#">Aamann</a></h2>
							<p>
								<span>-</span>
								Takka nei til en invitasjon fra en festival i Israel. Nok er nok 
							</p>
						</li>
						<li>
							<h2><a href="#">MTV_Denmark</a></h2>
							<p>
								<span>-</span>
								Gør en trist mandag mindre trist - vind billetter til årets Roskilde Festival på MTV.dk!
							</p>
						</li>
						<li>
							<h2><a href="#">kenspo</a></h2>
							<p>
								<span>-</span>
								RT <a href="#">@sjefsengel</a>: Hovefestivalen mangler flere frivillige voksne - så er de i mål. Vil DU være med? <a href="#">http://bit.ly/bwut67</a>  
							</p>
						</li>
					</ul>	
				</section>
				
				<section id="facebook-fans">
					<h1>Fans på <b>Facebook</b></h1>
					<ul>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
						<li><a href=""><img src="" alt="" /></a></li>
					</ul>
					<p>
						<strong>9387</strong> er fan av Slagkraft <br />
						- <a href="#">bli fan du også!</a>
					</p>
				</section>
			</aside>
			<aside id="random-galleries">
				<ul>
					<li><a href="#"><img src="" alt="" /></a></li>
					<li><a href="#"><img src="" alt="" /></a></li>
					<li><a href="#"><img src="" alt="" /></a></li>
				</ul>
			</aside>
			<aside id="map">
				google maps
			</aside>
		</div>
		
		<?php include 'footer.inc'; ?>
	</div>
</body>
</html>
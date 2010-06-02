<div id="mainframe" class="clearfix">
	<div id="content">
		<nav id="subnav" class="clearfix">
			<p>
				<a href="#">Hjem</a> / <a href="#">Artister</a> / <span>Tolv Volt</span>
			</p>
			<ul>
				<li class="selected"><a href="#">Artist info</a></li>
				<li><a href="#">Bildegalleri</a></li>
			</ul>
		</nav>
		<article id="article">
			<h1 class="heading">Tolv Volt</h1>
			
			<div class="images">
				<img src="img/artists/tolv_volt/main_1.png" alt="Tolv Volt" class="main" />
				<div class="thumbs">
					<img src="img/artists/tolv_volt/thumb_1.png" alt="thumb" />
					<img src="img/artists/tolv_volt/thumb_2.png" alt="thumb" />
					<img src="img/artists/tolv_volt/thumb_3.png" alt="thumb" />
				</div>
			</div>
			
			<div class="entry">
				<p>Rockeband med base i Oslo, startet våren 1997. Tolv Volt spiller det de selv beskriver som batteridrevet rock på norsk, musikalsk plassert et sted mellom DumDum Boys og Tre Små Kinesere. Tekstene består av små historier og øyeblikksskildringer. Frontfigur Stein Torleif Bjella (vokal, gitar) skaper gjennom sine tekster et univers av både merkelige historier og lett gjenkjennende situasjoner. Her er det plass til både den kjekke sjekkeren («Kaffi og kaku») og taperen i skolegården («Liten ball»).</p>
				<p>Tolv Volt ble dannet av tre musikere fra tre forskjellige steder: Stein Torleif Bjella fra Ål i Hallingdal, Egil Stemkens (bass) fra Oslo og Bjarte Jørgensen (trommer) fra Bergen. Etter å ha vært dørselger i sju år, satte Bjella seg ned en vårdag i 1997 og begynte å skrive sanger. Da Stemkens fikk høre noen av disse, slapp han det han hadde i hendene og slo følge. De fikk med seg Jørgensen like etterpå, og platekontrakt med Sony Music ble sikret.</p>
				<p>Sommeren 1998 dro bandet sammen med produsent Jørn Christensen (Mercury Motors mfl.) til Skåne i Sverige, hvor opptakene til debutalbumet ble påbegynt. Etter å ha gjort platen ferdig i Oslo, ble den lansert med tittelen Auraspray i juni 1999. Album nummer to, Kalas, ble innspilt med Atle Karlsen fra DumDum Boys som produsent. Nå var bandet utvidet med Ørnulf Brun Snortheim (gitar, vokal), og hadde ny kontrakt med Universal Music.</p>
			</div>
			
			<aside id="comments">
				<h2>10 <b>kommentarer</b></h2>
				<section class="comments">
					<?php for ($i = 0; $i < 5; $i++) { ?>
						<article>
							<header>
								<h3>Martin Johansen</h3>
								<time>Skrevet 3 timer siden</time>
							</header>
							<p><?php echo $lorems[rand(0, $loremCount - 1)]; ?></p>
						</article>
					<?php } ?>
					<nav>
						<p>Side 1 av 2</p>
						<ul>
							<li class="current"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="#">Neste side »</a></li>
						</ul>
					</nav>
				</section>
				
				<section id="respond">
					<h3>Legg til <b>kommentar</b></h3>
					
					<form action="">
						<div class="rules">
							<p>Fyll inn din personlige info til venstre eller identifiser deg med Twitter eller Facebook.</p>
							<fieldset class="connect">
							
							</fieldset>
							<p>Gravatar er støttet, om e-post er utfylt.</p>
						</div>
						<fieldset class="form">
							<ul>
								<li class="name">
									<label>
										<span>Ditt navn <small>(påkrevd)</small></span>
										<input type="text" />
									</label>
								</li>
								<li class="email">
									<label>
										<span>Din e-post <small>(ikke synlig)</small></span>
										<input type="email" />
									</label>
								</li>
								<li class="message">
									<label>
										<span>Din melding <small>(påkrevd, maks 300 tegn)</small></span>
										<textarea></textarea>
									</label>
								</li>
							</ul>
							<input type="submit" value="Send"/>
						</fieldset>
					</form>
				</section>
			</aside>
		</article>
	</div>
	
	<aside id="right-col" class="wide">
		<?php
		include 'inc/rightcol/artists.inc';
		include 'inc/rightcol/playlists.inc';
		include 'inc/rightcol/untouched.inc';
		?>
		<section id="twitter-updates">
			<h1>Tolv Volt <b>Twitter</b></h1>
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
				<li>
					<h2><a href="#">iRelateToThis</a></h2>
					<p>
						<span>-</span>
						Torturing yourself with depressing music when you're already feeling sad.
					</p>
				</li>
				<li>
					<h2><a href="#">Aamann</a></h2>
					<p>
						<span>-</span>
						Takka nei til en invitasjon fra en festival i Israel. Nok er nok 
					</p>
				</li>
				<li>
					<h2><a href="#">jason_mraz</a></h2>
					<p>
						<span>-</span>
						Author Kurt Vonnegut once mentioned that his epitaph should read, "The only proof he needed for the existance of God was music."
					</p>
				</li>
			</ul>	
		</section>
	</aside>
</div>
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
					<input type="submit" value="Send" />
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
				<?php $imgSrc = str_replace(' ', '_', strtolower($artist)); ?>
				<li>
					<a href="?page=artist">
						<span class="overlay <?php echo $imgSrc; ?>"></span>
						<img src="img/artists/large/<?php echo $imgSrc; ?>.png" alt="bilde" />
						<span class="title"><?php echo $artist; ?></span>
					</a>
				</li>
			<?php } ?>
		</ul>
	</nav>
	<aside id="right-col">			
		<?php 
		include 'inc/rightcol/order.inc';
		include 'inc/rightcol/playlists.inc';
		include 'inc/rightcol/untouched.inc';
		?>
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

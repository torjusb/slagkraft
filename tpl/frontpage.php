<div id="mainframe" class="clearfix">
	<div class="box-wrapper">
		<section id="featured">
			<nav class="slide-nav">
				<ul>
					<li class="current"><a href="#slide-1">1</a></li>
					<li><a href="#slide-2">2</a></li>
					<li><a href="#slide-3">3</a></li>
				</ul>
			</nav>
			<ul class="slides">
				<li id="slide-1" class="current" data-title="Vi lader opp til festivalen">
					<a href="?page=article">
						<img src="img/slide-1.png" alt="asdf" />
					</a>
				</li>
				<li id="slide-2" data-title="asdf">	
					<a href="?page=article">
						<img src="img/slide-2.png" />
					</a>
				</li>
				<li id="slide-3" data-title="Jobb som frivillig yo!">
					<a href="?page=article">
						<img src="img/slide-3.png" alt="asdf" />
					</a>
				</li>
			</ul>
			<p class="title"></p>
		</section>
		<div id="news-subs">
			<section id="latest-news">
				<h1>Siste <b>nytt</b></h1>
				<ul>
					<li>
						<time datetime="2010-04-29">29 Apr</time>
						<a href="?page=article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
					</li>
					<li>
						<time datetime="2010-04-20">20 Apr</time>
						<a href="?page=article">Mauris ultrices ultricies felis, vitae fermentum dui volutpat sed.</a>
					</li>
					<li class="last">
						<time datetime="2010-02-20">20 Feb</time>
						<a href="?page=article">Pellentesque imperdiet quam nec velit euismod sed.</a>
					</li>
				</ul>
				<p class="archive">
					<a href="#">Arkiv »</a>
				</p>
			</section>
			<aside id="subs-box">
				<h1>Meld deg på <b>nyhetsbrev</b></h1>
				<form action="">
					<p>Meld deg på nyhetsbrev i dag, og få ukentlige oppdateringer på mail.</p>
					<label>
						<input type="email" placeholder="Din e-post adresse" />
					</label>
					<input type="submit" value="Send" />
				</form>		
				<ul>
					<li class="rss"><span class="icon rss"></span><a href="#">RSS</a></li>
					<li class="twitter"><span class="icon twitter"></span><a href="#">Følg oss på Twitter</a></li>
					<li class="facebook"><span class="icon facebook"></span><a href="#">Bli fan på Facebook</a></li>
				</ul>
			</aside>
		</div>
	</div>
	<nav id="artists">
		<ul>
			<?php $shuffleArtists = $artists; shuffle($shuffleArtists); ?>
			<?php foreach ($shuffleArtists as $artist) { ?>
				<?php $imgSrc = str_replace(' ', '_', strtolower($artist)); ?>
				<li>
					<a href="?page=artist">
						<div class="overlay <?php echo $imgSrc; ?>">
							<img src="img/artists/large/<?php echo $imgSrc; ?>.png" alt="bilde" />
						</div>
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
		include 'inc/rightcol/twitter.inc';
		include 'inc/rightcol/facebook.inc';
		?>
	</aside>
	<aside id="random-galleries">
		<ul>
			<li class="img-1">
				<a href="#">
					<span class="overlay"></span>
					<img src="img/gallery_1.png" alt="galleri bilde" />
				</a>
			</li>
			<li class="img-2">
				<a href="#">
					<span class="overlay"></span>
					<img src="img/gallery_2.png" alt="galleri bilde" />
				</a>
			</li>
			<li class="img-3">
				<a href="#">
					<span class="overlay"></span>
					<img src="img/gallery_3.png" alt="galleri bilde" />
				</a>
			</li>
		</ul>
	</aside>
	<aside id="map">
		<h1><span>Slagkraft på <b>kartet</b></span></h1>
		<div id="googlemaps"></div>
	</aside>
</div>

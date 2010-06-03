<div id="mainframe" class="clearfix">
	<div id="content" class="news-entry">
		<nav id="subnav" class="clearfix">
			<p>
				<a href="#">Hjem</a> / <span>Program</span>
			</p>
		</nav>
		<article id="article">
			<h1 class="heading">Lorem ipsum dolor sit amet</h1>
			<aside id="article-meta">
				<section class="byline">
					<h2><address><a href="#" title="Poster av Lisa Berg">Lisa berg</a></address></h2>
					<img src="img/article-avatar.png" alt="Lisa Berg" />
					<time>26 April, 2010</time>
				</seaction>
				<section class="share">
					<h2>Del denne artikkelen</h2>
					<ul>
						<li><a href="#" title="Del på Facebook"><span class="icon facebook"></span>Facebook</a></li>
						<li><a href="#" title="Del på Twitter"><span class="icon twitter"></span>Twitter</a></li>
						<li><a href="#" title="Digg denne artikkelen"><span class="icon digg"></span>Digg</a></li>
						<li><a href="#" title="Lagre på Delicious"><span class="icon delicious"></span>Delicious</a></li>
					</ul>
					<div class="short-url">
						<h3>Kort url</h3>
						<input type="text" readonly="readonly" value="http://bit.ly/bPfgdC" />
					</div>
				</section>
			</aside>
			<div class="entry">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim urna vitae diam molestie sit amet feugiat ligula fermentum. Mauris scelerisque, justo at vehicula mollis, purus sem dictum tellus, rutrum volutpat dolor urna et ante. Praesent pulvinar ante eu enim iaculis a hendrerit justo tempor. Donec id turpis at nunc vestibulum vehicula eu pellentesque lectus. Proin cursus, augue vel lacinia lacinia, lorem lectus molestie odio, sit amet interdum massa leo at felis. Pellentesque quis risus nunc. Nulla ultricies iaculis molestie. Mauris sodales consectetur leo ut bibendum. Sed vitae neque libero, tristique semper velit. Praesent venenatis pharetra dui, at rhoncus dolor euismod at. Nulla consectetur pretium justo, a placerat lectus posuere bibendum. Donec elementum aliquam pretium. Nunc hendrerit massa id tortor dapibus facilisis. Sed pellentesque tortor a velit tempor in sodales turpis posuere.</p>
				<p>Vestibulum non erat a nulla ultrices ullamcorper. Sed pulvinar sem ac sapien convallis nec laoreet ante ornare. Nulla et mi ipsum. Proin et enim eget nulla tempor gravida eget tristique magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sollicitudin nunc non ligula feugiat vulputate. Sed vel nibh nulla, vitae tristique tellus. In molestie, nisl eu semper sodales, arcu ligula posuere sem, rutrum suscipit ante enim eu ligula. Vestibulum vel condimentum risus. Nunc laoreet, urna mattis congue tristique, nibh erat hendrerit nibh, vel rutrum nisl urna quis massa. Maecenas turpis lorem, aliquam eget blandit ac, sollicitudin eget neque. Vivamus porta nisl porta elit tincidunt semper.</p>
				<p>Sed bibendum hendrerit odio, nec vehicula magna vehicula a. Morbi feugiat vehicula nisi luctus hendrerit. Vivamus sed luctus risus. In non nisi neque, tincidunt viverra enim. In sodales tortor sit amet ligula suscipit interdum. Nullam molestie ipsum lectus, ut rutrum nulla. Nam sed massa elit. Aenean pulvinar dapibus erat eget interdum. Quisque ut consequat urna. Aenean sollicitudin urna vel nunc sodales dapibus. Quisque ut justo neque, sit amet mollis orci. Proin fringilla lobortis urna sit amet faucibus. Quisque mattis gravida orci et dictum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec tellus libero, ut pharetra urna. Duis ac gravida nibh. Vivamus at arcu at metus varius ultrices ut ut arcu. Donec ligula risus, condimentum quis adipiscing a, scelerisque eu massa. Vivamus at nisi mi, ut scelerisque est.</p>
			</div>
			<?php
			include 'inc/comments.inc';
			include 'inc/comment_form.inc';
			?>
		</article>
	</div>
	
	<aside id="right-col" class="wide">
		<?php
		include 'inc/rightcol/order.inc';
		include 'inc/rightcol/artists.inc';
		include 'inc/rightcol/playlists.inc';
		include 'inc/rightcol/untouched.inc';
		include 'inc/rightcol/twitter.inc';
		?>
	</aside>
</div>
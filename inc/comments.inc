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
</aside>

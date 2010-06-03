<aside id="comments">
	<h2>10 <b>kommentarer</b></h2>
	<section class="comments">
		<?php $max = $tname === 'artist' ? 5 : 10; ?>
		<?php $avatar = 1; ?>
		<?php for ($i = 0; $i < $max; $i++) { ?>
			<article>
				<header>
					<h3>Martin Johansen</h3>
					<time>Skrevet 3 timer siden</time>
				</header>
				<?php if (rand(0, 1) > 0) { ?>
					<img src="img/avatars/avatar_<?php echo $avatar; ?>.png" alt="avatar" />
					<?php
					$avatar++;
					if ($avatar > 6) {
						$avatar = 1;
					}
					?>
				<?php } ?>
				<p><?php echo $lorems[rand(0, $loremCount - 1)]; ?></p>
			</article>
		<?php } ?>
		<?php if ($tname === 'artist') { ?>
			<nav>
				<p>Side 1 av 2</p>
				<ul>
					<li class="current"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="#">Neste side »</a></li>
				</ul>
			</nav>
		<?php } ?>
	</section>
</aside>

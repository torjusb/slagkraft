<nav id="artists">
	<ul>
		<?php foreach ($artists as $artist) { ?>
			<?php $imgSrc = str_replace(' ', '_', strtolower($artist)); ?>
			<li<?php if ($artist === 'Tolv Volt') echo ' class="selected"'; ?>>
				<a href="?page=artist">
					<span class="overlay <?php echo $imgSrc; ?>"></span>
					<img src="img/artists/<?php echo $imgSrc; ?>.png" alt="bilde" />
					<span class="title"><?php echo $artist; ?></span>
				</a>
			</li>
		<?php } ?>
	</ul>
</nav>
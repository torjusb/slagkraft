<aside id="foot-nav">
	<nav>
		<ul>
			<?php foreach ($tree as $title => $branch) { ?>
				<?php if (!is_array($branch) || $title === 'Nyheter' ||$title === 'Program'  || $title === 'Artister') continue; ?>
				<li>
					<a href="#"><?php echo $title; ?></a>
					<?php if (is_array($branch) && !empty($branch)) { ?>
						<ul class="sub">
							<?php foreach ($branch as $title) { ?>
								<li>
									<a href="#"><?php echo $title; ?></a>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</li>
			<?php } ?>
		</ul>
	</nav>
</aside>
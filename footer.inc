<aside id="foot-nav">
	<nav>
		<ul>
			<?php foreach ($tree as $title => $branch) { ?>
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
<footer id="foot-nav">
	<div>
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
		<section class="contact">
			<address>
				<p>
					<strong>Styret</strong><br />
					Telefon: 29 31 48 99,<br />
					E-post: <a href="mailto:post@slagkraft.no">post@slagkraft.no</a>,<br />
					Langebuktveien 33,<br /> 1289 Bergen.
				</p>
			</address>
			<address>
				<p>
					<strong>Bilettservice</strong><br />
					Telefon: 88 55 62 13,<br />
					E-post: <a href="#">biletter@slagkraft.no</a>,<br />
					Langebuktveien 33,<br /> 1289 Bergen. 
				</p>
			</address>
		</section>
	</div>
</footer>
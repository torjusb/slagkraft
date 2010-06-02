<div id="mainframe" class="clearfix">
	<div id="content">
		<nav id="subnav" class="clearfix">
			<p>
				<a href="#">Hjem</a> / <span>Program</span>
			</p>
		</nav>
		<article id="article">
			<h1 class="heading">Program</h1>
			<div class="entry">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse orci elit, aliquam non tempus condimentum, fermentum id neque. Ut nibh nisi, sollicitudin suscipit molestie ac, vehicula in neque. Aenean sem velit, convallis sit amet malesuada ut, ullamcorper at magna. Aliquam quis risus felis, vitae mattis nulla. Sed vulputate augue ut sapien tincidunt luctus. Integer pharetra sodales dui, id elementum turpis pulvinar in. Ut consectetur pulvinar erat, vitae interdum nunc rutrum ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus porttitor pretium. Sed ornare libero non est adipiscing nec elementum felis hendrerit. </p>
				
				<section id="programs">
					<div id="printer">
						<a href="#"><span class="text">Skriv ut program</span><span class="arrow"></span></a>
						<div class="popdown">
							<form action="">
								<h2>Hva vil du skrive ut?</h2>
								<ul>
									<li>
										<label>
											<input type="checkbox" name="printday[]" value="" />
											<span>Torsdag 24. Juni</span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" name="printday[]" value="" />
											<span>Fredag 25. Juni</span>
										</label>
									</li>
									<li>
										<label>
											<input type="checkbox" name="printday[]" value="" />
											<span>Lørdag 26. Juni</span>
										</label>
									</li>
								</ul>
								<input type="submit" value="Skriv ut" />
							</form>
						</div>
					</div>
					<?php for ($i = 0; $i < 3; $i++) { ?>
						<table class="program">
							<caption>Torsdag 24. Juni</caption>
							<col span="1" class="artist-name" />
							<thead>
								<tr>
									<th>Artist<span class="arrow"></span></th>
									<th>Scene<span class="arrow"></span></th>
									<th class="time">Tidspunkt<span class="arrow"></span></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>The Royalties (NO)</td>
									<td>Enga (hovedscenen)</td>
									<td class="time">20:00</td>
								</tr>
								<tr>
									<td>Burning Rubber (NO)</td>
									<td>Skogholtet (Urørt og nytt)</td>
									<td class="time">20:00</td>
								</tr>
								<tr>
									<td>Bertine Zetlitz (NO)</td>
									<td>Fjellhallen (klubbscenen)</td>
									<td class="time">19:30</td>
								</tr>
								<tr>
									<td>Lukas Kasha (NO)</td>
									<td>Skogholtet (Urørt og nytt)</td>
									<td class="time">18:30</td>
								</tr>
								<tr>
									<td>Every Minute (NO)</td>
									<td>Enga (hovedscenen)</td>
									<td class="time">18:45</td>
								</tr>
								<tr>
									<td>Every Minute (NO)</td>
									<td>Fjellhallen (klubbscenen)</td>
									<td class="time">22:15</td>
								</tr>
							</tbody>
						</table>
					<?php } ?>
				</section>
			</div>
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
<div id="mainframe" class="clearfix">
	<div id="content">
		<nav id="subnav" class="clearfix">
			<p>
				<a href="#">Hjem</a> / <a href="#">Artister</a> / <span>Tolv Volt</span>
			</p>
			<ul>
				<li><a href="#">Historie</a></li>
				<li><a href="#">Tidligere arrangementer</a></li>
				<li class="selected"><a href="#">Kontakt oss</a></li>
			</ul>
		</nav>
		<article id="article">
			<h1 class="heading">Kontakt oss</h1>
			<div id="map"></div>
			<div class="entry">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas adipiscing urna, vitae commodo risus laoreet id. Donec vitae lacinia sapien. Curabitur libero sapien, convallis non hendrerit vel, venenatis elementum mauris.</p>
				<h2>Kontaktinfromasjon</h2>
				<address>
					<h3>Styret</h3>
					<p>
						<strong>Telefon:</strong> 29 31 48 99<br />
						<strong>E-post:</strong> <a href="mailto:post@slagkraft.no">post@slagkraft.no</a><br />
						<strong>Adresse:</strong> Langebuktveien 33, 1289 Bergen.
					</p>
				</address>
				<address>
					<h3>Bilettservice</h3>
					<p>
						<strong>Telefon:</strong> 88 55 62 13<br />
						<strong>E-post:</strong> <a href="mailto:biletter@slagkraft.no">biletter@slagkraft.no</a><br />
						<strong>Adresse:</strong> Langebuktveien 33, 1289 Bergen.					
					</p>
				</address>
			</div>
			<aside id="contact-form">
				<h2>Kontaktskjema</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in adipiscing elit. Fusce commodo ultrices vehicula. Curabitur aliquam, nunc eu feugiat suscipit.</p>
				<form action="">
					<ul>
						<li class="name">
							<label for="">
								<span>Ditt navn <small>(påkrevd)</small></span>
								<input type="text" />
							</label>
						</li>
						<li class="email">
							<label for="">
								<span>Din e-post <small>(påkrevd)</small></span>
								<input type="email" />
							</label>
						</li>
						<li class="who">
							<label for="">
								<span>Hvem ønsker du å komme i kontakt med?</span>
								<select>
									<option>Styret</option>
									<option>Bilettservice</option>
								</select>
							</label>
						</li>
						<li class="message">
							<label for="">
								<span>Din melding</span>
								<textarea></textarea>
							</label>
						</li>
					</ul>
					<input type="submit" value="send" />
				</form>
			</aside>
		</article>
	</div>
	
	<aside id="right-col" class="wide">
		<?php
		include 'inc/rightcol/order.inc';
		include 'inc/rightcol/artists.inc';
		include 'inc/rightcol/playlists.inc';
		include 'inc/rightcol/untouched.inc';
		?>
	</aside>
</div>
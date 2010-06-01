<header id="head">
	<div class="top">
		<hgroup id="logo">
			<h1><a href="#">Slagkraft</a></h1>
			<h2>24. - 26. Juni 2010 - Stiklestad, Nord-Trøndelag</h2>
		</hgroup>
		
		<form>
			<label>
				<span>Søk på siden</span>
				<input type="text" placeholder="Søk på artister, artikler, bilder..." />
			</label>
		</form>
	</div>		
	<nav>
		<ul>
			<?php foreach ($tree as $title => $branch) { ?>
				<li>
					<a href="#"><?php echo $title; ?></a>
				</li>
			<?php } ?>
		</ul>
	</nav>
</header>

<div id="metaline">
	<p class="countdown">
		<b class="days">31</b> dager, <b class="hours">4</b> og <b class="mins">27</b> minutter til det braker løs!
	</p>
	
	<p class="job-offer">
		Jobbe som frivillig? <strong><a href="#">Mer info!</a></strong>
	</p>
</div>
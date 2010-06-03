<header id="head">
	<div class="top">
		<hgroup id="logo">
			<h1><a href="<?php echo BASEPATH; ?>">Slagkraft</a></h1>
			<h2>24. - 26. Juni 2010 - Stiklestad, Nord-Trøndelag</h2>
		</hgroup>
		
		<form>
			<label>
				<span>Søk på siden</span>
				<input type="text" accesskey="f" placeholder="Søk på artister, artikler, bilder..." />
			</label>
			<input type="submit" value="Søk" />
		</form>
	</div>		
	<nav>
		<ul>
			<?php foreach ($tree as $title => $branch) { ?>
				<?php if ($title === 'English') continue; ?>
				<li>
					<a href="?page=program"><?php echo $title; ?></a>
				</li>
			<?php } ?>
		</ul>
		<p class="english">
			<a href="#">English</a>
		</p>
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
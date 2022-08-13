<section>
	<h1>
		Featured Artist: ArtYeen
		<a target="_blank" href="https://www.twitter.com/artyeen" class="ef-hide-ext uk-icon-button uk-icon" uk-tooltip="pos:top" title="ArtYeen @ Twitter" uk-icon="twitter"></a>
	</h1>
	<div class="uk-column-1-2@l">
		<p>Heya, I am <strong>Asta</strong> aka <strong>ArtYeen</strong> (<span class="uk-text-italic">she/they</span>). I am a coffee & tea fuelled part-time artist from Germany. I create art of different styles, themes and media in my free time. From digital to traditional art, woodburning and 3D modelling, I like to try out lots of new things. Thanks for checking out my stuff!</p>
		
		<div id="artyeen-gallery">
			<div uk-slideshow="autoplay: true; autoplay-interval: 3000; animation: pull; ratio: 3:1">
				<ul class="uk-slideshow-items" uk-lightbox>
					<?php
					for ($i = 0; $i <= 6; $i++) { ?>
						<li>
							<a href="pages/website/featured/<?= $i ?>.jpg">
								<img src="pages/website/featured/<?= $i ?>_thumb.jpg" alt="Image by ArtYeen">
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<hr />

<section class="uk-column-1-2@l">
	<!-- <div id="ef-badger">
		<h2>Eurofurence Badger Addon</h2>
		<p>This brand-new browser addon will enhance your visit to the Eurofurence website by adding <span class="ef-new"></span> badges to pages that have been updated since you last viewed them!</p>
		<p>Available for <a href="https://addons.mozilla.org/firefox/addon/eurofurence-badger/" target="_blank">Mozilla Firefox</a> and <a href="https://chrome.google.com/webstore/detail/eurofurence-badger/onjgbdbgijjcpheemlgglchgcoaacknl" target="_blank">Google Chrome</a>.</p>
	</div> -->
	
		<h2>Website Team</h2>
		<p>Please direct any comments, ideas or critique about our website to the following folks:</p>

		<div class="ef-people uk-grid-match" uk-grid>
		<?php
			$members = [
				// ['Name', 'Title', 'Image', 'Link'],
				['draconigen', 'Director, Main Website, Help Center', 'draconigen.png', 'https://www.dogpixels.net/draconigen/'],
				['fafnyr', 'Vice Director &amp; System Administration', 'fafnyr.png', 'https://www.furaffinity.net/user/fafnyr/'],
				['Fenmar', 'Archive', 'fenmar.png', 'https://fenmar.de/'],
				['Fenrikur', 'Nosecounter', 'fenrikur.png', 'https://twitter.com/Fenrikur/'],
				['Fleeks', 'Logo Design', 'fleeks.png', 'https://fleeks.art/'],
				['Sebin', 'Feedback Management', 'sebin.png', 'https://twitter.com/SebinNyshkim'],
				['Sithy', 'Writing', 'sithy.png', 'https://twitter.com/MxSithy'],
				['Vinaru', 'Banner Exchange &amp; Graphics', 'vinaru.png', 'https://twitter.com/Vinaru'],
			];

			foreach ($members as $m) { ?>
				<a href="<?= $m[3] ?>" target="_blank" class="ef-hide-ext uk-width-medium">
					<div>
						<img src="pages/website/<?= $m[2] ?>" alt="<?= $m[2] ?>" />
						<h3><?= $m[0] ?></h3>
						<span><?= $m[1] ?></span>
					</div>
				</a>
			<?php } ?>
		</div>
	
	<div>
		<h2>Third Party Attributions</h2>
		<ul>
			<li><a href="https://getuikit.com" target="_blank">UIkit</a> by <a href="https://yootheme.com/" target="_blank">YOOtheme GmbH</a> (<a href="https://github.com/uikit/uikit/blob/develop/LICENSE.md" target="_blank">license</a>)</li>
			<li><a href="https://fonts.google.com/specimen/Permanent+Marker" target="_blank">Permanent Marker</a> by <a href="https://fontdiner.com/" target="_blank">Font Diner, Inc</a> (<a href="fonts/PermanentMarker-Regular.LICENSE.txt" target="_blank">license</a>)</li>
		</ul>
	</div>
</section>

<hr />

<section class="uk-margin-top">
	<h2>Tech Support &amp; Bug Report</h2>
	
	<p>Layout broken? Pages display weird content? You don't like the colors? We're grateful for every bug report (and feedback) you file in.<br/>
	If you would like to include a screenshot, please upload it to any host and include a link in your report. After all, a picture says more than thousand words.<br/>
	When doing so, please ensure that you include every detail about the circumstances, under which the bug occurred.</p>	
	<p><a href="https://help.eurofurence.org/contact/web/bugreport" target="_blank">Contact the Website Team</a></p>
</section>
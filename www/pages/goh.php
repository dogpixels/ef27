<section>
	<h1>Our Guest of Honor: Pechschwinge</h1>
</section>

<section class="uk-column-1-2@l uk-margin-bottom">
	<p>Pechschwinge is a fantasy artist and art director at Ulisses Spiele, a German Pen&Paper publisher. Her training as a graphic designer at the Hamburg Technical Art School got her started with her career in the video game industry. Not long after, she left that world behind to enter the world of fiction and traditional role-playing games where she has been ever since.</p>

	<p>Pechschwinge was responsible for the illustrations and layout of the game “The Black Cat” where she also contributed to the editing of the game system. </p>

	<p>Through her quick wit and a lucky break at RatCon in 2013 she landed a position with the Ulisses Spiele Verlag where she took over the artistic management as Art Director in May 2015. At the Ulisses Spiele Verlag, her first major task was to bring about the next edition of “Das schwarze Auge”. </p>

	<p>Her portfolio at the Ulisses Spiele Verlag consists of a wide variety of responsibilities ranging from creative work to managing budget and communication between authors and illustrators and bridging the world of the written word and the realm of visualization. One of her favorite parts of the job is working with and supporting the artists with tips and tricks and collaborations.</p>

	<p>Outside of the Ulisses Spiele Verlag, she contributed to the Phileasson Saga (by Bernhard Hennen and Robert Corvus; published by Heyne). For FanPro, she worked as an illustrator and art director for the limited anthology of Fire and Blood by G. R. R. Martin.</p>
</section>

<section>
	<?php
		$images = [
			"anthologie1_by_pechschwinge.jpg",
			"anyche_by_pechschwinge.jpg",
			"bestiarium_by_pechschwinge.jpg",
			"kampf_perldrache_by_pechschwinge.jpg",
			"rhazzazor_by_pechschwinge.jpg",
			"riesenlindwurm_by_pechschwinge.jpg",
			"schleichender_verfall_by_pechschwinge.jpg",
		]
	?>
	<div uk-slider="autoplay: true; autoplay-interval: 3500; center: true; ">
		<ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-4@l uk-grid" uk-lightbox>
		<?php foreach ($images as $img) { ?>
			<li><a href="img/goh/<?= $img ?>"><img src="img/goh/thumbs/<?= $img ?>" width="640" height="480" alt="Image (c) Pechschwinge" /></a></li>
		<?php } ?>
		</ul>
	</div>
</section>


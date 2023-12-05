<?php snippet('header') ?>
<?php snippet('project_header') ?>




<!-- <div class="spacer"></div> -->

<div class="gallery">
	<div class="left">
		<div class="desktopContent">
			<div class="desktopContentSection">
				<h3><?= $page->scrollTitle1() ?></h3>
				<p><?= $page->scrollText1() ?></p> 
			</div>
			<div class="desktopContentSection">
                <h3><?= $page->scrollTitle2() ?></h3>
				<p><?= $page->scrollText2() ?></p> 
			</div>
			<div class="desktopContentSection">
                <h3><?= $page->scrollTitle3() ?></h3>
				<p><?= $page->scrollText3() ?></p> 
			</div>
			<div class="desktopContentSection">
                <h3><?= $page->scrollTitle4() ?></h3>
				<p><?= $page->scrollText4() ?></p> 
			</div>
		</div>
	</div>

	<div class="right">

		<!-- mobile content -->
		<div class="mobileContent">
			<div class="mobilePhoto"></div>
			<h1>Red</h1>
			<p>Red is a color often associated with strong emotions such as passion, love, and anger. It's a bold and attention-grabbing color that can evoke feelings of excitement, warmth, and energy.</p>

			<div class="mobilePhoto"></div>
			<h1>Green</h1>
			<p>Green is a color that is often associated with nature, growth, and harmony. It is a calming and relaxing color that can evoke feelings of balance, stability, and freshness. In color psychology, green is said to represent balance and stability, making it a popular choice for branding and marketing in the health and wellness industry. </p>

			<div class="mobilePhoto"></div>
			<h1>Pink</h1>
			<p>Pink is a color that is often associated with femininity, romance, and sweetness. It is a softer and more delicate shade of red that can evoke feelings of warmth, love, and nurturing. In the world of branding and marketing, pink is often used to target a female audience or to promote products that are associated with beauty, love, or romance.</p>

			<div class="mobilePhoto"></div>
			<h1>Blue</h1>
			<p>Blue is a color that is often associated with calmness, trust, and reliability. It is a peaceful and serene color that can evoke feelings of stability, security, and professionalism. In color psychology, blue is said to represent loyalty and trust, making it a popular choice for branding and marketing in the finance and technology industries.</p>
		</div>

		<!-- desktop content -->

		<div class="desktopPhotos">
			<div class="desktopPhoto">
                <?php if($image = $page->scrollImage1()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
            </div>
			<div class="desktopPhoto">
                <?php if($image = $page->scrollImage2()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
            </div>
			<div class="desktopPhoto">
                <?php if($image = $page->scrollImage3()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
            </div>
			<div class="desktopPhoto">
                <?php if($image = $page->scrollImage4()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
            </div>
		</div>

	</div>
</div>
<div class="projectContainer two-column">
    <div class="project animate-1">
        <?php if($video = $page->ebikeHeader1()->toFile()): ?>
            <video autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="<?= $video->url() ?>" type="video/mp4">
            </video>
        <?php endif ?>
    </div>
    <div class="project animate-2">
		<?php if($video = $page->ebikeHeader2()->toFile()): ?>
            <video autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="<?= $video->url() ?>" type="video/mp4">
            </video>
        <?php endif ?>
    </div>
</div>

<section class="video-section fullWidth">
    <div class="video-container">
        <?php if($video = $page->fullVideo()->toFile()): ?>
            <video autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="<?= $video->url() ?>" type="video/mp4">
            </video>
        <?php endif ?>
    </div>        
</section>
<!-- <div class="spacer"></div> -->


<?php snippet('footer') ?>
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
			<div class="container big">
			<h3><?= $page->scrollTitleMobile1() ?></h3>
			<p><?= $page->scrollTextMobile1() ?></p> 			
			<div class="mobilePhoto">
				<?php if($image = $page->scrollImageMobile1()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
			</div>

			<h3><?= $page->scrollTitleMobile2() ?></h3>
			<p><?= $page->scrollTextMobile2() ?></p> 
			<div class="mobilePhoto">
				<?php if($image = $page->scrollImageMobile2()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
			</div>

			<h3><?= $page->scrollTitleMobile3() ?></h3>
			<p><?= $page->scrollTextMobile3() ?></p> 
			<div class="mobilePhoto">
				<?php if($image = $page->scrollImageMobile3()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
			</div>

			<h3><?= $page->scrollTitleMobile4() ?></h3>
			<p><?= $page->scrollTextMobile4() ?></p> 
			<div class="mobilePhoto">
				<?php if($image = $page->scrollImageMobile4()->toFile()): ?>
                    <img src="<?= $image->url() ?>" alt="">
                <?php endif ?>
			</div>
		</div>
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
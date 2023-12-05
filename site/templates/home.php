
<?php snippet('header') ?>


<div class="introAnimation hide">
    <dotlottie-player class="introLottie" src="https://lottie.host/40c3148e-0c05-423b-95e2-6af95bcda30b/CtOv858nQm.json" background="transparent" speed="1" style="width: 300px; height: 300px" direction="1" mode="normal" autoplay></dotlottie-player>
    <div class="experience">
        <p>Visit on desktop for the ultimate experience</p>
    </div>    
</div>


<section class="hero">
    <div class="container">
            <div class="marquee hide">
                <div class="track">
                    <div class="content">Jos Moerkerken · Jos Moerkerken · Jos Moerkerken · </div>
                </div>
            </div>
            <div class="title-col">
                <p class="USP"><?= $page->USP() ?></p>
                <p class="heroSubtitle"><?= $page->heroSubtitle() ?></p>
            </div>
            <div class="img-col">
                <?php if($image = $page->heroImage()->toFile()): ?>
                    <img class="heroImage" src="<?= $image->url() ?>" alt="">
                <?php endif ?>
            </div>
            <div class="credits">
                <hr/><p>Design & code <span>by me.</p>
            </div>
    </div>
</section>

<section class="intro-text">
    <div class="container big">
        <p class="textArea"><?= $page->introText() ?></p> 
    </div>
</section>

<section class="sec-nav">
    <div class="container big">
        <div class="navigation" id="nav">
            <div class="navElement">
            <a href="<?= $site->url() ?>"><?= $site->projects() ?>
                    <span>Koen Zitoen</span>
                    <?php if($image = $page->navImage1()->toFile()): ?>
                        <img src="<?= $image->url() ?>" alt="">
                    <?php endif ?>
                </a>
                <div class="tagContainer">
                    <div class="tag">Branding</div>
                    <div class="tag">UX / UI</div>
                    <div class="tag">Front end</div>
                </div>
            </div>
            <div class="navElement">
                <a href="#">
                    <span>Decathlon e-bike campagne</span>
                    <?php if($image = $page->navImage2()->toFile()): ?>
                        <img src="<?= $image->url() ?>" alt="">
                    <?php endif ?>
                </a>
                <div class="tagContainer">
                    <div class="tag">UX / UI</div>
                    <div class="tag">Product design</div>
                </div>
            </div>    
            <div class="navElement">
                <a href="#">
                    <span>Decathlon e-commerce app</span>
                    <?php if($image = $page->navImage3()->toFile()): ?>
                        <img src="<?= $image->url() ?>" alt="">
                    <?php endif ?>
                </a>
                <div class="tagContainer">
                    <div class="tag">UX / UI</div>
                    <div class="tag">Product design</div>
                </div>
            </div>
            <div class="navElement">
                <a href="#">
                    <span>Animations</span>
                    <?php if($image = $page->navImage4()->toFile()): ?>
                        <img src="<?= $image->url() ?>" alt="">
                    <?php endif ?>
                </a>
                <div class="tagContainer">
                    <div class="tag">Motion design</div>
                </div>
                    </div>    
        </div>
    </div>
</section>

<div class="projectContainer">
    <div class="project project1">
        <?php if($video = $page->projectVideo1()->toFile()): ?>
            <video autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="<?= $video->url() ?>" type="video/mp4">
            </video>
        <?php endif ?>
    </div>
    <div class="project project2">
        <?php if($video = $page->projectVideo2()->toFile()): ?>
            <video autoplay="autoplay" loop="true" muted defaultmuted playsinline>
                <source src="<?= $video->url() ?>" type="video/mp4">
            </video>
        <?php endif ?>
    </div>
    <div class="project project3">
        <?php if($video = $page->projectVideo3()->toFile()): ?>
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


<div class="scrollQuote">
	<div class="content">
        <h2><?= $page->scrollQuote() ?></h2>
	</div>
</div>


    
<?php snippet('footer') ?>



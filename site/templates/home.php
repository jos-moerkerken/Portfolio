
<?php snippet('header') ?>


<!-- <section class="test">
    test
</section>
<section class="test">
    test 2
</section>
<section class="test">
    test 3
</section>
<section class="test">
    test 4
</section> -->

<div class="introAnimation hide">
    <dotlottie-player class="introLottie" src="https://lottie.host/40c3148e-0c05-423b-95e2-6af95bcda30b/CtOv858nQm.json" background="transparent" speed="1" direction="1" mode="normal" autoplay></dotlottie-player>
    <div class="experience">
        <p>Visit on desktop for the best experience</p>
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
        <div class="navigation"  id="nav">

            <div class="navElement">
                <div class="navTitle">
                    <?php if($p = page('projects/E-bike-campaign')): ?>
                        <a href="<?= $p->url() ?>">
                        <span>Decathlon e-bike campaign</span>
                        <?php if($image = $page->navImage1()->toFile()): ?>
                            <img src="<?= $image->url() ?>" alt="">
                        <?php endif ?>
                    </a><?php endif ?>
                    <div class="tagContainer">
                        <div class="tag">UX / UI</div>
                    </div>
                </div>
                <?php if($p = page('projects/E-bike-campaign')): ?><a href="<?= $p->url() ?>">
                    <div class="arrow">
                        <svg viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.11463 6.66688L-4.04494e-05 6.66688L-4.05659e-05 5.33355L8.11463 5.33355L4.53863 1.75755L5.48129 0.814881L10.6666 6.00021L5.48129 11.1855L4.53863 10.2429L8.11463 6.66688Z"/>
                        </svg>
                   </div>
                </a><?php endif ?>
            </div>

            <div class="navElement">
                <div class="navTitle">
                    <?php if($p = page('projects/Decathlon-ecommerce-app')): ?>
                        <a href="<?= $p->url() ?>">
                        <span>Decathlon e-commerce app</span>
                        <?php if($image = $page->navImage2()->toFile()): ?>
                            <img src="<?= $image->url() ?>" alt="">
                        <?php endif ?>
                    </a><?php endif ?>
                    <div class="tagContainer">
                        <div class="tag">UX / UI</div>
                        <div class="tag">Product design</div>
                    </div>
                </div>
                <?php if($p = page('projects/Decathlon-ecommerce-app')): ?><a href="<?= $p->url() ?>">
                    <div class="arrow">
                        <svg viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.11463 6.66688L-4.04494e-05 6.66688L-4.05659e-05 5.33355L8.11463 5.33355L4.53863 1.75755L5.48129 0.814881L10.6666 6.00021L5.48129 11.1855L4.53863 10.2429L8.11463 6.66688Z"/>
                        </svg>
                    </div>
                </a><?php endif ?>    
            </div>

            <div class="navElement">
                <div class="navTitle">
                    <?php if($p = page('projects/Animations')): ?>
                        <a href="<?= $p->url() ?>">
                        <span>Animations</span>
                        <?php if($image = $page->navImage3()->toFile()): ?>
                            <img src="<?= $image->url() ?>" alt="">
                        <?php endif ?>
                    </a><?php endif ?>
                    <div class="tagContainer">
                        <div class="tag">Motion design</div>
                    </div>
                </div>
                <?php if($p = page('projects/Animations')): ?><a href="<?= $p->url() ?>">
                    <div class="arrow">
                        <svg viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.11463 6.66688L-4.04494e-05 6.66688L-4.05659e-05 5.33355L8.11463 5.33355L4.53863 1.75755L5.48129 0.814881L10.6666 6.00021L5.48129 11.1855L4.53863 10.2429L8.11463 6.66688Z"/>
                        </svg>
                    </div>
                </a><?php endif ?>
            </div>

            <div class="navElement">
                <div class="navTitle">
                    <?php if($p = page('projects/Koen-Zitoen')): ?>
                        <a href="<?= $p->url() ?>">
                        <span>Koen Zitoen</span>
                        <?php if($image = $page->navImage4()->toFile()): ?>
                            <img src="<?= $image->url() ?>" alt="">
                        <?php endif ?>
                    </a><?php endif ?>
                    <div class="tagContainer">
                        <div class="tag">Branding</div>
                        <div class="tag">UX / UI</div>
                        <div class="tag">Front end</div>
                    </div>
                </div>
                <?php if($p = page('projects/Koen-Zitoen')): ?><a href="<?= $p->url() ?>">
                    <div class="arrow">
                        <svg viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.11463 6.66688L-4.04494e-05 6.66688L-4.05659e-05 5.33355L8.11463 5.33355L4.53863 1.75755L5.48129 0.814881L10.6666 6.00021L5.48129 11.1855L4.53863 10.2429L8.11463 6.66688Z"/>
                        </svg>
                    </div>    
                </a><?php endif ?>    
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


<div class="wrapper">
<div class="scrollContainer scrollx">
            <svg viewBox="0 0 900 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.89998 6C9.43671 8.28224 7.41896 10 5 10C2.23858 10 0 7.76142 0 5C0 2.23858 2.23858 0 5 0C7.41896 0 9.43671 1.71776 9.89998 4H445.1C445.563 1.71776 447.581 0 450 0C452.419 0 454.437 1.71776 454.9 4H890.1C890.563 1.71776 892.581 0 895 0C897.761 0 900 2.23858 900 5C900 7.76142 897.761 10 895 10C892.581 10 890.563 8.28224 890.1 6H454.9C454.437 8.28224 452.419 10 450 10C447.581 10 445.563 8.28224 445.1 6H9.89998Z"/>
                <mask id="mask0_0_1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="900" height="10">
                <path d="M9.89998 6C9.43671 8.28224 7.41896 10 5 10C2.23858 10 0 7.76142 0 5C0 2.23858 2.23858 0 5 0C7.41896 0 9.43671 1.71776 9.89998 4H445.1C445.563 1.71776 447.581 0 450 0C452.419 0 454.437 1.71776 454.9 4H890.1C890.563 1.71776 892.581 0 895 0C897.761 0 900 2.23858 900 5C900 7.76142 897.761 10 895 10C892.581 10 890.563 8.28224 890.1 6H454.9C454.437 8.28224 452.419 10 450 10C447.581 10 445.563 8.28224 445.1 6H9.89998Z"/>
                </mask>
                <g mask="url(#mask0_0_1)">
                <rect class="mask" y="-49" height="99" fill="black"/>
                </g>
                </svg>
            <section class="sec1 pin">
                <span>Expertises</span>
                <h3>Product design</h3>
                <div class="col">
                    <p class="USP"><?= $page->scrollText1() ?></p>
                </div>
            </section>
            <section class="sec2 pin">
                <span class="anim">Expertises</span>
                <h3 class="anim">UX UI design</h3>
                <div class="col anim">
                    <p class="USP"><?= $page->scrollText2() ?></p>
                </div>
            </section>
            <section class="sec3 pin">
                <span class="anim">Expertises</span>
                <h3 class="anim">Motion design</h3>
                <div class="col anim">
                    <p class="USP"><?= $page->scrollText3() ?></p>
                </div></section>
        </div>
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


    
<?php snippet('footer') ?>



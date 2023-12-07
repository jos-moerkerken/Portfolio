<?php snippet('header') ?>

<section class="projects-title">
    <div class="container big">
        <h1><?= $page->title() ?></h1>
    </div>
</section>

<section class="projectGrid">
    <div class="container big">
    <ul>
        <?php foreach ($page->children()->listed() as $item): ?>
            
            <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
            
        <?php endforeach ?>
    </ul>
    </div>
</section>

<?php snippet('footer') ?>
<section class="title">
    <div class="container big">
        <div class="title-container">
            <h1><?= $page->title() ?></h1>
            <dl>
                <li>
                    <dt>Opdrachtgever</dt>
                    <dd><?= $page->opdrachtgever() ?></dd>
                </li>
                <li>
                    <dt>Type</dt>
                    <dd><?= $page->type() ?></dd>
                </li>
            </dl>
            <p><?= $page->introText() ?></p>
        </div>   
    </div>
</section>


<section class="title">
    <div class="container big">
        <div class="title-container">
            <h1><?= $page->title() ?></h1>
            <dl>
                <li>
                    <dt>Client</dt>
                    <dd><?= $page->client() ?></dd>
                </li>
                <li>
                    <dt>Type</dt>
                    <dd><?= $page->type() ?></dd>
                </li>
                <li>
                    <dt>Role</dt>
                    <dd><?= $page->role() ?></dd>
                </li>
                <li>
                    <dt>Topic</dt>
                    <dd><?= $page->topic() ?></dd>
                </li>
            </dl>
            <p><?= $page->introText() ?></p>
        </div>   
    </div>
</section>


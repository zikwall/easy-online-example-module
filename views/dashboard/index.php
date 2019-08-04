
<div class="section">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-content">
                    <div class="typography-line">
                        <h1>
                            <span>Header 1</span>The Life of Now UI Kit </h1>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Header 2</span>The Life of Now UI Kit</h2>
                    </div>
                    <div class="typography-line">
                        <h3>
                            <span>Header 3</span>The Life of Now UI Kit</h3>
                    </div>
                    <div class="typography-line">
                        <h4>
                            <span>Header 4</span>The Life of Now UI Kit</h4>
                    </div>
                    <div class="typography-line">
                        <h5>
                            <span>Header 5</span>The Life of Now UI Kit</h5>
                    </div>
                    <div class="typography-line">
                        <h6>
                            <span>Header 6</span>The Life of Now UI Kit</h6>
                    </div>
                    <div class="typography-line">
                        <p>
                            <span>Paragraph</span>
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Quote</span>
                        <blockquote>
                            <p class="blockquote blockquote-primary">
                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                <br>
                                <br>
                                <small>
                                    - Noaa
                                </small>
                            </p>
                        </blockquote>
                    </div>
                    <div class="typography-line">
                        <span>Muted Text</span>
                        <p class="text-muted">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Primary Text</span>
                        <p class="text-primary">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                    </div>
                    <div class="typography-line">
                        <span>Info Text</span>
                        <p class="text-info">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <span>Success Text</span>
                        <p class="text-success">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <span>Warning Text</span>
                        <p class="text-warning">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                        </p>
                    </div>
                    <div class="typography-line">
                        <span>Danger Text</span>
                        <p class="text-danger">
                            I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                    </div>
                    <div class="typography-line">
                        <h2>
                            <span>Small Tag</span>
                            Header with small subtitle
                            <br>
                            <small>Use "small" tag for the headers</small>
                        </h2>
                    </div>
                    <div class="footer">
                        footer text
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <?= zikwall\easyonline\modules\example\widgets\Sidebar::widget([
                'widgets' => [
                    [
                        \zikwall\easyonline\modules\example\widgets\TestWidget::className(),
                        [],
                        ['sortOrder' => 150]
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
</div>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->nama ?></p>

                <a><i class="fa fa-circle text-success"></i> <?= Yii::$app->user->identity->role ?></a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'home', 'url' => ['/site']],
                    //['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    //['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Laporan', 'icon' => 'book', 'url' => ['/laporan']],
                    //['label' => 'Sign in', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Sign out', 'icon' => 'sign-out', 'url' => ['site/logout']],
                ],
            ]
        ) ?>

    </section>

</aside>

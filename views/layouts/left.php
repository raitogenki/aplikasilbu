<?php
    $name;
    $role;
    if (!isset(Yii::$app->user->identity)) {
        $name = 'Admin';
        $role = 'Admin';
    } else {
        $name = Yii::$app->user->identity->nama;
        $role = Yii::$app->user->identity->role;
    }
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $name ?></p>

                <a><i class="fa fa-circle text-success"></i> <?= $role ?></a>
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
                    ['label' => 'Sign in', 'icon' => 'sign-in', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Sign out', 'icon' => 'sign-out', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>

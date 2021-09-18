<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menyular', 'options' => ['class' => 'header']],
                    ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/site/']],
                    ['label' => 'Viloyatlar', 'url' => ['/viloyat/']],
                    ['label' => 'Tumanlar', 'url' => ['/tuman/']],
                    ['label' => 'Mahalla fermer yig\'inlari', 'url' => ['/mfy/']],
                    ['label' => 'Aholi', 'url' => ['/aholi/']],
                    ['label' => 'Ijtimoiy muhit', 'url' => ['/ijtimoiy-muhit/']],
                    ['label' => 'Jinoyatchilik', 'url' => ['/jinoyatchilik/']],
                    ['label' => 'Obyektlar', 'url' => ['/obyektlar/']],
                    ['label' => 'Foydalanuvchilar', 'url' => ['/user/'], 'visible' => Yii::$app->user->identity->isAdmin],
                    ['label' => 'Chiqish', 'url' => ['/logout']],
                ],
            ]
        ) ?>
    </section>

</aside>

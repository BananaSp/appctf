<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
          <?php
        try{
            echo Yii::$app->user->identity->username;
            echo"<br><br>";
            echo"<i class=\"fa fa-circle text-success\"></i> Online</a>";

        }catch(Exception $e){
            echo "..<br><br>";
            echo"<i class=\"fa fa-circle text-danger\"></i> Offline</a>";
        }
        ?></p>  </div>
        </div>

        <!-- search form -->
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '  MENU NEVIGATION..', 'options' => ['class' => 'header']],
                  //  ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                   // ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/debug']],
                  //  ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Home', 'icon' => 'home', 'url' => ['site/index']],
                    ['label' => 'Challenges', 'icon' => 'frown-o', 'url' => ['site/user']],
                    
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                        //    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                        //    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>

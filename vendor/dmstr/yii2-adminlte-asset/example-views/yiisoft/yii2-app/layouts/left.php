<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        
        <!-- search form -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'List Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'glyphicon glyphicon-home', 'url' => ['/site/index']],
                     [
                        'label' => 'Menu Barang',
                        'icon' => 'glyphicon glyphicon-th-list',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daftar Barang', 'icon' => 'glyphicon glyphicon-file', 'url' => ['/daftar-barang/index'],],
                            ['label' => 'Tambah Barang', 'icon' => 'glyphicon glyphicon-open-file', 'url' => ['/daftar-barang/create'],],
                            ],
                            ],
                     [
                        'label' => 'Menu Supplier',
                        'icon' => 'glyphicon glyphicon-th-list',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Daftar Supplier', 'icon' => 'glyphicon glyphicon-file', 'url' => ['/daftar-supplier/index'],],
                            ['label' => 'Tambah Supplier', 'icon' => 'glyphicon glyphicon-open-file', 'url' => ['/daftar-supplier/create'],],
                            ],
                            ],
                    ['label' => 'Daftar User', 'icon' => 'glyphicon glyphicon-user', 'url' => ['/user/index']],
                    
                    
                ],
            ]
        ) ?>

    </section>

</aside>

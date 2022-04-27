<ul class="sidebar-menu" data-widget="tree">
        <li class="header">PILIHAN UTAMA</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Dasboard</span></a></li>
        <li class="{{request()-> is('HasilPanen') ? 'active' : ''}}"><a href="/Menu Paket"><i class="fa fa-tree"></i> <span>Menu Paket</span></a></li>
        <li class="{{request()-> is('Petani') ? 'active' : ''}}"><a href="/Form Booking"><i class="fa  fa-male"></i> <span>Form Boking</span></a></li>
        <li class="{{request()-> is('Pembeli') ? 'active' : ''}}"><a href="/Kalender"><i class="fa  fa-money"></i> <span>Kalender</span></a></li>
        <li class="{{request()-> is('Info_Cempaga_Farm') ? 'active' : ''}}"><a href="/Info_Salon_Aditya"><i class="fa  fa-reorder"></i> <span>Info Salon Aditya</span></a></li>
        <li class="treeview">
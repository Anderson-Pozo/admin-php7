<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../index.php"><i class="menu-icon fa fa-home"></i>Inicio</a>
                </li>
                <li class="menu-title">Establecimientos</li>
                <li class="<?php  if ($active=='hotel'){ echo "active"; } ?>">
                    <a href="../controller/hotel.php"><i class="menu-icon fa fa-hotel"></i>Hoteles</a>
                </li>
                <li class="<?php  if ($active=='hostal'){ echo "active"; } ?>">
                    <a href="../controller/hostal.php"><i class="menu-icon fa fa-h-square"></i>Hostales</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-cutlery"></i>Restaurantes</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-coffee"></i>Cafeterias</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-music"></i>Discotecas</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-glass"></i>Bares</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-group"></i>Complejos</a>
                </li>
                <li class="menu-title"><hr></li>
                <li>
                    <a href=""><i class="menu-icon fa fa-leaf"></i>Atractivos</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-truck"></i>Transporte</a>
                </li>
                <li>
                    <a href=""><i class="menu-icon fa fa-cogs"></i>Servicios generales</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
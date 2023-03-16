<?php
$sesion = $_SESSION["iniciosession"];
$tuser = $_SESSION['tipousuario'];
$nombre = $_SESSION['nombre'];
$usuario = $_SESSION['usuario'];

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?php echo RUTA_URL ?>/index" class="brand-link">
    <img alt="Logo" src="<?php echo RUTA_URL ?>/dist/img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>
        <?php echo NOMBRESITIO ?>
      </b></span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo RUTA_URL ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $nombre;
          ?>
        </a>
      </div>
    </div>


    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
        if ($tuser == 1 || $tuser == 2 || $tuser == 3 || $tuser == 4 || $tuser == 7) {
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-users"></i>
<p>Clientes<i class="right fas fa-angle-left"></i></p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="' . RUTA_URL . '/clientes/agregarcliente" class="nav-link"><i class="nav-icon fas fa-user text-green"></i><p>Ingresar Cliente</p></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/clientes/" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de clientes</p></a>
</li>
</ul>
</li>
';
        }
        ?>



        <?php

        /*
        <li class="nav-item">
        <a href="' . RUTA_URL . '/ventas/ingresar_cotizacion_encabezado" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Ingresar Cotizacion</p></a>
        </li> 
        */

        if ($tuser == 1 || $tuser == 2 || $tuser == 3 || $tuser == 4 || $tuser == 7) {
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-user-tie"></i>
<p>Ventas<i class="fas fa-angle-left right"></i></p>
</a>
<ul class="nav nav-treeview">


<li class="nav-item">
<a href="' . RUTA_URL . '/ventas/cotizaciones_encabezado" class="nav-link"><i class="nav-icon fas fa-file-alt text-green"></i><p>Cotizaciones</p></a>
</li>

  <li class="nav-item">
<a href="' . RUTA_URL . '/ventas/cotizaciones_encabezado" class="nav-link"><i style="font-size: 1.3rem;" class="nav-icon fas material-symbols-outlined text-green">verified</i>Cotizaciones Autorizadas</a>
</li>

  <li class="nav-item">
<a href="' . RUTA_URL . '/ventas/kpis" class="nav-link"><i style="font-size: 1.3rem;" class="nav-icon fas material-symbols-outlined text-green">query_stats</i>KPI\'s</a>
</li>

</ul>
</li>';
        }


        // <li class="nav-item">
        // <a href="' . RUTA_URL . '/productos/seleccionar_centro_costo/02" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Productos a equipos</p></a>
        // </li>


        if ($tuser == 1 || $tuser == 2 || $tuser == 3 || $tuser == 4 || $tuser == 7) {
          echo '
          
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">

                <i style="font-size: 1.3rem;" class="nav-icon fas material-symbols-outlined">qr_code</i>

                <p>Productos / Servicios<i class="fas fa-angle-left right"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                  <a href="' . RUTA_URL . '/productos/seleccionar_centro_costo/03" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p style="font-size:13px;">Combo productos/servicios</p></a>
                </li>

                  <li class="nav-item">
                  <a href="' . RUTA_URL . '/productos/seleccionar_centro_costo/01" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Productos</p></a>
                  </li>


                  <li class="nav-item">
                  <a href="' . RUTA_URL . '/productos/agregar_productos_servicios/" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Agregar Ficha Servicios</p></a>
                  </li>

                  <li class="nav-item">
                  <a href="' . RUTA_URL . '/productos/lista_productos/01" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Lista Productos</p></a>
                  </li>

                  
          </ul>
          </li>';
        }





        $menu = '
    <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">

    <i style="font-size: 1.3rem;" class="nav-icon fas material-symbols-outlined">category</i>

    <p>Equipos<i class="fas fa-angle-left right"></i></p>
    </a>
    <ul class="nav nav-treeview">';

        $tuser_values = array(1, 2, 3, 4, 7);

        foreach ($tuser_values as $value) {
          if ($tuser == $value) {
            $menu .= '
            <li class="nav-item">
            <a href="' . RUTA_URL . '/equipos/add_equipos/||||" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Agregar Equipo</p></a>
            </li>';

            if ($value == 7) {
              $menu .= '
                <li class="nav-item">
                <a href="' . RUTA_URL . '/equipos/add_ficha_equipos/||||" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Agregar Ficha Equipo BD</p></a>
                </li>

                <li class="nav-item">
                <a href="' . RUTA_URL . '/equipos/add_equipos_cliente/||||" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Agregar Equipo Cliente</p></a>
                </li>

                <li class="nav-item">
                <a href="' . RUTA_URL . '/equipos/equipos/||||" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Equipos</p></a>
                </li>

                <li class="nav-item">
                <a href="' . RUTA_URL . '/equipos/equipos_add_cliente/||||" class="nav-link"><i class="nav-icon fas fa-plus text-info"></i><p>Agregar Equipos</p></a>
                </li>';
            }
            $menu .= '</ul></li>';
            echo $menu;
            break;
          }
        }


        ?>



        <?php
        if ($tuser == 1 || $tuser == 7) {
          echo '
          <li class="nav-item has-treeview ">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users "></i>
          <p>Proveedores<i class="right fas fa-briefcase"></i>
          </p>
          </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
          <a href="' . RUTA_URL . '/proveedores/agregar" class="nav-link"><i class="nav-icon fas fa-user text-green"></i><p>Ingresar Proveedor</p></a>
          </li>
          <li class="nav-item">
          <a href="' . RUTA_URL . '/proveedores/proveedores" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de proveedores</p></a>
          </li>
          </ul>
          </li>
          ';
        }
        ?>



        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
            <p>
              FINANZAS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            echo '<li class="nav-header">FINANZAS</li>';
            if ($tuser == 1 || $tuser == 7) {
              echo '
              <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
              <i class="nav-icon fa fa-credit-card text-purple"></i>
              <p>Tarjetas de credito<i class="fas fa-angle-left right"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/tarjetas" class="nav-link"><i class="nav-icon fa fa-credit-card text-info"></i><p>Tarjetas</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/tarjetasdecredito" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-yellow"></i><p>Solicitar Estados de cuenta</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/tarjetasdecreditopagar" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-orange"></i><p>Pagar tarjeta</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/tarjetasdecreditohistorialestados" class="nav-link"><i class="nav-icon fas fa-history text-success"></i><p>Historial Estados Cuenta</p></a>
              </li>
              </ul>
              </li>
              ';
            }
            if ($tuser == 1 || $tuser == 7) {
              echo '
            <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-credit-card text-primary"></i>
            <p>Cuentas por pagar<i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/agregarfactura" class="nav-link"><i class="nav-icon fas fa-university text-green"></i><p>Registro Factura Compra</p></a>
            </li>
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/consultafacturasencabezado" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-info"></i><p>Compra Encabezado</p></a>
            </li>
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/consultafacturas" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-info"></i><p>Compra Detalle</p></a>
            </li>
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/estadosdecuenta" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-info"></i><p>Caja Chica</p></a>
            </li>
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/estadosdecuentaresultados" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-info"></i><p>Estados de cuenta 2</p></a>
            </li>
            <li class="nav-item">
            <a href="' . RUTA_URL . '/finanzas/formestadoresultados" class="nav-link"><i class="nav-icon fas fa-chart-line text-lime"></i><p>Estados de resultados</p></a>
            </li>
            </ul>
            </li>
            ';
            }
            if ($tuser == 1 || $tuser == 7) {
              echo '
              <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book "></i>
              <p>Finanzas<i class="fas fa-angle-left right"></i>
              <span class="right badge badge-info">Nomenclatura</span>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/finanzasnivel1" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Nivel I</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/finanzasnivel2" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Nivel II</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/finanzasnivel3" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Nivel III</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/finanzasnivel4" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Nivel IV</p></a>
              </li>
              <li class="nav-item">
              <a href="' . RUTA_URL . '/finanzas/finanzasnomenclatura" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Finanzas Nomenclatura</p></a>
              </li>
              </ul>
              </li>
              ';
            }
            ?>

            <?php
            if ($tuser == 1 || $tuser == 7 || $tuser == 4) {
              echo '
      <li class="nav-item has-treeview ">
      <a href="#" class="nav-link">
      <i class="nav-icon fas fa-credit-card text-green"></i>
      <p>Cuentas por cobrar<i class="fas fa-angle-left right"></i>
      </p>
      </a>
      <ul class="nav nav-treeview">
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/clientesconsaldo" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-orange"></i><p>Cartera</p></a>
      </li>
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/registropagos" class="nav-link"><i class="nav-icon fas fa-edit text-green"></i><p>Registro | Anulación  Pagos</p></a>
      </li>
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/carterafacturado" class="nav-link"><i class="nav-icon fas fa-search-dollar text-info"></i><p>Cartera Facturado</p></a>
      </li>
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/carterabancos" class="nav-link"><i class="nav-icon fas fa-search-dollar text-info"></i><p>Cartera Bancos</p></a>
      </li>
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/carteramesyear" class="nav-link"><i class="nav-icon fas fa-search-dollar text-info"></i><p>Cartera Mes año</p></a>
      </li> 
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/pagossincotizacion" class="nav-link"><i class="nav-icon fas fa-funnel-dollar text-danger"></i><p>Pagos Sin Cotización</p></a>
      <li class="nav-item">
      <a href="' . RUTA_URL . '/cuentasporcobrar/facturassincotizacion" class="nav-link"><i class="nav-icon fas fa-funnel-dollar text-danger"></i><p>Facturas Sin Cotización</p></a>
      </ul>
      </li>
      ';
            }
            ?>
            <li class="nav-item"></li>

          </ul>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">

            <i style="font-size: 1.3rem;" class="nav-icon fas material-symbols-outlined">view_in_ar_new</i>

            <p>
              VALIDACIONES
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item"></li>


            <?php
            if ($tuser == 1 || $tuser == 7 || $tuser == 3) {

              echo '
  <li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
  <i class="nav-icon fas fa-book"></i>
  <p>Calibraciones<i class="fas fa-angle-left right"></i>
  <span class="right badge badge-info"></span>
  </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/clientescertificado" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Temperatura</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/clientescalibracionhumedad" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Humedad Relativa</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/clientespresion" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Presión</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/calibraciones" class="nav-link"><i class="nav-icon fas fa-book text-success"></i><p>Calibraciones</p></a>
  </li>
  </ul>
  </li>
  ';
            }
            ?>

            <?php
            if ($tuser == 1 || $tuser == 7 || $tuser == 3) {

              echo '
    <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-solid fa-certificate"></i>
    <p>Certificados<i class="fas fa-angle-left right"></i>
    <span class="right badge badge-info"></span>
    
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/clientesfiltroshepa" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Certificado filtros Hepa</p></a>
    </li>

      <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/certificadosfiltroshepa" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Certificado filtros Hepa</p></a>
    </li>


    </ul>
    </li>
    ';
            }
            ?>
            <?php
            if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
              echo '
    <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>Calificaciones<i class="fas fa-angle-left right"></i>
    <span class="right badge badge-info"></span>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/clientecalificacion" class="nav-link"><i class="nav-icon fas fa-edit text-orange"></i><p>Ingresar calificación </p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/calificaciones" class="nav-link"><i class="nav-icon fas fa-book text-success"></i><p>Calificaciones</p></a>
    </li>
    </ul>
    </li>
    ';
            }
            ?>
            <?php
            if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
              echo '
    <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>Datos de validaciones<i class="fas fa-angle-left right"></i>
    <span class="right badge badge-info"></span>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/ingresoregistroentrega" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Registros de entregra</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/registroentrega" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Registros de entregra</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Instrumentos Serproma</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Clasificación Equipos</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Referencias</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>POES</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-orange"></i><p>Componentes</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-orange"></i><p>Caracteristicas de equipos</p></a>
    </li>
    </ul>
    </li>
    ';
            }


            if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
              echo '
    <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">
    <i class="nav-icon fas fa-book"></i>
    <p>Operaciones<i class="fas fa-angle-left right"></i>
    <span class="right badge badge-info"></span>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Indicadores</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Programacion</p></a>
    </li>
    <li class="nav-item">
    <a href="' . RUTA_URL . '/validaciones/velocidad" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Velocidad</p></a>
    </li>
    </ul>
    </li>
    ';
            }
            ?>



          </ul>
        </li>




        <li class="nav-header">INVENTARIO ACTIVOS</li>
        <?php
        /*
        <li class="nav-item">
        <a href="' . RUTA_URL . '/validaciones/inventarioniveles" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Inventario Niveles 5</p></a>
        </li>
        
        */
        if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
          echo '
  <li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
  <i class="nav-icon fas fa-book"></i>
  <p>Inventario Clientes<i class="fas fa-angle-left right"></i>
  <span class="right badge badge-info"></span>
  </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/inventario_clientes_cliente" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Inventario Clientes</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/validaciones/inventarioclientes" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Inventario Completo</p></a>
  </li>


  
  </ul>
  </li>
  ';
        }
        ?>


        <li class="nav-header">PRODUCCIÓN</li>
        <?php
        if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-book"></i>
<p>Ficha Tecnica<i class="fas fa-angle-left right"></i>
<span class="right badge badge-info"></span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="' . RUTA_URL . '/operaciones/crear_producto" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Registrar Componente</p></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/operaciones/listar_componentes" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Listar Componente</p></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/operaciones/cliente_ficha_tecnica" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Registrar Ficha Tecnica</p></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/operaciones/fichas_tecnicas" class="nav-link"><i class="nav-icon fas fa-book text-info"></i><p>Fichas Tecnicas</p></a>
</li>
</ul>
</li>
';
        }
        ?>



        <li class="nav-header">SOPORTE TÉCNICO</li>
        <?php
        if ($tuser == 1 || $tuser == 7 || $tuser == 3) {
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-book"></i>
<p>Reporte Técnico<i class="fas fa-angle-left right"></i>
<span class="right badge badge-info"></span>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="' . RUTA_URL . '/soportetecnico/cliente_reporte_tecnico" class="nav-link"><i class="nav-icon fas fa-edit text-info"></i><p>Registrar Reporte Técnico</p></a>
</li>
</ul>
</li>
';
        }
        ?>

        <?php
        if ($tuser == 1 || $tuser == 7) {

          if ($tuser == 1 || $tuser == 7) {
            echo '<div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>';
          }
          echo '
  <li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
  <i class="nav-icon fas  fa-user-tie"></i>
  <p>RR.HH  <i class="fas fa-angle-left right"></i>
  </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/agregar" class="nav-link"><i class="nav-icon fas fa-edit text-green"></i><p>Ingresar Empleado</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/biometrico" class="nav-link"><i class="nav-icon fas fa-upload text-green"></i><p>Biometrico Cargar</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/biometrico_horarios" class="nav-link"><i class="nav-icon fas fa-digital-tachograph text-green"></i><p>Biometrico Horarios</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de Empleados</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/bajas" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado bajas</p></a>
  </li>
  </ul>
  </li>
  <li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
  <i class="nav-icon fas  fa-building"></i>
  <p>EMPRESAS  <i class="fas fa-angle-left right"></i>
  </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/empresas" class="nav-link"><i class="nav-icon fas fa-edit text-green"></i><p>Ingresar Empresa</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/empresas" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de Empresas</p></a>
  </li>
  </ul>
  </li>
  <li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
  <i class="nav-icon fas fa-hand-holding-usd"></i>
  <p>PLANILLA  <i class="fas fa-angle-left right"></i>
  </p>
  </a>
  <ul class="nav nav-treeview">
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/agregarplanilla" class="nav-link"><i class="nav-icon fas fa-edit text-green"></i><p>Ingresar Planilla</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/planillasDescuentos" class="nav-link"><i class="nav-icon fab fa-creative-commons-sampling-plus text-green"></i><p>Ingresar Pagos Extra</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/planillasDescuentos" class="nav-link"><i class="nav-icon fas fa-hand-holding-usd text-green"></i><p>Ingresar Prestamo</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/planillasDescuentos" class="nav-link"><i class="nav-icon fas fa-file-invoice-dollar text-green"></i><p>Listar Prestamos</p></a>
  </li>
  <li class="nav-item">
  <a href="' . RUTA_URL . '/empleados/planillas" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Planillas</p></a>
  </li>
  </ul>
  </li>
  ';
        }
        ?>
        <?php
        if ($tuser == 10 || $tuser == 2) {
          if ($tuser == 1) {
            echo '<div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>';
          }
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-gas-pump"></i>
<p>COMBUSTIBLE  <i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="' . RUTA_URL . '/combustibles/resumenpormes" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Resumen</p>    <span class="badge badge-info right">Por Mes</span></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/combustibles/" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Resumen</p>    <span class="badge badge-info right">Completo</span></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/combustibles/formhistorial" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Historial de Consumo</p></a>
</li>
</ul>
</li>
';
        }
        ?>
        <?php
        if ($tuser == 9 || $tuser == 9) {
          echo '
<li class="nav-item has-treeview ">
<a href="#" class="nav-link">
<i class="nav-icon fas  fa-boxes"></i>
<p>MATERIALES  <i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="' . RUTA_URL . '/bodegas/" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de materiales</p></a>
</li>
<li class="nav-item">
<a href="' . RUTA_URL . '/bodegas/proveedores" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Listado de proveedores</p></a>
</li>
<li class="nav-item">
<a href="#" class="nav-link"><i class="nav-icon fas fa-edit text-green"></i><p>Salidas Material</p></a>
</li>
<li class="nav-item">
<a href="#" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Inventario</p></a>
</li>
<li class="nav-item">
<a href="#" class="nav-link"><i class="nav-icon fas fa-file text-info"></i><p>Entregas</p></a>
</li>
</ul>
</li>
';
        }
        ?>
      </ul>
    </nav>
  </div>
</aside>
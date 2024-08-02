<?php
  session_start();
  date_default_timezone_set("America/Mexico_City");
  
?>

<!DOCTYPE html>
<head>
  <html lang="es">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <title>ICMH | Inspección Federal</title>
  <link rel="shortcut icon" href="/ICMH/Vistas/img/head1.png" type="image/png" />
 
  <!-- Bootstrap  / hoja de estilos--> 
  <link rel="stylesheet" href="/ICMH/Vistas/componentes/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/ICMH/Vistas/componentes/css/icmh.css?16">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/ICMH/Vistas/componentes/font-awesome/css/fontawesome.css">
  <link rel="stylesheet" href="/ICMH/Vistas/componentes/font-awesome/css/solid.css">

  <!-- DataTables-->
  <link rel="stylesheet" type="text/css" href="/ICMH/Vistas/componentes/DataTables/datatables.min.css"/>

  <!-- SweetAlert-->
  <link rel="stylesheet" type="text/css" href="/ICMH/Vistas/componentes/sweetalert/sweetalert2.min.css"/>

  <!--jQuery -->
  <script src="/ICMH/Vistas/componentes/jQuery/jquery-3.7.0.js"></script>  

</head>

<body>  
  <div class="msjresol" id="messagea">
    <span>Ajusta la altura de esta ventana para continuar.</span>
  </div>

  <?php
  // Función para cargar un módulo
  function cargarModulo($modulo) {
    echo '<div class="loader-section">
            <span class="loader1"></span>
            <span class="loader2"></span> 
          </div>';
    include "modulos/$modulo.php";
  }

  // Array con las URL válidas
  $urls_validas = ["inicio", "salir", "personal", "propietarios", "vehiculos", "clientes", "tickets", "ticket", "ec", "fm", "calidad", "compras", "sgc", "equipo", "lineas", "modelosv", "incidencias"];

  // Si el usuario está ingresado
  if(isset($_SESSION["ingreso"]) && $_SESSION["ingreso"] == true){
    echo '<div class="container-fluid justify-content-around align-items-start" id="caja-general">';
    include "modulos/cabecera.php";
    
    // Si hay una URL definida
    if(isset($_GET["url"])){
      $url = explode("/", $_GET["url"]);
      $modulo = $url[0];
      
      // Si la URL es válida, carga el módulo correspondiente
      if(in_array($modulo, $urls_validas)){
        cargarModulo($modulo);
      }
    } else {
      // Si no hay URL definida, carga el módulo de inicio por defecto
      include "modulos/inicio.php";
    }
    
    echo '</div>';
  } else {
    // Si el usuario no está ingresado, carga el módulo de login
    include "modulos/login.php";
  }
  ?>

  <footer>   
    <div class="row inferior">
      <div class="col-md-3 pietx">
        Inspección y Control Mexicano de Humos, S.A. de C.V.
      </div>
      <div class="col-md-2 pietx">
        UVSCTEC021  |  UVSCTAT019
      </div>
    </div>  
  </footer>
</body>



  
  <!--popper 5.3-->
  <script src="/ICMH/Vistas/componentes/popper/popper.min.js"></script>
  
  <!--tippy -->
  <!-- <script src="/ICMH/Vistas/componentes/tippy/tippy-bundle.umd.js"></script> -->

  <!--Bootstrap 5.3-->
  <script src="/ICMH/Vistas/componentes/bootstrap/js/bootstrap.bundle.min.js"></script>
 
  <!--Moment-->
  <script src="/ICMH/Vistas/componentes/moment/moment.js"></script> 

  <!--DataTables-->
  <script src="/ICMH/Vistas/componentes/DataTables/datatables.min.js"></script>
  <script src="/ICMH/Vistas/componentes/DataTables/currency.js"></script>

  <!-- pdfmake -->
  <!-- <script src="/ICMH/Vistas/componentes/DataTables/pdfmake.min.js"></script> -->

  <!-- vfs fonts -->
  <script src="/ICMH/Vistas/componentes/DataTables/vfs_fonts.js"></script>

  <!-- html2pdf (para formatos en modal)-->
  <script src="/ICMH/Vistas/componentes/html2pdf.bundle.min.js"></script> 

  <!-- otros js -->
  <script src="/ICMH/Vistas/componentes/sweetalert/sweetalert2.all.min.js"></script> 
  <script src="/ICMH/Vistas/js/numeral.min.js"></script>
  <script src="/ICMH/Vistas/js/main.js"></script>
  

  <script>

    function pageLoaded() {
      let loaderSection = document.querySelector('.loader-section');
      // loaderSection.classList.add('loaded');

      if (loaderSection) { loaderSection.classList.add('loaded'); }

      
	
    }
    
    document.onload = pageLoaded();
    
  </script>

</body>

</html>

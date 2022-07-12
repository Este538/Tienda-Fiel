<?php
//pagina que queremos abrir
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']): 'inicio';


    require_once './layout/header.php';

   require_once './public/'. $pagina . '.php';

    require_once './layout/footer.php';

    //version que entregamos
<!-- Evaluacion 1 de Electiva de Area 1 -->
<!-- Codigo realizado por Roque Lopez -->
<?php
    include('./views/templates/header.php');
    include('./controllers/ViewController.php');
    include('./routes/Routes.php');
    
    // Inicio del enrutado
    $init = new Router('login');

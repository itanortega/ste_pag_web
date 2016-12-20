<?php
if(empty($_GET['page'])) {
  $pagina='home.php';
}else {
    switch ($_GET['page']) {
        case 'home':
            $pagina = 'home.php';
            break;

        default:
            $pagina = 'home.php';
            break;
    }
}
include('includes/top_page.php');
include('includes/header.php');
include('pages/'.$pagina);
include('includes/footer.php');
?>

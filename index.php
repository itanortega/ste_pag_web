<?php
if(empty($_GET['page'])) {
    $pagina='home.php';
    $active_home = 'menu-item-active';
    $active_about = '';
    $active_service = '';
    $active_contact = '';
}else {
    $active_home = '';
    $active_about = '';
    $active_service = '';
    $active_contact = '';
    switch ($_GET['page']) {
        case 'home':
            $pagina = 'home.php';
            $active_home = 'menu-item-active';
            break;

        case 'about':
            $pagina = 'about.php';
            $active_about = 'menu-item-active';
            break;

        case 'service':
            $pagina = 'service.php';
            $active_service = 'menu-item-active';
            break;

        case 'contact':
            $pagina = 'contact.php';
            $active_contact = 'menu-item-active';
            break;

        default:
            $pagina = 'home.php';
            $active_home = 'menu-item-active';
            break;
    }
}
include('includes/top_page.php');
include('includes/header.php');
include('pages/'.$pagina);
include('includes/footer.php');
?>

<?php
$submodul = (isset($_GET['s']))?$_GET['s']:'view';
switch ($submodul) {
    case 'view':
    default:
        include ('module/subject/view.php');
        break;
    
    case 'add':
        include ('module/subject/add.php');
        break;

    case 'save':
        include ('module/subject/save.php');
        break;

    case 'edit':
        include ('module/subject/edit.php');
        break;
    
    case 'update':
        include ('module/subject/update.php');
        break;

    case 'delete':
        include ('module/subject/delete.php');
        break;
}
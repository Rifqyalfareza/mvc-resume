<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

switch ($page) {
    case 'customer':
        include './view/customer/index.php';
        break;
    case 'part':
        include './view/part/index.php';
        break;
    case 'master-data':
        include './view/master-data/index.php';
        break;

    case 'edit':
        include './view/customer/edit.php';
        break;
    default:
        #.
        break;
}
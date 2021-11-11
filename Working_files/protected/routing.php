<?php
if (!array_key_exists('P', $_GET) || empty($_GET['P'])) {
    $_GET['P'] = 'home';
}

switch($_GET['P']) {
    case 'home':
        require_once NORMAL_DIR.'home.php';
    break;
    
    case 'about_us':
        require_once NORMAL_DIR.'about_us.php';
        break;

    case 'My_info':
        require_once NORMAL_DIR.'My_info.php';
        break;


    // case 'Sign_in':
    //     require_once USER_DIR.'Sign_in.php';
    //     break;

    // case 'logout':
	// 	IsUserLoggedIn() ? UserLogout(): header('Location: index.php');
	// break;
    
    // case 'Sign_Up':
    //     require_once NORMAL_DIR.'Sign_Up.php';
    //     break;


    // default:
    //     require_once NORMAL_DIR.'home.php';
    //     break;
}
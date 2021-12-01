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
    
        case 'features':
            require_once NORMAL_DIR.'Features.php';
            break;


    // default:
    //     require_once NORMAL_DIR.'home.php';
    //     break;
}
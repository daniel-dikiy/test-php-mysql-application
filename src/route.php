<?php

switch ($_GET['route']) {
    case 'users':
        $controller = new UsersController();
        $result = $controller->index();
        $title = $result['title'];
        $content = $result['content'];
        break;
    default:
        $title = 'Homepage';
        ob_start();
        echo "<h1>Homepage</h1><p><a href='?route=users'>Users page</a></p>";
        $content = ob_get_clean();
        break;
}
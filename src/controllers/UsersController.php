<?php

class UsersController {

    private static $title = 'Users';

    public function index() {
        $pdo = Database::getConnection();

        $request = $pdo->prepare('SELECT id, name FROM users ORDER BY id ASC');
        $request->execute();
        $users = $request->fetchAll(PDO::FETCH_ASSOC);

        ob_start();
        include __DIR__ . '/../views/users.php';
        $content = ob_get_clean();

        return ['content' => $content, 'title' => self::$title];
    }
}
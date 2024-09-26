
<?php
require_once '../controllers/UserController.php';
require_once '../controllers/ArticleController.php';
require_once '../controllers/CommentController.php';

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'register':
        $userController = new UserController();
        $userController->register();
        break;
    case 'login':
        $userController = new UserController();
        $userController->login();
        break;
    case 'logout':
        $userController = new UserController();
        $userController->logout();
        break;
    case 'articles':
        $articleController = new ArticleController();
        $articleController->index();
        break;
    case 'article':
        $articleController = new ArticleController();
        $articleController->show($_GET['id']);
        break;
    case 'create_article':
        $articleController = new ArticleController();
        $articleController->create();
        break;
    case 'add_comment':
        $commentController = new CommentController();
        $commentController->create();
        break;
    default:
        echo "Página no encontrada";
}
?>

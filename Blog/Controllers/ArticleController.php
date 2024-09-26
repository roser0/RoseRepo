<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/Article.php';

class ArticleController {
    private $db;
    private $articleModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->articleModel = new Article($this->db);
    }

    public function index() {
        $articles = $this->articleModel->getAll()->fetchAll(PDO::FETCH_ASSOC);
        require_once 'views/articles/index.php';
    }

    public function show($id) {
        $this->articleModel->id = $id;
        $article = $this->articleModel->getById();
        require_once 'views/articles/show.php';
    }

    public function create() {
        session_start();
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'editor') {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->articleModel->user_id = $_SESSION['user_id'];
                $this->articleModel->title = $_POST['title'];
                $this->articleModel->content = $_POST['content'];
                $this->articleModel->category = $_POST['category'];
                $this->articleModel->tags = $_POST['tags'];

                if ($this->articleModel->create()) {
                    header('Location: /public/index.php?action=articles');
                } else {
                    echo "Error al crear el artículo";
                }
            }
        } else {
            echo "No tienes permiso para crear artículos";
        }
    }
}
?>

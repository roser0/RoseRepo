
<?php
require_once __DIR__ .'/../config/config.php';
require_once __DIR__ . '/../models/Comment.php';

class CommentController {
    private $db;
    private $commentModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->commentModel = new Comment($this->db);
    }

    public function create() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->commentModel->article_id = $_POST['article_id'];
            $this->commentModel->user_id = $_SESSION['user_id'];
            $this->commentModel->content = $_POST['content'];

            if ($this->commentModel->create()) {
                header('Location: /public/index.php?action=article&id=' . $_POST['article_id']);
            } else {
                echo "Error al crear el comentario";
            }
        }
    }

    public function approve($id) {
        session_start();
        if ($_SESSION['role'] == 'admin') {
            $this->commentModel->id = $id;
            if ($this->commentModel->approve()) {
                header('Location: /public/index.php?action=comments');
            } else {
                echo "Error al aprobar el comentario";
            }
        } else {
            echo "No tienes permiso para aprobar comentarios";
        }
    }
}
?>

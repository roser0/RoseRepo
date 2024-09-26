
<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $db;
    private $userModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->userModel = new User($this->db);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel->username = $_POST['username'];
            $this->userModel->email = $_POST['email'];
            $this->userModel->password = $_POST['password'];
            $this->userModel->role = 'reader'; 

            if ($this->userModel->register()) {
                header('Location: /public/index.php?action=login');
            } else {
                echo "Error en el registro";
            }
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->userModel->email = $_POST['email'];
            $this->userModel->password = $_POST['password'];

            $user = $this->userModel->login();
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: /public/index.php?action=articles');
            } else {
                echo "Error en el inicio de sesión";
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /public/index.php?action=login');
    }
}
?>

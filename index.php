<?php
new App();
class App
{
    private $db;
    private $url;
    private $request_type;
    public function __construct()
    {
        $this->sessionInit();
        $this->databaseInit();
        $this->get_url();
        $this->get_request();
        $this->load_page();
    }

    private function sessionInit(){
        @session_start();
        if(!isset($_SESSION['userID'])){
            $_SESSION['userID'] = 0;
            $_SESSION['userType'] = "guest";
        }
    }

    private function get_url()
    {
        $url = strtolower($_SERVER['REQUEST_URI']);
        $url = trim($url, "/");
        while (strpos($url, '//')) {
            $url = str_replace("//", "/", $url);
        }
        $this->url = explode("/", $url);
    }

    private function get_request()
    {
        $request = $_SERVER['REQUEST_METHOD'];
        $this->request_type = strtoupper($request);
    }

    private function load_page()
    {
        $length = count($this->url);
        switch ($length) {
            case 1:
                $this->level_one($this->url[0]);
                break;
            case 2:
                $this->level_two($this->url[0], $this->url[1]);
                break;
            case 3:
                $this->level_three();
                break;
            default:
                echo "Page Not Found : 404";
        }
    }

    private function level_one($one)
    {
        switch ($one) {
            case "":
                if ($this->isGet()) {
                    include_once "web/home.blade.php";
                    exit;
                }
                break;
                case "profile":
                    if ($this->isGet()) {
                        include_once "web/profile.blade.php";
                        exit;
                    } 
                    case "booking":
                        if ($this->isGet()) {
                            include_once "web/booking.blade.php";
                            exit;
                        } 
                    case "about-us":
                        if ($this->isGet()) {
                            include_once "web/about-us.blade.php";
                            exit;
                        } 
                    case "packages":
                            if ($this->isGet()) {
                                include_once "web/packages.blade.php";
                                exit;
                            } 
                        case "services":
                                if ($this->isGet()) {
                                    include_once "web/services.blade.php";
                                    exit;
                                } 
            
         
            case "sign-in":
                if ($this->isGet()) {
                    include_once "web/login.blade.php";
                    exit;
                }else{
                    require_once "forms/login.php";
                    new Login($this->db, $_POST);
                    exit;
                }
            case "contact-us":
                if ($this->isGet()) {
                    include_once "./web/contact.blade.php";
                    exit;
                } else {
                    require_once "./forms/contact.php";
                    new Contact($this->db, $_POST);
                    exit;
                }
            case "register":
                if ($this->isGet()) {
                    include_once "web/register.blade.php";
                    exit;
                } else {
                    require_once "forms/register.php";
                    new Register($this->db, $_POST);
                    exit;
                }
                case "logout":
                    $_SESSION = array();
                    @session_unset();
                    @session_regenerate_id(true);
                    @session_destroy();
                    header('Location: /sign-in');
                    exit;
        }
        echo "Page Not Found : 404";
    }

    private function level_two($one, $two)
    {
        switch ($one) {
            case "training":

                switch ($two):
                    case "summer-training":
                        echo "This is summer training page";
                        exit;
                    case "industrial-training":
                        echo "This is industrial training page";
                        exit;
                endswitch;
                break;
            case "courses":

                switch ($two):
                    case "php":
                        echo "This is php couse page";
                        exit;
                    case "python":
                        echo "This is python course page";
                        exit;
                endswitch;
                break;
        }
        echo "Page Not Found : 404";
    }

    private function level_three()
    {
    }

    private function isGet()
    {
        if ($this->request_type === 'GET') {
            return true;
        }
        return false;
    }

    private function databaseInit(){
        $this->db = new PDO(
            'mysql:host=localhost;port=10010;',
            'root',
            'root'
        );
        $database = "google";
        $this->db->exec("CREATE DATABASE IF NOT EXISTS $database");
        $this->db = new PDO(
            "mysql:host=localhost;port=10010;dbname=$database", 
            'root',
            'root'
        );


    }
}










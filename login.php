<?php

class Login
{
    private $id;

    private $userType;
    public function __construct($db, $data)
    {
        $db->exec("CREATE TABLE IF NOT EXISTS users (
        id BIGINT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(15) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        userType VARCHAR(10) NOT NULL DEFAULT 'user',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci");
        if ($this->validate($data)) {

            if ($this->login($db, $data['email'], $data['password'])) {
                $_SESSION['userID'] = $this->id;
                $_SESSION['userType'] = $this->userType;

                header("Location: /");
                exit;
            } else {
                header("Location: /sign-in");
                exit;
            }

        } else {
            echo "INVALID DATA";
            exit;
        }
    }

    private function validate($data)
    {
        //validation

        //if everything ok return true else false
        return true;
    }


    private function login($db, $email, $password)
    {
        $sql = "SELECT id,userType FROM users WHERE (email = :email OR phone = :email) AND password = :password";
        $stmt = $db->prepare($sql);

        // Bind parameters securely
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (is_array($user)) {
                $this->id = $user['id'];
                $this->userType = $user['userType'];
                return true;
            }
            return false;
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
            exit;
        }
    }
}
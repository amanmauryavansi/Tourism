<?php

class booking
{
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
            if (!$this->checkEmailExist($db, $data['email'])) {
                if (!$this->checkEmailExist($db, $data['phone'])) {
                    $this->register($db, $data['name'], $data['email'], $data['phone'], $data['password']);
                    header("Location: /booking");
                    exit;
                } else {
                    echo "Phone Exist";
                    exit;
                }
            } else {
                echo "Email Exist";
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

    private function checkEmailExist($db, $email)
    {
        //check in db
        //if email exist return true else false
        return false;
    }

    private function checkPhoneExist($db, $email)
    {
        //check in db
        //if phone exist return true else false
        return false;
    }

    private function register($db, $name, $email, $phone, $password)
    {
        $sql = "INSERT INTO users (name, email, phone, password) VALUES (:name, :email, :phone, :password)";
        $stmt = $db->prepare($sql);

        // Bind parameters securely
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":password", $password);

        try {
            $stmt->execute();
            return true;
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
            exit;
        }
    }
}
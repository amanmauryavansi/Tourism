<?php

class contact
{
    public function __construct($db, $data)
    {


        $db->exec("CREATE TABLE IF NOT EXISTS users (
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        phone VARCHAR(15) NOT NULL UNIQUE,
        message VARCHAR(100) NOT NULL UNIQUE,

        userType VARCHAR(10) NOT NULL DEFAULT 'user',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci");
        if ($this->validate($data)) {
            if (!$this->checkEmailExist($db, $data['email'])) {
                if (!$this->checkEmailExist($db, $data['phone'])) {
                    $this->Contact($db, $data['name'], $data['email'], $data['phone'], $data['message']);
                    header("Location: /contact-us");
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
    private function checkmessage($db, $message)
    {
        //check in db
        //if email exist return true else false
        return false;
    }

    private function Contact($db, $name, $email, $phone, $message)
    {
        $sql = "INSERT INTO users (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $db->prepare($sql);

        // Bind parameters securely
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);

        try {
            $stmt->execute();
            return true;
        } catch (Exception $ex) {
            echo "Error: " . $ex->getMessage();
            exit;
        }
    }
}



<?php

include_once 'Databases.php';



class Auth

{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllList()
    {
        $this->db->query("SELECT id,title,description,img,post_date FROM image");

        $results = $this->db->resultSet();

        return $results;

        // echo "Good";
        // return 'Good';

    }

    public function getUser($email)
    {

        $this->db->query("SELECT * FROM postauth where username = :username");

        $this->db->bind(":username", $email);

        // Assign Row

        $row = $this->db->single();

        return $row;
    }

    public function test($username)
    {

        $this->db->query("SELECT * FROM postauth where username = :username");

        $this->db->bind(":username", $username);

        // Assign Row

        $row = $this->db->single();

        return $row;
    }


    // Create Job
    public function create($data)
    {

        //Insert Query
        $this->db->query("INSERT INTO postauth (username,parol,email) VALUES (:username,:parol,:email)");

        $this->db->bind(":username", $data['username']);
        $this->db->bind(":parol", $data["parol"]);
        $this->db->bind(":email", $data["email"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

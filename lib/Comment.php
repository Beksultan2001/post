
<?php

include_once 'Databases.php';



class Comment
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    public function getAllList()
    {
        $this->db->query("SELECT id,post_id,username,comment,post_date FROM newcomment");

        $results = $this->db->resultSet();

        return $results;

        // echo "Good";
        // return 'Good';

    }

    public function getPost($id)
    {

        $this->db->query("SELECT * FROM newcomment where id = :id");
        $this->db->bind(":id", $id);

        // Assign Row

        $row = $this->db->single();
        return $row;
    }

    // Create Job

    public function create($data)
    {

        //Insert Query

        $this->db->query("INSERT INTO newcomment (post_id,comment,username) VALUES (:post_id,:comment,:username)");

        $this->db->bind(":post_id", $data['post_id']);
        $this->db->bind(":comment", $data['comment']);
        $this->db->bind(":username", $data["username"]);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {

        $this->db->query("DELETE FROM newcomment where id = $id");

        // Execute 

        if ($this->db->execute()) {

            return true;
        } else {
            return false;
        }
    }

    public function update($id, $data)
    {

        // Insert Query

        $this->db->query("UPDATE image SET title = :title,description = :description WHERE id = $id");

        // Bind Data

        $this->db->bind(':title', $data['title']);
        $this->db->bind(":description", $data['description']);

        //Execute 

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

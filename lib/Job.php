
<?php

include_once 'Databases.php';



class Job
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllList()
    {
        $this->db->query("SELECT id,username,title,description,img,post_date FROM image");

        $results = $this->db->resultSet();

        return $results;

        // echo "Good";
        // return 'Good';

    }

    public function getPost($id)
    {

        $this->db->query("SELECT * FROM image where id = :id");
        $this->db->bind(":id", $id);

        // Assign Row

        $row = $this->db->single();

        return $row;
    }

    // Create Job
    public function create($data)
    {

        //Insert Query
        $this->db->query("INSERT INTO image (title,username,description,img) VALUES (:title,:username,:description,:img)");

        $this->db->bind(":title", $data['title']);
        $this->db->bind(":username", $data["username"]);
        $this->db->bind(":description", $data["description"]);
        $this->db->bind(":img", $data["img"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {

        $this->db->query("DELETE FROM image where id = $id");

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

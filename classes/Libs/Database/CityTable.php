<?php

namespace Libs\Database;

class CityTable
{
    private $db;
    public function __construct(Mysql $mysql)
    {
        $this->db = $mysql->connect();
    }

    public function getAll()
    {
        $statement = $this->db->query(
            "SELECT * FROM city"
        );
        return $statement->fetchAll();
    }
    public function insert($data)
    {
        $statement = $this->db->prepare(
            "INSERT INTO city(name) VALUES (:name)"
        );
        $statement->execute($data);
        // return $this->db->lastInsertId();
    }
    public function edit($id)
    {
        $statement = $this->db->query("SELECT * FROM city WHERE id=$id");
        // $statement->execute(['id' => $id]);
        return $statement->fetch();
    }
    public function update($id, $data)
    {
        $statement = $this->db->prepare("UPDATE city SET name=:name WHERE id=$id");
        $statement->execute($data);
    }
    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM city WHERE id=:id");
        $statement->execute(['id' => $id]);
        // return $statement->rowCount();
    }
}

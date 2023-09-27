<?php

namespace Libs\Database;

class DriverTable
{
    private $db;
    public function __construct(Mysql $mysql)
    {
        $this->db = $mysql->connect();
    }

    public function getAll()
    {
        $statement = $this->db->query(
            "SELECT * FROM driver"
        );
        return $statement->fetchAll();
    }
    public function insert($data)
    {
        $statement = $this->db->prepare(
            "INSERT INTO driver(name,phone,address,nrc) VALUES (:name,:phone,:address,:nrc)"
        );
        $statement->execute($data);
        // return $this->db->lastInsertId();
    }
    public function edit($id)
    {
        $statement = $this->db->query("SELECT * FROM driver WHERE id=$id");
        // $statement->execute(['id' => $id]);
        return $statement->fetch();
    }
    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM driver WHERE id=:id");
        $statement->execute(['id' => $id]);
        // return $statement->rowCount();
    }
    public function update($id, $data)
    {
        $statement = $this->db->prepare("UPDATE driver SET name=:name, phone=:phone, address=:address, nrc=:nrc WHERE id=$id");
        $statement->execute($data);
    }
}

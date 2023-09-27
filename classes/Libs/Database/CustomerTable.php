<?php

namespace Libs\Database;

class CustomerTable
{
    private $db;
    public function __construct(Mysql $mysql)
    {
        $this->db = $mysql->connect();
    }

    public function getAll()
    {
        $statement = $this->db->query(
            "SELECT * FROM user"
        );
        return $statement->fetchAll();
    }

    public function insert($data)
    {
        $statement = $this->db->prepare(
            "INSERT INTO user(name,phone,address,customer_code) VALUES (:name,:phone,:address,:customer_code)"
        );
        $statement->execute($data);
        // return $this->db->lastInsertId();
    }

    public function edit($id)
    {
        $statement = $this->db->query("SELECT * FROM user WHERE id=$id");
        // $statement->execute(['id' => $id]);
        return $statement->fetch();
    }
    public function update($id, $data)
    {
        // var_dump($data);
        // $statement = $this->db->prepare("UPDATE user SET name=:name, phone=:phone, address=:address, customer_code=:customer_code WHERE id=:id");
        $statement = $this->db->prepare("UPDATE user SET name=:name, phone=:phone, address=:address, customer_code=:customer_code WHERE id=$id");
        $statement->execute($data);
        // $statement->execute(['data'=>$data , 'id' => $id]);
        // var_dump($statement);
    }

    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM user WHERE id=:id");
        $statement->execute(['id' => $id]);
        // return $statement->rowCount();
    }
}

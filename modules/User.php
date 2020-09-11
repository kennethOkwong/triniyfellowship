<?php

class User
{
    private $db;

    private $table = 'users';

    public $id;

    public $username;

    public $firstname;

    public $lastname;

    public $created_at;

    public function __construct()
    {
        global $db;

        $this->db = $db;
    }

    public function create()
    {
        $stmt = $this->db->prepare('INSERT INTO ' . $this->table . ' (username, firstname, lastname) VALUES(:username, :firstname, :lastname)');

        $stmt->execute([
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
        ]);

        return $this->db->lastInsertId();
    }

    public static function find($id)
    {
        $user = new self;

        return $user->findById($id);
    }

    private function findById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->fetchObject('User');
    }

    public static function all()
    {
        $user = new self;

        return $user->findAll();
    }

    private function findAll()
    {
        $stmt = $this->db->query('SELECT * FROM ' . $this->table);

        return $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    }

    public function update()
    {
        $stmt = $this->db->prepare('UPDATE ' . $this->table . ' SET username=:username, firstname=:firstname, lastname=:lastname WHERE id=:id');

        $stmt->execute([
            'username' => $this->username,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'id' => $this->id,
        ]);

        return $stmt->rowCount();
    }

    public static function delete($id)
    {
        $user = new self;

        return $user->deleteById($id);
    }

    private function deleteById($id)
    {
        $stmt = $this->db->prepare('DELETE FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}
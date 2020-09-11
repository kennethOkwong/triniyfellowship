<?php

class Subscription
{
    private $db;

    private $table = 'subscriptions';

    public $id;

    public $firstname;

    public $email;

    public $created_at;

    public function __construct()
    {
        global $db;

        $this->db = $db;
    }

    public function create()
    {
        $stmt = $this->db->prepare('INSERT INTO ' . $this->table . ' (firstname, email) VALUES(:firstname, :email)');

        $stmt->execute([
            'firstname' => $this->firstname,
            'email' => $this->email,
        ]);

        return $this->db->lastInsertId();
    }

    public static function find($id)
    {
        $subscription = new self;

        return $subscription->findById($id);
    }

    private function findById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->fetchObject('Subscription');
    }

    public static function all()
    {
        $subscription = new self;

        return $subscription->findAll();
    }

    private function findAll()
    {
        $stmt = $this->db->query('SELECT * FROM ' . $this->table);

        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Subscription');
    }

    public function update()
    {
        $stmt = $this->db->prepare('UPDATE ' . $this->table . ' SET firstname=:firstname, email=:email WHERE id=:id');

        $stmt->execute([
            'firstname' => $this->firstname,
            'email' => $this->email,    
            'id' => $this->id,
        ]);

        return $stmt->rowCount();
    }

    public static function delete($id)
    {
        $subscription = new self;

        return $subscription->deleteById($id);
    }

    private function deleteById($id)
    {
        $stmt = $this->db->prepare('DELETE FROM ' . $this->table . ' WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}
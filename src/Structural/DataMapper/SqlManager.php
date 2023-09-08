<?php


namespace App\Structural\DataMapper;


class SqlManager implements StorageManager
{
    private $db;

    public function __construct()
    {
        $this->db = new \PDO("mysql:host=localhost;dbname=a_new_glary", "root", "");
    }

    public function find($id)
    {
        $st = $this->db->prepare("SELECT * FROM customers WHERE id = ?");
        $st->execute([$id]);
        $data = $st->fetch(\PDO::FETCH_ASSOC);
        if ($data) {
            return new User($data['id'], $data['email']);
        }
        return null;
    }

    public function save(User $user)
    {
        $stmt = $this->db->prepare("INSERT INTO users (email) VALUES (?)");
        $stmt->execute([$user->getEmail()]);
        return true;
    }
}
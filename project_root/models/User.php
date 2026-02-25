<?php
require_once __DIR__ . '/../config/db.php';

class User {

    private $collection;

    public function __construct($database) {
        // MongoDB collection
        $this->collection = $database->users;
    }

    // ========================
    // CREATE: Add new user
    // ========================
    public function createUser($data) {
        // Hash password before inserting
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        $data['created_at'] = date('Y-m-d H:i:s');
        return $this->collection->insertOne($data);
    }

    // ========================
    // READ: Find single user by email
    // ========================
    public function findByEmail($email) {
        return $this->collection->findOne(['email' => $email]);
    }

    // ========================
    // READ: Find single user by ID
    // ========================
    public function findById($id) {
        try {
            return $this->collection->findOne([
                '_id' => new MongoDB\BSON\ObjectId($id)
            ]);
        } catch (Exception $e) {
            return null;
        }
    }

    // ========================
    // READ: Get all users
    // ========================
    public function getAllUsers() {
        return $this->collection->find();
    }

    // ========================
    // UPDATE: Update user details
    // ========================
    public function updateUser($id, $data) {
        // If password needs updating, hash it
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        return $this->collection->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set' => $data]
        );
    }

    // ========================
    // DELETE: Delete user by ID
    // ========================
    public function deleteUser($id) {
        return $this->collection->deleteOne([
            '_id' => new MongoDB\BSON\ObjectId($id)
        ]);
    }

    // ========================
    // CHECK: Prevent duplicate email
    // ========================
    public function isEmailExist($email) {
        $user = $this->findByEmail($email);
        return $user ? true : false;
    }

    // ========================
    // VALIDATE login credentials
    // ========================
    public function validateLogin($email, $password) {
        $user = $this->findByEmail($email);
        if (!$user) return false;

        if (password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

}
?>
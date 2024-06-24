<?php

class UserService
{
  private mysqli $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function loginOrRegister(User $user): User
  {
    $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $user->getEmail());
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $user = $result->fetch_object('User');

      return $user;
    }

    return $this->register($user);
  }

  private function register(User $user): User
  {
    $this->conn->begin_transaction();

    $stmt = $this->conn->prepare("INSERT INTO users(name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $user->getName(), $user->getEmail());
    $stmt->execute();

    $user->setId($this->conn->insert_id);

    $this->conn->commit();

    return $user;
  }
}

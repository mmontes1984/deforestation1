<?php

class User
{
  private int $id;
  private string $name;
  private string $email;

  public function __construct()
  {
  }

  public static function withAllArgs(int $id, string $name, string $email): User
  {
    $instance = new self();
    $instance->id = $id;
    $instance->name = $name;
    $instance->email = $email;
    return $instance;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): void
  {
    $this->email = $email;
  }
}

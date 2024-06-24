<?php

class Post
{
  private int $id;
  private string $title;
  private string $content;
  private DateTime $created_at;
  private int $author_id;
  private string $description;
  private array $comments;
  private string $image_path;

  public function __construct()
  {
  }

  public static function withAllArgs(int $id, string $title, string $content, DateTime $created_at, int $author_id, string $image_path): Post
  {
    $instance = new self();
    $instance->id = $id;
    $instance->title = $title;
    $instance->content = $content;
    $instance->created_at = $created_at;
    $instance->author_id = $author_id;
    $instance->image_path = $image_path;
    return $instance;
  }

  public static function withoutComments(int $id, string $title, string $content, DateTime $created_at, int $author_id, string $description, string $image_path): Post
  {
    $instance = new self();
    $instance->id = $id;
    $instance->title = $title;
    $instance->description = $description;
    $instance->content = $content;
    $instance->created_at = $created_at;
    $instance->author_id = $author_id;
    $instance->image_path = $image_path;
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

  public function getTitle(): string
  {
    return $this->title;
  }

  public function setTitle(string $title): void
  {
    $this->title = $title;
  }

  public function getContent(): string
  {
    return $this->content;
  }

  public function setContent(string $content): void
  {
    $this->content = $content;
  }

  public function getCreatedAt(): DateTime
  {
    return $this->created_at;
  }

  public function setCreatedAt(DateTime $created_at): void
  {
    $this->created_at = $created_at;
  }

  public function getAuthorId(): int
  {
    return $this->author_id;
  }

  public function setAuthorId(int $author_id): void
  {
    $this->author_id = $author_id;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function getComments(): array
  {
    return $this->comments;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setComments(array $comments): void
  {
    $this->comments = $comments;
  }

  public function getImagePath(): string
  {
    return $this->image_path;
  }

  public function setImagePath(string $image_path): void
  {
    $this->image_path = $image_path;
  }
}

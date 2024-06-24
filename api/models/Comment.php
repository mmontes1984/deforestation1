<?php

class Comment
{
  private int $id;
  private string $content;
  private DateTime $created_at;
  private int $post_id;
  private int $user_id;

  public function __construct()
  {
  }

  public static function withAllArgs(int $id, string $content, DateTime $created_at, int $post_id, int $user_id): Comment
  {
    $comment = new Comment();
    $comment->setId($id);
    $comment->setContent($content);
    $comment->setCreatedAt($created_at);
    $comment->setPostId($post_id);
    $comment->setUserId($user_id);

    return $comment;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getContent(): string
  {
    return $this->content;
  }

  public function getCreatedAt(): DateTime
  {
    return $this->created_at;
  }

  public function getPostId(): int
  {
    return $this->post_id;
  }

  public function getUserId(): int
  {
    return $this->user_id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function setContent(string $content): void
  {
    $this->content = $content;
  }

  public function setCreatedAt(DateTime $created_at): void
  {
    $this->created_at = $created_at;
  }

  public function setPostId(int $post_id): void
  {
    $this->post_id = $post_id;
  }

  public function setUserId(int $user_id): void
  {
    $this->user_id = $user_id;
  }
}

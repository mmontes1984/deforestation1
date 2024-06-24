<?php

class CommentService
{
  private mysqli $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function createComment(Comment $comment): Comment
  {
    $this->conn->begin_transaction();

    $stmt = $this->conn->prepare("INSERT INTO comments(content, post_id, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $comment->getContent(), $comment->getPostId(), $comment->getUserId());
    $stmt->execute();

    $comment->setId($this->conn->insert_id);

    $this->conn->commit();

    return $comment;
  }

  public function getComment(int $id): ?Comment
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $comment = $result->fetch_object('Comment');

    if (!$comment) {
      return null;
    }

    return $comment;
  }

  public function getComments(): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments");
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function getCommentsByPost(int $postId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE post_id = ?");
    $stmt->bind_param("i", $postId);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function getCommentsByUser(int $userId): array
  {
    $stmt = $this->conn->prepare("SELECT * FROM comments WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}

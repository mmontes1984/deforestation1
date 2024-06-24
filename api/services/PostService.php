<?php

class PostService
{
  private mysqli $conn;

  public function __construct(mysqli $conn)
  {
    $this->conn = $conn;
  }

  public function createPost(Post $post): Post
  {
    try {
      $this->conn->begin_transaction();

      $title = $post->getTitle();
      $content = $post->getContent();
      $authorId = $post->getAuthorId();
      $imagePath = $post->getImagePath();

      $stmt = $this->conn->prepare("INSERT INTO posts(title, content, author_id, image_path) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssis", $title, $content, $authorId, $imagePath);
      $stmt->execute();

      $post->setId($this->conn->insert_id);

      $this->conn->commit();

      return $post;
    } catch (Exception $e) {
      $this->conn->rollback();
      throw new Exception("Failed to create post: " . $e->getMessage());
    }
  }

  public function getPost(int $id): ?Post
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM posts WHERE id = ?");
      $stmt->bind_param("i", $id);
      $stmt->execute();

      $result = $stmt->get_result();
      $postInfo = $result->fetch_all(MYSQLI_ASSOC);

      if (!$postInfo) {
        return null;
      }

      $post = new Post();
      $post->setId($postInfo[0]['id']);
      $post->setTitle($postInfo[0]['title'] ?? '');
      $post->setDescription($postInfo[0]['description'] ?? '');
      $post->setContent($postInfo[0]['content'] ?? '');
      $post->setAuthorId($postInfo[0]['author_id']);
      $post->setImagePath($postInfo[0]['image_path'] ?? '');

      // get comments for post
      $stmt = $this->conn->prepare("SELECT * FROM comments WHERE post_id = ?");
      $id = $post->getId();
      $stmt->bind_param("i", $id);
      $stmt->execute();

      $result = $stmt->get_result();
      $commentsInfo = $result->fetch_all(MYSQLI_ASSOC);

      $comments = [];
      for ($i = 0; $i < count($commentsInfo); $i++) {
        $comment = new Comment();
        $comment->setId($commentsInfo[$i]['id']);
        $comment->setUserId($commentsInfo[$i]['user_id']);
        $comment->setPostId($commentsInfo[$i]['post_id']);
        $comment->setContent($commentsInfo[$i]['content'] ?? '');
        $comment->setCreatedAt(new DateTime($commentsInfo[$i]['created_at']));
        $comments[$i] = $comment;
      }

      $post->setComments($comments);

      return $post;
    } catch (Exception $e) {
      throw new Exception("Failed to get post: " . $e->getMessage());
    }
  }

  public function getPosts(): array
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM posts");
      $stmt->execute();

      $result = $stmt->get_result();
      $data = $result->fetch_all(MYSQLI_ASSOC);

      $postsList = [];


      for ($i = 0; $i < count($data); $i++) {
        $post = new Post();
        $post->setId($data[$i]['id']);
        $post->setTitle($data[$i]['title'] ?? '');
        $post->setDescription($data[$i]["description"] ?? '');
        $post->setContent($data[$i]['content'] ?? '');
        $post->setAuthorId($data[$i]['author_id']);
        $post->setImagePath($data[$i]['image_path'] ?? '');
        $postsList[$i] = $post;
      }

      return $postsList;
    } catch (Exception $e) {
      throw new Exception("Failed to get posts: " . $e->getMessage());
    }
  }

  public function getPostsByAuthor(int $authorId): array
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM posts WHERE author_id = ?");
      $stmt->bind_param("i", $authorId);
      $stmt->execute();

      $result = $stmt->get_result();
      $postsInfo = $result->fetch_all(MYSQLI_ASSOC);

      $postsList = [];

      for ($i = 0; $i < count($postsInfo); $i++) {
        $post = new Post();
        $post->setId($postsInfo[$i]['id']);
        $post->setTitle($postsInfo[$i]['title'] ?? '');
        $post->setDescription($postsInfo[$i]["description"] ?? '');
        $post->setContent($postsInfo[$i]['content'] ?? '');
        $post->setAuthorId($postsInfo[$i]['author_id']);
        $post->setImagePath($postsInfo[$i]['image_path'] ?? '');
        $postsList[$i] = $post;
      }

      return $postsList;
    } catch (Exception $e) {
      throw new Exception("Failed to get posts by author: " . $e->getMessage());
    }
  }

  public function updatePost(Post $post): Post
  {
    try {
      $this->conn->begin_transaction();

      $stmt = $this->conn->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
      $stmt->bind_param("ssi", $post->getTitle(), $post->getContent(), $post->getId());
      $stmt->execute();

      $this->conn->commit();

      return $post;
    } catch (Exception $e) {
      $this->conn->rollback();
      throw new Exception("Failed to update post: " . $e->getMessage());
    }
  }

  public function deletePost(int $id): void
  {
    try {
      $this->conn->begin_transaction();

      $stmt = $this->conn->prepare("DELETE FROM posts WHERE id = ?");
      $stmt->bind_param("i", $id);
      $stmt->execute();

      $this->conn->commit();
    } catch (Exception $e) {
      $this->conn->rollback();
      throw new Exception("Failed to delete post: " . $e->getMessage());
    }
  }

  public function getPostsByTitle(string $title): array
  {
    try {
      $stmt = $this->conn->prepare("SELECT * FROM posts WHERE LOWER(title) LIKE LOWER(?)");
      $title = '%' . $title . '%';
      $stmt->bind_param("s", $title);
      $stmt->execute();

      $result = $stmt->get_result();
      $postsInfo = $result->fetch_all(MYSQLI_ASSOC);

      $postsList = [];

      for ($i = 0; $i < count($postsInfo); $i++) {
        $post = new Post();
        $post->setId($postsInfo[$i]['id']);
        $post->setTitle($postsInfo[$i]['title'] ?? '');
        $post->setDescription($postsInfo[$i]["description"] ?? '');
        $post->setContent($postsInfo[$i]['content'] ?? '');
        $post->setAuthorId($postsInfo[$i]['author_id']);
        $post->setImagePath($postsInfo[$i]['image_path'] ?? '');
        $postsList[$i] = $post;
      }

      return $postsList;
    } catch (Exception $e) {
      throw new Exception("Failed to get posts by title: " . $e->getMessage());
    }
  }
}

<?php

class PostAllRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function all(): array
  {
    $posts = $this->postService->getPosts();

    return $posts;
  }
}

// Path: api/v1/post/all.php

require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../models/Post.php";
require_once __DIR__ . "/../../services/PostService.php";

$conn = connectDatabase();
$postService = new PostService($conn);
$postAllRoutes = new PostAllRoutes($postService);

<?php

require_once __DIR__ . "/../../services/ImageService.php";
require_once __DIR__ . "/../../models/Post.php";
class PostCreateRoutes
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function create(): void
  {
    $postTitle = $_POST['title'] ?? '';
    $postContent = $_POST['content'] ?? '';
    $postDescription = $_POST['description'] ?? '';
    $postAuthorId = $_POST['author_id'] ?? 1;
    $postImage = $_FILES['image'] ?? '';

    $savedImagePath = '';

    if ($postImage != '') {
      $publicPath = __DIR__ . "/../../public/";
      $savedImagePath = ImageService::uploadImage($postImage, $publicPath);
      $rootPath = realpath($_SERVER['DOCUMENT_ROOT']) . "\\deforestation\\";
      $savedImagePath = str_replace($rootPath, '', $savedImagePath);
    }

    $post = new Post();
    $post->setTitle($postTitle);
    $post->setContent($postContent);
    $post->setDescription($postDescription);
    $post->setAuthorId($postAuthorId);
    $post->setImagePath($savedImagePath);

    $savedPost = $this->postService->createPost($post);

    echo json_encode($savedPost);
  }
}

// Path: api/v1/post/create.php

require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../services/PostService.php";

$conn = connectDatabase();
$postService = new PostService($conn);
$postCreateRoutes = new PostCreateRoutes($postService);

$postCreateRoutes->create();

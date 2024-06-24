<?php

class PostByTitleRoute
{
  private PostService $postService;

  public function __construct(PostService $postService)
  {
    $this->postService = $postService;
  }

  public function byTitle(string $title): array
  {
    $response = $this->postService->getPostsByTitle($title);

    $posts = [];

    foreach ($response as $post) {
      $post = new Post();
      $post->setId($post['id']);
      $post->setTitle($post['title']);
      $post->setContent($post['content']);
      $post->setAuthorId($post['author_id']);
      $post->setDescription($post['description']);
      $posts[] = $post;
    }

    return $posts;
  }
}

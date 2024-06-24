<?php

class CommentCreateRoutes
{
  private CommentService $commentService;

  public function __construct(CommentService $commentService)
  {
    $this->commentService = $commentService;
  }

  public function create(Comment $comment): Comment
  {
    $comment = $this->commentService->createComment($comment);

    return $comment;
  }
}

// Path: api/v1/comment/create.php

require_once __DIR__ . "/../../env.php";
require_once __DIR__ . "/../../shared/database/database.php";
require_once __DIR__ . "/../../models/Comment.php";
require_once __DIR__ . "/../../services/CommentService.php";

$commentCreateRoutes = new CommentCreateRoutes(
  new CommentService(
    connectDatabase()
  )
);

<?php
include_once "../components/Navbar.php";
include_once "../components/Footer.php";
include_once "../components/AuthModal.php";
include_once "../components/Post/PostBody.php";
include_once "../components/Comments/Comment.php";
include_once "../components/Comments/CommentForm.php";
include_once __DIR__ . "/../../api/models/Comment.php";
include_once __DIR__ . "/../../api/models/Post.php";
include_once __DIR__ . "/../../api/v1/post/id.php";


$id = $_GET["id"] ?? null;

if (!isset($id)) {
    header('location:./');
}

$post = $postService->getPost($id);


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de Post</title>
	<link rel="icon" type="image/x-icon" href="static/mawizafavicon.jpg" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
    <?= Navbar() ?>
    <div class="container mt-5">
        <div class="row">
            <?= PostBody($post->getTitle(), $post->getContent(), $post->getImagePath()) ?>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title">Comentários</h5>
        <div id="comments">
            <div class="media mb-3">
                <?= Comment() ?>
            </div>
            <?= CommentForm() ?>
        </div>
    </div>
    </div>
    </div>
    <?= AuthModal() ?>
    <?= Footer() ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="module" src="../constants/index.js"></script>
<script type="module" src="../constants/lang.js"></script>
<script type="module" src="../constants/en.js"></script>
<script type="module" src="../constants/es.js"></script>
<script type="module" src="../constants/pt.js"></script>
<script type="module" src="../utils/Event.js"></script>
<script type="module" src="../utils/LocalStorage.js"></script>
<script type="module" src="../utils/Language.js"></script>
<script type="module" src="js/page.js"></script>
<script type="module" src="js/post.js"></script>

</html>
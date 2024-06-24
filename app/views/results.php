<?php
include_once "../components/Navbar.php";
include_once "../components/Footer.php";
include_once "../components/Hero.php";
include_once "../components/Post/PostCard.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mawiza</title>
	<link rel="icon" type="image/x-icon" href="static/mawizafavicon.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css" />
</head>

<body>
    <?= Navbar() ?>
    <?= Hero() ?>
    <div class="mt-5 container px-5">
        <div class="">
            <h2>Últimas Postagens</h2>
            <div class="">
                <?php
                include_once __DIR__ . "/../../api/v1/post/all.php";

                $posts = $postAllRoutes->all();

                for ($i = 0; $i < count($posts); $i++) {
                    $post = $posts[$i];

                    echo PostCard($post->getId(), $post->getTitle(), $post->getDescription(), $post->getImagePath());
                } ?>
            </div>
        </div>
    </div>
    <?= Footer() ?>
</body>
<?php include_once "./../utils/AddScripts.php"; ?>
<script type="module" src="js/home.js"></script>

</html>
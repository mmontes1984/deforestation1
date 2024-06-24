<?php
include_once "../components/Navbar.php";
include_once "../components/Footer.php";
include_once "../components/Hero.php";
include_once "../components/AuthModal.php";
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
    <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
    <?= Navbar() ?>
    <div class="container mt-5 px-5" style='color: #053525;'>
        <section id="about-authors" class="mb-5">
            <h2 id="authors-header">Sobre os Autores</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Enzo Firmino Campanari</h5>
                    <p>ADS - Fatec Bragança Paulista.</p>
                    <a href="https://github.com/FIRMINOenzo" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Pedro Leme Cavallaro</h5>
                    <p>ADS - Fatec Bragança Paulista.</p>
                    <a href="https://github.com/PedroCavallaro" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Pedro Henrique Alves Mossini</h5>
                    <p>ADS - Fatec Bragança Paulista.</p>
                    <a href="#">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div><div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Marco Andres Montes Valdebenito</h5>
                    <p>DUOC UC - Ingenieria en Informatica.</p>
                    <a href="https://github.com/mmontes1984" target="_blank">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
				<div class="col-md-4 text-center">
                    <i class="fab fa-github fa-5x mb-3"></i>
                    <h5>Jaime Luna Alarcon</h5>
                    <p>DUOC UC - Ingenieria en Informatica.</p>
                    <a href="#">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                </div>
            </div>
        </section>
    </div>
</body>
<?php include_once "./../utils/AddScripts.php"; ?>
<script type="module" src="js/authors.js"></script>

</html>
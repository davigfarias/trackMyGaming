<?php

$pdo = new PDO('mysql:host=localhost;dbname=personal_projects', 'root','');
require_once "../trackmyGaming/includes/queries/track.gallery.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../includes/css/home.style.css">
    <title>Track My Gaming! &#153</title>
</head>

<style>
    img{
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
</style>

<body>
    <main class="container text-center">
        <section class="text-center my-3">
            <h1>Track My Gaming! &#153</h1>
        </section>
        <section>
            <?php require_once '../trackmyGaming/includes/components/track.alphabet.php'?>
        </section>

        <section>
    <div class="row row-cols-4 gy-4 my-4" id="resultados">
        <?php foreach ($results as $row): ?>
            <div class="col""> 
                <div class="card">
                    <div class="card-body">
                        <img src="includes/img/<?=$row['img']?>" width="55%">
                        <h5 class="my-2"><?= $row['title'] ?></h6>
                        <h6 class="fw-light"><?= $row['publisher'] ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
    </main>
</body>

</html>
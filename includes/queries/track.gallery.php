<?php

$letter = isset($_GET['letter']) ? $_GET['letter'] : ''; // Valor padrão se não houver letra

$queryGallery = $pdo->prepare("SELECT * FROM personal_projects.`trackmygaming.nes_usa` WHERE title LIKE :letter");
$queryGallery->execute([
    ':letter' => $letter . '%' // Adiciona '%' para buscar títulos que começam com a letra
]);
$results = $queryGallery->fetchall(PDO::FETCH_ASSOC);
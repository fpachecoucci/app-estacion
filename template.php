<?php
function renderView($viewName,$data = []) {
    extract($data);
    include_once __DIR__ . '/views/layout/header.php';
    $viewPath = __DIR__ . "/views/{$viewName}.php";
    if (file_exists($viewPath)) {
        include_once $viewPath;
    } else {
        echo "<h2>Error 404: Vista no encontrada</h2>";
    }
    include_once __DIR__ . '/views/layout/footer.php';
}

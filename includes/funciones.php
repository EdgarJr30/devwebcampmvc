<?php

function debuguear($variable): string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}

function pagina_actual($path): bool {
    return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

//Revisar si el usuario esta autenticado
function is_auth(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

//Revisar si un usuario es administrador
function is_admin(): bool {
    if (!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}
function aos_animation(): void {
    $efectos = ['fade-up', 'fade-down', 'fade-left', 'fade-right', 'flip-left', 'flip-right', 'zom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];
    $efecto = array_rand($efectos, 1);
    echo ' data-aos="' . $efectos[$efecto] . '" ';
}

<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('src');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.html');

$package_data = json_decode(file_get_contents('src/datasource/package.json'));
$package_data->bayi = number_format($package_data->bayi->price, 0, ',', '.');
$package_data->pelajar = number_format($package_data->pelajar->price, 0, ',', '.');
$package_data->personal = number_format($package_data->personal->price, 0, ',', '.');
$package_data->bisnis = number_format($package_data->bisnis->price, 0, ',', '.');

$php_modules = json_decode(file_get_contents('src/datasource/php_modules.json'));

echo $template->render(['package' => $package_data, 'php_modules' => $php_modules]);

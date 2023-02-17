<?php

$router = new \Bramus\Router\Router();

$router->get('/', function() {
  get_template_part('home');
});

$router->get('/docs', function() {
  get_template_part('docs');
});

$router->set404(function() {
  header('HTTP/1.1 404 Not Found');
  get_template_part('404');
});

$router->run();
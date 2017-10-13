<?php
require_once('modules/routing.php');
$uri = $_SERVER['REQUEST_URI'];

$route = new Route;
$checkRoute = $route->checkRoute($uri);
if (!empty($checkRoute)) {
  $content = $route->getController($checkRoute['controller'], $checkRoute['fun']);
} else{
  echo "Route Duplicate";
}
?>

<?php
/**
 *
 */
class Route
{
  public static function getRoutePath($uri)
  {
    return strtok($uri, '?');
  }

  public function checkRoute($url)
  {
    $routePath = $this->getRoutePath($url);
    require_once('routes.php');
    $routeArray = array_filter($routes, function($route) use($routePath){
      return $route['uri'] == $routePath;
    });

    if (!empty($routeArray)) {
      if (count($routeArray) == 1) {
        return $routeArray[key($routeArray)];
      } else{
        return [];
      }
    } else{
      return ['uri'=>'404', 'method'=>'GET','controller'=>'Controller', 'fun'=>'error404'];
    }
  }

  public function getController($controller, $function)
  {
    require_once('controllers/'.$controller.'.php');
    $objController = new $controller;
    return $objController->$function();
  }

}


?>

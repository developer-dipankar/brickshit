<?php
require_once('modules/corefunctions.php');
require_once('modules/db.php');
/**
 * Main Controller
 */
class Controller
{
  public function error404()
  {
    view('views/404.php');
  }

}



?>

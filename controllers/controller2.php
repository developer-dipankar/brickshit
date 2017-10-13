<?php
require_once('controllers/controller.php');
/**
 * Controller2
 */
class Controller2 extends Controller
{

  public function error404()
  {
    echo 404;
  }

  public function index()
  {
    echo 420;
    $db = new DB;
    $result = $db->getData('select * from employee where 1');
    view('views/index.php',array('result' =>$result));
  }
}



?>

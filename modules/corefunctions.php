<?php

function view($viewFile,array $values = array())
{
  foreach ($values as $key => $value) {
    ${$key} = $value;
  }
  require_once($viewFile);
}

function project(){
  return [
    'name'=>'Custom MVC',
    'Author'=>'Dipankar Naskar'
  ];
}

 ?>

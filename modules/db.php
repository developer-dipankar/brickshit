<?php
/**
 * CRUD Operations
 * All DB Operations
 */
class DB
{
  public function connection(){
    return mysqli_connect('localhost','root','','test');
  }
  public function query($query)
  {
    return $data = mysqli_query($this->connection(), $query);
  }
  public function getData($query)
  {
    return $data = mysqli_fetch_all($this->query($query),MYSQLI_ASSOC);
  }
  public function firstData($query)
  {
    return $data = mysqli_fetch_assoc($this->query($query));
  }
  public function countRow($query)
  {
    return $data = mysqli_num_rows($this->query($query));
  }
}

?>

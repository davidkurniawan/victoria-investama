<?php
define('DB_SERVER','localhost');
define('DB_USER','admvicto_admin');
define('DB_PASS' ,'project2016');
define('DB_NAME', 'admvicto_web');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }

 public function select($table)
 {
  $res=mysql_query("SELECT * FROM $table");
  return $res;
 }
 public function select_where($table,$field,$condition)
 {
  $res=mysql_query("SELECT * FROM $table where $field ='$condition'");
  return $res;
 }
 public function delete($table,$id)
 {
  $res = mysql_query("DELETE FROM $table WHERE user_id=".$id);
  return $res;
 }

 public function update($table,$id,$fname,$lname,$city)
 {
  $res = mysql_query("UPDATE $table SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=".$id);
  return $res;
 }
}

?>

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
 public function select_where_order($table,$field,$condition,$order,$sort)
 {
  $res=mysql_query("SELECT * FROM $table where $field ='$condition' ORDER BY  $order $sort ");
  return $res;
 }
 public function select_distinct($table,$field)
 {
  $res=mysql_query("SELECT DISTINCT $field FROM $table");
  return $res;
 }

 public function insert($table,$value)
 {
   $res=mysql_query("Insert into $table values($value)");
   return $res;
 }
public function update($table,$value,$id)
{
  $res=mysql_query("update $table SET $value Where id=$id");
  return $res;
}
 public function delete($table,$id)
 {
  $res = mysql_query("DELETE FROM $table WHERE id=".$id);
  return $res;
 }
public function ChangeLanguage($table,$lang)
{
 $res=mysql_query("Update $table Set DefaultLang='$lang' WHERE id=1");
 return $res;
}
 public function save_page($table, $title_id, $title_en, $text_id, $text_en,$url)
 {
   $res=mysql_query("insert into $table values('','$title_en','$title_id','$text_id','$text_en','$url','','','','')");
   return $res;
 }
 public function page_name($MenuNameID,$MenuNameEN,$Parent,$url)
 {
   $res=mysql_query("insert into menu values('','$MenuNameEN','$MenuNameID','2','$Parent','$url','','')");
   return $res;
 }

 public function update_content($table,$id,$title_en,$title_id,$bodytext_id,$bodytext_en,$url)
 {
   $res=mysql_query("Update $table Set Title_en='$title_en',Title_id='$title_id',BodyText_id='$bodytext_id',BodyText_en='$bodytext_en',Url='$url' WHERE id=$id");
   return $res;
 }

 public function update_page_name($menu_id,$MenuNameID,$MenuNameEN)
 {
   $res=mysql_query("update menu SET MenuName='$MenuNameEN', MenuNameID='$MenuNameID' Where id=$menu_id");
   return $res;
 }

 public function update_category($menu_id,$parent)
 {
   $res=mysql_query("update menu SET Parent='$parent' Where id=$menu_id");
    return $res;
 }
}

?>

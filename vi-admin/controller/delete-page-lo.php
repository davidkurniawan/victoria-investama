<?
include "../lib/processor.php";
$con = new DB_con();
$page_id=$_REQUEST['page_id'];
$menu_id=$_REQUEST['menu_id'];
$delete_page=$con->delete('content',$page_id);
$dalete_menu=$con->delete('menu',$menu_id);

if($delete_page)
{
  $msg="Sukses, Halaman sudah dihapus";
    header("location:". $_SERVER['HTTP_REFERER']."&msg=".$msg);
}
?>

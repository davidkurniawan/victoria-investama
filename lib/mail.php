<?php
session_start();
$name=$_REQUEST['name'];
$subject=$_REQUEST['subject'];
$from=$_REQUEST['email'];
$to=$_REQUEST['to'];
$pesan=$_REQUEST['message'];

        $message = '<html><body>';
        $message .= '<table rules="all" style="margin-bottom:20px;border:solid 1px #f1f1f1;color:#999;background:#f1f1f1" cellpadding="10" width=100%>';
        $message .= "</table>";
        $message .= "<b>Berikut ini pesan dari ".$name."</b>";
        $message .= "<p><i>".$pesan."</i></p>";
        $message .= "<b>Contact :</b>";
        $message .= '<br><center><table width=50% rules="all" style="border:solid 1px #611017;color:#000" cellpadding="10">';
        $message .= "<tr style='border:solid 1px #611017;color:#000'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
        $message .= "<tr style='border:solid 1px #611017;color:#000'><td><strong>Email:</strong> </td><td>" . $from . "</td></tr>";

        $message .= "</table></center>";

        $message .= "</body></html>";

        $headers = 'From: Website Contact Us <contact@victoriainvestama.co.id>' . "\r\n" . 'Reply-To:'.$from.'' . "\r\n";
        $headers .= "Bcc:amier.affandi@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        mail($to, $subject, $message, $headers);

        include "processor.php";

        $con = new DB_con();

        $name=$_REQUEST['name'];
        $subject=$_REQUEST['subject'];
        $from=$_REQUEST['email'];
        $message=$_REQUEST['message'];

        $query="insert into MailBox values(
        '',
        '$name',
        '$from',
        '$subject',
        '$message'

        )";

          $save_contact=mysql_query($query);
          if($save_contact)
          {
            $_SESSION['msg']="Pesan anda sudah terkirim";
            header("location:/connect/contact-us");
          }



 ?>

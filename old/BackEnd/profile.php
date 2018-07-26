<?php
    session_start();

    $username = $_SESSION["Username"];
    $password = $_SESSION["Password"];

    if($username == "" || $password == ""){
        header("Location: ../index.php");
    }else{
        include_once '../Conf.php';
        include_once '../component/User/class/User.class.php';
        include_once '../component/User/class/UserAdapter.class.php';

        $adapter = new UserAdapter();
        $data = $adapter->SearchDataForSession($username, $password, $mysqli);

        $mysqli->close();
    }
?>
<div class="content-back">
        <div class='content-title'>
                <?php echo $data->GetNama() ?>
                <span><a class='edit-info' id="<?php echo $data->GetIdUser() ?>" href='#'>Edit Information</a></span>
        </div>

        <div class='profile-title'>
                Personal Information
                <hr align='left'/>
        </div>
        <div class='profile-data'>
                <dt>Sex: </dt>
                <dd><?php echo $data->GetJenisKelamin() ?></dd>

                <dt>Address: </dt>
                <dd><?php echo $data->GetAlamat() ?></dd>

                <dt>Phone: </dt>
                <dd><?php echo $data->GetTelepon() ?></dd>

                <dt>Email: </dt>
                <dd><?php echo $data->GetEmail() ?></dd>
        </div>
        <div style='clear: both'></div>

        <div class='profile-title'>
                Login Information
                <hr align='left'/>
        </div>
        <div class='profile-data'>
                <dt>Username: </dt>
                <dd><?php echo $data->GetUsername() ?></dd>

                <dt>Password: </dt>
                <dd><i>not shown</i></dd>
        </div>
        <div style='clear: both'></div>
 </div>
<script type="text/javascript">
        var dialog;

        function RefreshTableBody(){
            dialog = new Boxy("<div align='center'><img src='" + "../component/User/img/loading.gif' alt='loading' /></div>",{
            title: "Refresh Table",
            closeable:false,
            modal: true
            });
            $.ajax({
                url : "../BackEnd/profile.php",
                type : "POST",
                success : function(result){
                            $("#content").empty().append(result);
                            dialog.hideAndUnload();
                        }
            });
      }
  
	$(".edit-info").click(function(){
		dialog = new Boxy("<div align='center'><img src='" + "../component/User/img/loading.gif' alt='loading' /></div>",{
			title: "Edit Data",
			closeable:false,
			modal: true,
			show: true,
                        afterHide: RefreshTableBody
		});

                $.ajax({
                    url: "../component/User/ViewUser.php",
                    type: "POST",
                    data: "action=UPDATE&ID=" + $(this).attr("id"),
                    success: function(result){
                            dialog.setContent(result);

                    }
                });
	});
</script>

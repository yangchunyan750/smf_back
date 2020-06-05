<?php
	 require_once "sqlTool.class.php";
	 $mysqli=new SqlTool();
	 if(isset($_POST['userName'])){
	  $userName=$_POST['userName'];
	 }
	 if(isset($_POST['password'])){
	  $password=md5($_POST["password"]);
	 }
	 $sql="select * from gguser where UserID='".$userName."'and PasswordMD5 ='".$password."'";
	 $res=$mysqli->execute_dql($sql);
	 if($res->num_rows>0){
		 header('Location:index.html');
	 }
	 $res->free();
?>
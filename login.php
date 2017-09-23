
<?php	
	if(isset($_POST["login"])){
		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");
		$sql="SELECT * FROM tbl_user WHERE username='". $_POST["username"] ."' and password='". $_POST["password"] ."'";
			$result=$con->query($sql); 
			$rows=$result->rowCount(); 
			if($rows>=1){
				header("location: profile.php");
			}else{
				echo "PLEASE TRY AGAIN";
			}
	}
?>
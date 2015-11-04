<?php
	if(empty($_POST["picture"]) || empty($_POST["color1"]) || empty($_POST["color2"]) || empty($_POST["height"])){
				echo "It does not contain the necessary information for all.";
				exit();
	}

	try{
		$pdo= new PDO("mysql:host=localhost; dbname=nemo","root","root",
			array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"
		));
	}catch(PDOException $e){
		die($e->getMessage());
	}

	$sql="insert into children(picture,color1,color2,height) values('".$_POST["picture"]."','".$_POST["color1"]."','".$_POST["color2"]."',".$_POST["height"].")";
	$result=$pdo->query($sql);
	if($result){
		echo "Data insertion success.";
	}else{
		echo "Data insertion failure.";	
	}
?>
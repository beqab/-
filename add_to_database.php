<?php


//echo $_POST["books"][0]["book"];

if(isset($_POST["town"],$_POST["address"],$_POST["contact_number"],$_POST["additional_info"],$_POST["total_price"],$_POST["books"])){

	$town=htmlspecialchars($_POST["town"],ENT_QUOTES,'UTF-8');
	$address=htmlspecialchars($_POST["address"],ENT_QUOTES,'UTF-8');
	$contact_number=htmlspecialchars($_POST["contact_number"],ENT_QUOTES,'UTF-8');
	$additional_info=htmlspecialchars($_POST["additional_info"],ENT_QUOTES,'UTF-8');
	$total_price=htmlspecialchars($_POST["total_price"],ENT_QUOTES,'UTF-8');

	$book_count==count($_POST["books"]);
	$books=$_POST["books"];


	$con = mysqli_connect("localhost","root","","ordered_books");
	$con->set_charset("utf8");


	if($con->query("insert into `orders` (town,address,contact_number,contact_info,price) values ('".$town."','".$address."','".$contact_number."','".$additional_info."','".$total_price."')")==true){
		echo $town."\n";
		$insert_id=$con->insert_id;

		#echo "insert into `ordered_books` (id,book,class,price) values (".$con->insert_id.",'test_book',".7."".20.")";

		$insert_values="insert into `ordered_books` (id,book,class,price) values ";

		foreach($books as $row){
			$insert_values=$insert_values."(".$insert_id.",'".htmlspecialchars($row["book"],ENT_QUOTES,"UTF-8")."',".$row['class'].','.$row['price'].'),';
		}
		if($con->query(substr($insert_values,0,-1))==true){
			echo "hello world";
		}else{
			echo "Error: " . $sql . "<br>" . $con->error;
		}

	}else{
		echo "Error: " . $sql . "<br>" . $con->error;
	}

}else{
	echo "incorrect parameters";
}


?>
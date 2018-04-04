<?php

function parse_books($ordered_books,$book_count){
	for($i=0;$i<$book_count;$i++){
		//echo $ordered_books[$i]["book_id"];
		//if($ordered_books[$i]["book_id"]==="en1")echo "jasdklasjdklasjdklasjdks";
if($ordered_books[$i]["book_id"]==="en1"){$ordered_books[$i]["price"]="7";$ordered_books[$i]["book_id"]="ტესტები ინგლისურ ენაში";}
if($ordered_books[$i]["book_id"]==="en2"){$ordered_books[$i]["price"]="10";$ordered_books[$i]["book_id"]="ტესტები ინგლისურ ენაში 2";}

if($ordered_books[$i]["book_id"]==="ge1"){$ordered_books[$i]["price"]="7";$ordered_books[$i]["book_id"]="ტესტები ქართულ ენაში";}
if($ordered_books[$i]["book_id"]==="ge2"){$ordered_books[$i]["price"]="10";$ordered_books[$i]["book_id"]="ტესტები ქართულ ენაში 2";}
if($ordered_books[$i]["book_id"]==="ge3"){$ordered_books[$i]["price"]="20";$ordered_books[$i]["book_id"]="მასიური ტესტების კრებული ქართულ ენასა და ლიტერატურაში";}

if($ordered_books[$i]["book_id"]==="mth1"){$ordered_books[$i]["price"]="7";$ordered_books[$i]["book_id"]="ტესტები მათემატიკაში";}
if($ordered_books[$i]["book_id"]==="mth2"){$ordered_books[$i]["price"]="10";$ordered_books[$i]["book_id"]="ტესტები მათემატიკაში 2";}
if($ordered_books[$i]["book_id"]==="mth3"){$ordered_books[$i]["price"]="20";$ordered_books[$i]["book_id"]="600 ამოცანა 600 ამოხსნა";}
	}
	
	return $ordered_books;
}


if(isset($_POST["town"],$_POST["address"],$_POST["contact_number"],$_POST["additional_info"],$_POST["total_price"],$_POST["books"])){

	$town=htmlspecialchars($_POST["town"],ENT_QUOTES,'UTF-8');
	$address=htmlspecialchars($_POST["address"],ENT_QUOTES,'UTF-8');
	$contact_number=htmlspecialchars($_POST["contact_number"],ENT_QUOTES,'UTF-8');
	$additional_info=htmlspecialchars($_POST["additional_info"],ENT_QUOTES,'UTF-8');
	$total_price=htmlspecialchars($_POST["total_price"],ENT_QUOTES,'UTF-8');


	$books=json_decode($_POST["books"],true);
	$book_count=count($books);

	$books=parse_books($books,$book_count);


	$con = mysqli_connect("localhost","root","","ordered_books");
	$con->set_charset("utf8");


	if($con->query("insert into `orders` (town,address,contact_number,contact_info,price) values ('".$town."','".$address."','".$contact_number."','".$additional_info."','".$total_price."')")==true){

		$insert_id=$con->insert_id;

		$insert_values="insert into `ordered_books` (id,book,class,price) values ";
		for ($i=0;$i<$book_count;$i++){
			$cur_row=$books[$i];

			$insert_values=$insert_values."(".$insert_id.",'".htmlspecialchars($cur_row["book_id"],ENT_QUOTES,"UTF-8")."',".intval($cur_row['class']).','.intval($cur_row['price']).'),';
		}
		if($con->query(substr($insert_values,0,-1))==true){
			echo "Success";
		}else{
			echo "Error";
		}

	}else{
		echo "Error";
	}

}else{
	echo "Error";
}


?>
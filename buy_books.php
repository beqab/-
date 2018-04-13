<?php

include "connection.php";


function parse_books($ordered_books,$book_count){
	$books=[
		array("book_id" => "en1", "book_price" => "7","book_name"=>"ტესტები ინგლისურ ენაში"),
		array("book_id" => "en2", "book_price" => "10","book_name"=>"ტესტები ინგლისურ ენაში ფინალისტებისთვის"),

		array("book_id" => "ge1", "book_price" => "7","book_name"=>"ტესტები ქართულ ენაში"),
		array("book_id" => "ge2", "book_price" => "10","book_name"=>"ტესტები ქართულ ენაში ფინალისტებისთვის"),
		array("book_id" => "ge3", "book_price" => "20","book_name"=>"მასიური ტესტების კრებული ქართულ ენასა და ლიტერატურაში"),

		array("book_id" => "mth1", "book_price" => "7","book_name"=>"ტესტები მათემატიკაში"),
		array("book_id" => "mth2", "book_price" => "10","book_name"=>"ტესტები მათემატიკაში ფინალისტებისთვის"),
		array("book_id" => "mth3", "book_price" => "20","book_name"=>"600 ამოცანა 600 ამოხსნა"),
	];


	$cur_request_books="";
	$cur_request_prices="";
	$sum_price=0;

	for($i=0;$i<$book_count;$i++){
		for($j=0;$j<count($books);$j++){
			if($books[$j]["book_id"]==$ordered_books[$i]["book_id"]){
				$ordered_books[$i]["price"]=$books[$j]["book_price"];
				$ordered_books[$i]["book_id"]=$books[$j]["book_name"];
			}
		}

$cur_request_books=$cur_request_books.$ordered_books[$i]["book_id"].": ".$ordered_books[$i]["class"]." კლასი.";
$cur_request_prices=$cur_request_prices.$ordered_books[$i]["price"]." ";
$sum_price=$sum_price+intval($ordered_books[$i]["price"]);
	}

	return array($cur_request_books,$cur_request_prices,$sum_price);
}


if(isset($_POST["town"],$_POST["address"],$_POST["contact_number"],$_POST["additional_info"],$_POST["books"])){

	$town=htmlspecialchars($_POST["town"],ENT_QUOTES,'UTF-8');
	$address=htmlspecialchars($_POST["address"],ENT_QUOTES,'UTF-8');
	$contact_number=intval($_POST["contact_number"]);
	$additional_info=htmlspecialchars($_POST["additional_info"],ENT_QUOTES,'UTF-8');


	$books=json_decode($_POST["books"],true);
	$book_count=count($books);

	$book_info=parse_books($books,$book_count);

	if($town=="თბილისი")$book_info[2]=$book_info[2]+3;
	else $book_info[2]=$book_info[2]+6;


	if($con->query("insert into `orders` (town,address,contact_number,contact_info,price,books,book_prices) values ('".$town."','".$address."','".$contact_number."','".$additional_info."','".$book_info[2]."','".$book_info[0]."','".$book_info[1]."')")==true){
		echo "Success";
	}else{
		echo "Error";
	}

}else{
	echo "Error";
}

?>
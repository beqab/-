<!DOCTYPE html>
<html>
<head>
	<title>bo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: red">

	<div class="buy_book_page">
		<div onclick="close_books()" class="close_page book hidden_somthing">
			 <img class="close_page_img" src="images/delet_poduct.png">
		</div>
		 <div class="container_book">
		 	 <div class="block_book">
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book1.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="en1">7 </span> ლარი</span>
		 	 	
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>

		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 <div class="block_book">
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book12.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="en2">10 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 	 <div class="block_book viblenone">
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book1.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price">13 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>

	     </div>
	     <hr>
	      <div class="container_book">
		 	 <div class="block_book">
		 	 	<?php
					if (new DateTime() <= new DateTime("2018-05-20 00:00:00")) {
						?>
						<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 20 მაისიდან
			 	 		</div>
			 	 		<?php
					}
				?>
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book3.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="ge1">7 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 <div class="block_book">
		 	 	<?php
					if (new DateTime() <= new DateTime("2018-05-20 00:00:00")) {
						?>
						<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 20 მაისიდან
			 	 		</div>
			 	 		<?php
					}
				?>
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book4.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="ge2">10 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 	 <div class="block_book">
		 	 	 	<?php
					if (new DateTime() <= new DateTime("2018-05-14 00:00:00")) {
						?>
						<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
			 	 		<?php
					}
				?>
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book5.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="ge3">20 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>

	     </div>
	      
	  
        
    
	        <hr>
	         <div class="container_book">
		 	 <div class="block_book">
		 	 	<?php
					if (new DateTime() <= new DateTime("2018-05-14 00:00:00")) {
						?>
						<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
			 	 		<?php
					}
				?>
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book6.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="mth1">7 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 <div class="block_book">
		 	 	<?php
					if (new DateTime() <= new DateTime("2018-05-14 00:00:00")) {
						?>
						<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
			 	 		<?php
					}
				?>
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book7.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="mth2">10 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>
		 	 	 <div class="block_book">
		 	 	<div class="img_book"> <img class="full_img_book" src="images/book10.png"></div>
		 	 	<div class="book_info">
		 	 		<span><span class="book_price" id="mth3">20 </span> ლარი</span>
		 	 		<select>
		 	 			<option class="hidden_somthing" selected="selected">კლასი</option>
		 	 			<option>2 კლასი</option>
		 	 			<option>3 კლასი</option>
		 	 			<option>4 კლასი</option>
		 	 			<option>5 კლასი</option>
		 	 			<option>6 კლასი</option>
		 	 			<option>7 კლასი</option>
		 	 			<option>8 კლასი</option>
		 	 			<option>9 კლასი</option>
		 	 		</select>
		 	 		<button>დამატება</button>
		 	 </div>
		 	</div>

	     </div>
	      
	        <hr>
  <div class="kalata_auther">
  		<div class="your_order">თქვენი შეკვეთა</div>
  	<div class="order_sum_price">
  		ჯამი: <span class="all_pice" id="book_price">x</span> ლარი
  	</div>
  	<button class="book_order_btn">
  		შეკვეთა
  	</button>
  <div class="kalata">
  	<div class="kalata_inner">
  
  <!-- 	 <div class="product">
  	 	 <img class="book" src="images/book1.png"> <div class="rights"> <span>2 კლასი</span> <img class="delet_poduct" src="images/delet_poduct.png">
  	 	 </div>
  	 </div> -->
  </div>
</div>
	 </div>
	</div>


	<div class="start_by_book">
		start
	</div>
	<div class="enter_addres book hidden_somthing">
		<button onclick="warmatebiTgaigzavna()" class="oreder_in_adddres">შეკვეთა</button>
		<div class="cancel_adders book">
			<img src="images/delet_poduct.png">
		</div>
		<form>
			<div>
		<select id="town">
			<option class="hidden_somthing" selected="selected">ქალაქი</option> 
			<!-- <option>თბილისი</option> -->
			<option>თბილისი</option>
			<option>ქუთაისი</option>
			<option>ბათუმი</option>
			<option>რუსთავი</option>
	</select>
		<span style="display: none;" class="shipping" id="shipping"></span>
	</div>
   <input type="text" name="addres" placeholder="მისამართი" id="address">
   <input type="number" name="addres" placeholder="საკონტაქტო ნომერი" id="contact_number">
   <textarea id="additional_info" style="    max-width: 400px !important;
    height: 100px !important;
    padding: 4px 8px !important;
    font-size: 18px !important;" class="ttextt" placeholder="დატოვე კომენტარი"></textarea>
    <span id="price_total"></span>
</form>
	</div>

	<div class="complate_ordder bbtest hidden_somthing">
		 შეკვეთა წარმატებით განხორციელდა
	</div>



<script type="text/javascript">
	var city_price=0;
	$('#town').change(function(){
		  if($(this).val() != 'ქალაქი'){
             $('.shipping').css('display','inline')
		  }
	})

  function warmatebiTgaigzavna(){
   		if($("#town").val() =="ქალაქი"){
  			alert("გთხოვთ აირჩიოთ ქალაქი");
  			return;
  		}
  		if($("#address").val()==""){alert("გთხოვთ შეავსოთ მისამართის ველი");return;}

		if($("#contact_number").val().length!=9){alert("ტელეფონის ნომერი 9 ციფრისგან უნდა შედგებოდეს");return;}
		if($("#contact_number").val()[0]!='5'){alert("ტელეფონის ნომერი 5-ით უნდა იწყებოდეს");return;}


		if(ordered_book.length==0){alert("თქვენ არ აგირჩევიათ არცერთი წიგნი");return;}

  		$.post('add_to_database.php', {town: $("#town").val(),address: $("#address").val(),contact_number: $("#contact_number").val(), additional_info: $("#additional_info").val(), books: JSON.stringify(ordered_book),}, function(data){
  			if(data=="Success"){
  				setTimeout(function(){ 
	          	$('.bbtest').addClass('hidden_somthing') }, 2000);
	            $('.hidden_somthing').removeClass('hidden_somthing')
	            $('.enter_addres').addClass('hidden_somthing')
	            $(".kalata_inner").html("");
	            ordered_book=[];
	            all_price=0;
	            $("#book_price").html("0");
	            $('.kalata_auther').css('display',"none");

  			}else{
  				alert("დაფიქსირდა შეცდომა");
  			}
		});

  }

	var topStart =$('.start_by_book').position().top;
var leftStart =$('.start_by_book').position().left;
 function close_books(){
         $('.buy_book_page').css({'top':topStart,
                              'left':leftStart,
                                 'height':'0%',
                             'width':'0%',});
		   $('.close_page').addClass('hidden_somthing')
		   $('.kalata_auther').css('display','none')
		   $(".enter_addres").addClass("hidden_somthing");
 }
	
		


	$('.cancel_adders').click(function(){
		$('.enter_addres').addClass('hidden_somthing')
	})


$('.book_order_btn').click(function(){
	$('.enter_addres').removeClass('hidden_somthing')
	$("#price_total").html("ჯამი: "+(all_price+city_price)+" ლარი");
})


$('.book_info select').each(function(){
	$(this).blur(function(){

		if($(this).val() != 'კლასი')
		$(this).css('border-color','#707070')
	})
})

  var all_price=0;
	var xx = $();

	var ordered_book=[];

	$('#town').change(function(){
		  if($(this).val() != 'ქალაქი'){
		  	if($("#town").val() =="თბილისი"){$("#shipping").text(" მიტანა 3 ლარი");city_price=3;}
		  	else {$("#shipping").text(" მიტანა 6 ლარი");city_price=6;}

             $('.shipping').css('display','inline');

             $('#price_total').html("ჯამი: "+(city_price+all_price)+" ლარი");
		  }
	})


// console.log(topStart,leftStart)
	$('.buy_book_page').css({'top':topStart,
                              'left':leftStart })
	$('.start_by_book').click(function(){
	   $('.buy_book_page').css({
	   	 'left':0,
	   	 'top':0,
	   	 'width':'100%',
	   	 'height':'unset',
	   	 'min-height':'100%'
	   })
	   $('.close_page').removeClass('hidden_somthing')
	})


$(".block_book").each(function(){

     var atr= $(this).find('.full_img_book').attr('src');
     var selectVal= $(this)

	$(this).find('button').click(function(){
   if(selectVal.find('select').val() != 'კლასი'){

		$('.kalata_auther').css(
			'display',"block"
		)
    var prive = selectVal.find('.book_price').text()
    var item = selectVal.find('.book_price').attr('id')
      all_price =all_price + prive*1
      $('.all_pice').text(all_price)

   xx=`
     <div class="product">
  	 	 <img data-item="`+item +`" class="book" src="`+ atr +`"> <div class="rights"><span '>`+selectVal.find('select').val()+`</span> <img data-price='`+ prive+ `' class="delet_poduct" src="images/delet_poduct.png" book=`+item+` bookClass=`+selectVal.find('select').val()+` >
  	 	 </div>

  	 </div>

   `;
  $('.kalata_inner').append(xx)
  var cur=selectVal.find('select').val();
  var len=0;
  for(var i=0;i<cur.length;i++){
  	if(cur[i]==' '){len=i;break;}
  }
  cur=cur.substring(0,len);
  ordered_book.push({book_id:item,class:parseInt(cur),price:prive});

  $("#price_total").html("ჯამი: "+(city_price+all_price)+" ლარი");
}
else{
selectVal.find('select').css('border-color','red')
}

	})
});



// $('.delet_poduct').each(function(){
	$('.kalata').on('click','img.delet_poduct', function(){
		for(var i=0;i<ordered_book.length;i++){
			if(ordered_book[i]['book_id']==$(this).attr("book")&&ordered_book[i]['class']==$(this).attr("bookClass")){
				ordered_book.splice(i,1);
				break;
			}
		}

		$(this).parent().parent().remove();
		// console.log($(this).attr('data-price')*1, all_price)
		 if(($(this).attr('data-price')*1 - $('.all_pice').text()*1)==0){
            $('.kalata_auther').css("display",'none')
		 }
             
		var newprice =$('.all_pice').text()*1-$(this).attr('data-price')*1
        all_price=newprice
		 $('.all_pice').text(newprice)
		 
		$("#price_total").html("ჯამი: "+(all_price+city_price)+" ლარი");
	})
// })




</script>



</body>
</html>

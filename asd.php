
<br />
<b>Notice</b>:  Undefined index: paidSubjs in <b>C:\xampp\htdocs\platform\user\choosesubj.php</b> on line <b>18</b><br />
<script>console.log( 'paidSubjs: ' );</script><script>console.log( 'marathon: -1' );</script><script>console.log( 'marathon: -1' );</script><script>console.log( 'marathon: -1' );</script><script>console.log( 'pdd: 0' );</script><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../buy_books_page.css">
    <title>აირჩიეთ საგანი</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="shortcut icon" href="../favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../css/styles.css?28">
    <link rel="stylesheet" type="text/css" href="../css/chat.css?4">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=AM_HTMLorMML-full.js"></script>
    <script> $loc="../"; $snd=0; rasaitze=0; shekvecil=0;</script>
    <script src="../js/jquery.geo.typing.js"></script>
    <script src="../js/countUp.min.js"></script>
    <script src="../js/name_spelling.js?1"></script>
    <script src="../js/jquery.crSpline.js"></script>
    <script src="../js/chat.js?2"></script>
    <script src="../js/javascript.js?69"></script>
    <script async type="text/x-mathjax-config">MathJax.Hub.Config({messageStyle: "none"});</script><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M9NVZ4W');</script>
<!-- End Google Tag Manager -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84363936-1', {'userId': '100000' });
  ga('set', 'dimension4', '100000');
  ga('send', 'pageview');
    </script>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '273188689744428',
            xfbml      : true,
            version    : 'v2.8',
            status: true
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
      (function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
      ;r.type="text/javascript";r.async=true
      ;r.src="https://cdn.amplitude.com/libs/amplitude-4.0.0-min.gz.js"
      ;r.onload=function(){if(e.amplitude.runQueuedFunctions){
      e.amplitude.runQueuedFunctions()}else{
      console.log("[Amplitude] Error: could not load SDK")}}
      ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
      ;function s(e,t){e.prototype[t]=function(){
      this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
      var o=function(){this._q=[];return this}
      ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
      ;for(var u=0;u<a.length;u++){s(o,a[u])}n.Identify=o;var c=function(){this._q=[]
      ;return this}
      ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
      ;for(var p=0;p<l.length;p++){s(c,l[p])}n.Revenue=c
      ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","logEventWithTimestamp","logEventWithGroups","setSessionId"]
      ;function v(e){function t(t){e[t]=function(){
      e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
      for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
      e=(!e||e.length===0?"$default_instance":e).toLowerCase()
      ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
      ;e.amplitude=n})(window,document);

      amplitude.getInstance().init("b3809965c103b49a5ac0bc1ff798748f");
      amplitude.setUserId('100000');
      amplitude.getInstance().logEvent('Platforma');
    </script>    <style>
    	h1{
            font-family: BPGBannerCaps;
        }
        #olmpdsmmzdbll{
            background: #43a368;
            background: #c2272f;
        }
    </style>
    <script>
        subj=0;
        ispaid=0;
        clas=3;
        poll=0;
        name='ჯინჯო';
        //name="გურამი";
        name=CrctSpellingName(name);
        kid=100000;

    </script>
</head>
<body  class="chSbjSxlwlBg">
<div id="BdCntnt">


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
		 	 							<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 20 მაისიდან
			 	 		</div>
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
		 	 							<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 20 მაისიდან
			 	 		</div>
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
		 	 	 							<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
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
		 	 							<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
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
		 	 							<div class="weiting_book">
			 	 		წიგნი გაყიდვაში
	                       გამოვა 14 მაისიდან
			 	 		</div>
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
</div> /<!--  main div closes -->


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

  		$.post('buy_books.php', {town: $("#town").val(),address: $("#address").val(),contact_number: $("#contact_number").val(), additional_info: $("#additional_info").val(), books: JSON.stringify(ordered_book),}, function(data){
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


  console.log($('.chSbjSxlwlBg').height());

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
		 if(($(this).attr('data-price')*1 - $('.all_pice').text()*1)==0){
            $('.kalata_auther').css("display",'none')
		 }
             
		var newprice =$('.all_pice').text()*1-$(this).attr('data-price')*1
        all_price=newprice
		 $('.all_pice').text(newprice)
		 
		$("#price_total").html("ჯამი: "+(all_price+city_price)+" ლარი");
	})
// })




</script> <div class="heder_mane_page">
      <div class="left">
           <a href="#"> <img src="../imgs/klogo.png"> </a>
           <span> უნიკალური კოდი: <span class="code">100000</span></span> 
      </div>


     <!--  <div class="midd">
         ბალანსი: <span>40,00</span>₾
      </div> -->
      <div class="right">
          
        გამარჯობა,
     <script type="text/javascript">
        document.write(name);
      </script>
          <div> მე-3 კლასი</div>
      </div>
 </div>
 <div class="link_group bookDownload">
    <div> 
        <div>
           ელექტრონული წიგნი
        </div>
        <a onclick="tstNimushebi()" style='cursor: pointer;'>ჩამოტვირთე </a>
    </div>
</div>

	<!-- <center><h1> ონლაინ პლატფორმა </h1></center> -->
      <!--   <center><button id="olmpdsmmzdbll" onclick="tstNimushebi()">ელექტრონული წიგნების გადმოწერა</button></center><br/><center><button id="olmpdsmmzdbll" class="npsssbtn" style="background:orange" onclick="nps()">შეგვაფასეთ</button></center> -->

 <!--     -->

    <!--<center><h2 style="color: red; text-shadow: #ff8100 0 1px 1px; font-size: 40px"> პლატფორმის სრული ვერსია გაეშვება დღეს, 19:30-ზე </h2></center>-->
	<div>
	<div align="center">
		
		<div class="chsubjSubj" id="chsubjSubj2" onclick="gotosubjpage(2,'enhome.php')">
            <div class="chsubjZdmxr">
                <div class="chsubjddCrcls" id="chsubjddCrcls2">
                    <div class="chsubjSubjImg" id="chsubjSubj2Img"></div>
                </div>
            </div>
            <div class="chsubjSubjTxt" id="chsubjSubj2Txt">ინგლისური</div>
        </div>
        <div class="chsubjSubj" id="chsubjSubj1" onclick="gotosubjpage(1,'home.php')" >
            <div class="chsubjZdmxr">
                <div class="chsubjddCrcls" id="chsubjddCrcls1">
                    <div class="chsubjSubjImg" id="chsubjSubj1Img"></div>
                </div>
            </div>
            <div class="chsubjSubjTxt" id="chsubjSubj1Txt">მათემატიკა</div>
        </div>
        <div class="chsubjSubj" id="chsubjSubj3" onclick="gotosubjpage(3,'qhome.php')">
            <div class="chsubjZdmxr">
                <div class="chsubjddCrcls" id="chsubjddCrcls3">
                    <div class="chsubjSubjImg" id="chsubjSubj3Img"></div>
                </div>
            </div>
            <div class="chsubjSubjTxt" id="chsubjSubj3Txt">ქართული</div>
        </div>


        <div class="chsubjSubj" id="chsubjSubj3" style="vertical-align: text-bottom; max-width: 1000px;">
            
            <img src="../css/img/enBook.png" style="max-width: 250px; margin-right: 10px; float: left;">
            <a class="text">
კინგსის კრებული   ინგლისურში   გამოცემული  II-დან VI კლასის მოსწავლეებისთვის, მოიცავს 150-ზე მეტ ტესტურ სავარჯიშოს, რომელიც დალაგებულია სირთულის მიხედვით. ტესტების რაოდენობრივი განაწილება არის: 20 მარტივი, 40  საშუალო, 90 რთული.   ტესტის თითოეულ დონეს ასევე გააჩნია პროცენტული შეფასება: ყველაზე მარტივი 2%, ხოლო ყველაზე რთული 98%.ეს შედეგი  კვლევით დადგინდა, სადაც მონაწილეობდა ათასობით კინგსელი. კინგსის თითოეულ კრებულს ასევე თან ახლავს განმარტებები, რომელიც მოსწავლეს დაეხმარება კითხვების დაძლევაში. ტესტები  განკუთვნილია  ფინალისტებისთვის და მოსწავლეებს დაეხმარება დამატებითი უნარ-ჩვევების განვითარებაში. კრებული სრულად შეესაბამება სასწავლო პროგრამას, რაც მოსწავლეს ხელს შეუწყობს არამხოლოდ კინგსის ოლიმპიადაში, არამედ სკოლის პროგრამის დაძლევაშიც. წიგნში  მოცემული სავარჯიშოები არის უნიკალური და ის მარტივ ბროშურაში არ მეორდება.  </a>
        <div class="buybook"> 
        <br> გსურს წიგნის შეძენა? <br><br> <div class="quitbtns" onclick="getbook(1)" style="background: white;">კი </div><div class="quitbtns" onclick="getbook(0)" style="background: white;">არა <br> </div></div> </div>       

        <div class="link_group" style="margin-top: 3vw;">
              <div>
                  <div>&nbsp</div>
                  <br>
                  <a onclick="nps()" class="fsd" style="cursor: pointer;"> შეგვაფასე </a>                 
              </div>
        </div>
	</div>
	</div>
</div>
    <script>
     
 

        $( document ).ready(function() {
            if(ispaid!=0){
                blockuser();
            }
            if(clas<=6 && clas>=2 && poll==1){
                mathBookPoll();
            }
            
        });
    function getbook(unda) {
         $.post($loc+"php/getbook.php", { kid: kid, unda: unda }, function (succ) {
                console.log(succ);
                $('.buybook').css('display','none');

            });
    }
   function mathBookPoll(){
            p=0;
            var x='';
            x+='<center><div style="display:inline-block">';
            x+='<div class="NPSsrchvb"><div class="quitbtns" onclick="haveMathBook(1)"> კი </div> <div class="quitbtns" onclick="haveMathBook(0)"> არა </div> </div>';

           /* x+='<div class="NPSsrchvb">'; for(var i=0; i<=10; i++) x+='<div id="NPSchswchn'+i+'" class="NPSchswchn" onclick="npsDfqs('+i+')">'+i+'</div>'; x+='</div>';
            x+='<div class="NPSsrchvbxsn"><a>0 - არასდროს.</a>&nbsp;<a>აუცილებლად - 10</a></div><div style="clear:both"></div>';
            */
            x+='</div></center>';
            $('body').append('<div class="blck"></div><div id="blinfoPoll"><div class="blinfinfoPoll"><p style="font-size:24px"> გაქვს კინგსის მათემატიკის ახალი  ამოცანათა კრებული?</p>'+x+'</div></div>');
            $('.blck').click(function () {
                if(p==0){
                    $('body').css('overflow','auto');
                    $(this).next().remove();
                    $(this).remove();
                }
            });
        }
        function haveMathBook(ans){
            p++;
            if(ans==1){
                x='<center><div style="display:inline-block">';
                x+='<div class="NPSsrchvb">'; 
                for(var i=1; i<=10; i++) x+='<div id="NPSchswchn'+i+'" class="NPSchswchn"  onclick="npsDfqsPoll('+i+')">'+i+'</div>'; 
                 x+='<br><div class="NPSsrchvbxsn" style="margin-top:10px"><a>0 - არასდროს.</a>&nbsp;<a>აუცილებლად - 10</a></div><div style="clear:both"></div>';   
                x+='</div>';
                x+='</div></center>';
                $('.blinfinfoPoll').html('<p style="font-size:24px"> რამდენად ურჩევდით თქვენს მეგობარს მის შეძენას?</p>'+x+'</div></div>');
            }
            if(ans==0){
                x='<center><div style="display:inline-block">';
                x+='<div class="NPSsrchvb"><div class="quitbtns" onclick="endPoll(-2)" style="border: solid #31b90e 2px;"> არა </div> <div class="quitbtns" style=" border: solid #31b90e 2px;" onclick="endPoll(-1)"> კი </div> </div>';
                x+='</div></center>';
                $('.blinfinfoPoll').html('<p style="font-size:24px;">გსურს კინგსის მათემატიკის სახელმძღვანელოს შეძენა?</p>'+x+'</div></div>');

            }

        }
        function npsDfqsPoll(ndx){
            var prvl=0;
            if($('.NPSchswchnArch').length==0) prvl=1;
            $('.NPSchswchnArch').removeClass('NPSchswchnArch');
            $('#NPSchswchn'+ndx).addClass('NPSchswchnArch');
            if(prvl){
                $('.blinfinfoPoll').append('<center><br/><textarea class="npstextarea" style="font-family: BPGBannerCaps;"placeholder="გთხოვთ, დაგვიტოვოთ კომენტარი"></textarea><br/><button id="gdmwrsglk" onclick="endPoll('+ndx+')" style="margin-top: 10px; font-family: BPGBannerCaps; background: #5e95dc">გაგზავნა</button></center>');
            }
        }
        /*function npssubmit(){
            var rmdn=$('.NPSchswchnArch').attr('id').substr(10);
            var txt=$('.npstextarea').val();
            $('body').css('overflow','auto');
            $('.blck').next().remove();
            $('.blck').remove();
            $('.npsssbtn').remove();
            $.post($loc+"php/nspsend.php", { rmdn: rmdn, text: txt }, function (succ) {
                console.log(succ);
            });
        }*/

        function closePoll(){
            $('body').css('overflow','auto');
            $('.blck').next().remove();
            $('.blck').remove();
        }
        function endPoll(score){
            var txt="";
            if(score>=0){
                //var score=$('.NPSchswchnArch').attr('id').substr(10);
                var txt=$('.npstextarea').val();
                $('.blinfinfoPoll').html('<p style="font-size:24px"> მადლობას გიხდით გამოკითხვაში მონაწილეობისთვის</p><div class="daxurva" onclick="closePoll()">დახურვა</div></div></div>');
            }
            if(score==-1){
                $('.blinfinfoPoll').html('<p style="font-size:24px"> გმადლობთ! თქვენი მოთხოვნა მიღებულია. უახლოეს დღეებში ჩვენი წარმომადგენელი დაგიკავშირდებათ.</p> <div class="daxurva" onclick="closePoll()">დახურვა</div></div></div>');
            }
            if(score==-2){
                $('.blinfinfoPoll').html('<p style="font-size:24px"> მადლობას გიხდით გამოკითხვაში მონაწილეობისთვის</p> <div class="daxurva" onclick="closePoll()">დახურვა</div></div></div>');
            }
            $.post($loc+"php/mathBookPoll.php",{score: score,txt:txt}, function(succ){
                //alert(succ);
                if(succ==1){

                }
            });
        }
        function gotosubjpage(subj,url){
            aEvent('Chose '+(subj==1?'Math':subj==2?'English':'Georgian'));
            location.href=url;
        }
        sbctsrmdgmrb=JSON.parse('[["0","20"],["0","19"],["0","99"]]');
        $pltfexpl=0;
        var n=sbctsrmdgmrb.length;
        for(var i=0; i<n; i++){
            if(sbctsrmdgmrb[i]==-1){
                $('#chsubjddCrcls'+(i+1)).append('<div class="chsubjWhtnnd"><div class="VM"><div class="chsubjBlckk" id="chsubjBlckk'+(i+1)+'"></div></div></div>');
            }
            else{
                if(parseInt(sbctsrmdgmrb[i][1])>=60) $('#chsubjddCrcls'+(i+1)).append('<div class="chsubjdCrcllP"></div><div class="chsubjdCrcllD"></div>');
                $('#chsubjSubj'+(i+1)+'Img').append('<div class="chsubjQvdenrg">'+sbctsrmdgmrb[i][1]+'<br/><div class="chsubjQvdenrgIcon"></div></div>');
                $('#chsubjSubj'+(i+1)).addClass('chsubjActv');
            }
        }
        if($pltfexpl==1){
            $('body').append('<div class="blck"></div><div class="ntfrgcDvv"><div class="ntfrgcCls"><div class="ntfrgcClsBut" onclick="clssblck()"></div></div><div class="ntfrgcTxt"><p>კინგსის სასწავლო პლატფორმა მოსწავლის ინდივიდუალურ განვითარებაზე ორიენტირებული ინოვაციური სივრცეა. პლატფორმა იყოფა სასკოლო და ძირითად მიმართულებად, რაც კინგსელის პერსონალურ პროგრესზე მეტი ეფექტურობით ზრუნვის საშუალებას გვაძლევს.</p><p><span>1. ძირითადი ხაზი და მისი მუშაობის პრინციპი</span><br/>-ძირითადი ხაზი მოსწავლის კონკრეტულ საჭიროებებზეა ორიენტირებული. სპეციალურად პლატფორმისთვის შექმნილი ალგორითმით ადგენს საგნობრივი ცოდნის დონეს, აგენერირებს ინდივიდუალურ სავარჯიშოებსა და დავალებებს და ეხმარება სუსტი მხარეების გაძლიერებაში.</p><p><span>2. სკოლის ხაზი</span><br/>-სასკოლო მიმართულება მიჰყვება ეროვნულ სასწავლო გეგმას, თითოეულ გაკვეთილზე ახსნილი მასალის შესაბამის სავარჯიშოებს სთავაზობს კინგსელს და ასწავლის მათი ამოხსნის მეთოდებს.</p><p><span>3. ინდივიდუალური მიდგომა/ პერსონალურად დაგენერირებული ტესტი</span><br/>-პლატფორმის მთავარი მახასიათებელი ინდივიდუალური, მოსწავლის საჭიროებებზე მორგებული მიდგომაა. მას შემდეგ, რაც კინგსელი საგნობრივი ცოდნის დონის დასადგენ ტესტს გააკეთებს, სპეციალურად მისთვის დაგენერირდება შესაბამისი დავალებები და სავარჯიშოები.</p><p><span>4. უკუკავშირი/ უკუკავშირის მეილით გამოწერის შესაძლებლობა</span><br/>-მას შემდეგ, რაც მოსწავლე დაადგენს საგნობრივი ცოდნის საწყის დონეს, მნიშვნელოვანია, იგრძნოს და მუდმივად ადევნოს თვალი საფეხურეობრივ განვითარებას. სწორედ ამიტომ, პლატფორმის ერთ-ერთი მთავარი ნაწილი უკუკავშირის მიღებაა. მოსწავლეს ყოველი თემის გავლის შემდეგ შეუძლია ელექტრონული ფოსტის (e-mail) საშუალებით გაიგოს თუ რა საკითხებში იყო მისი ცოდნა შედარებით სუსტი და იზრუნოს მათ გაძლიერებაზე.</p><span>5. ახსნა-განმარტებები</span><br/>-პლატფორმის უპირატესობა მდგომარეობს იმაშიც, რომ მოსწავლეს შეუძლია თითოეული დავალების დეტალური ახსნა-განმარტებით იხელმძღვანელოს, რაც საგრძნობლად ამარტივებს ამა თუ იმ საკითხის ათვისების პროცესს და მიღებულ ცოდნას უფრო მყარს ხდის.</p><p><span style="color:#f15a24">აღნიშნულ ვერსიაში თქვენთვის ხელმისაწვდომია კინგსის სასწავლო პლატფორმის მხოლოდ 1.3%. შეძენის შემთხვევაში, პლატფორმის სრულ ვერსიაზე წვდომა შესაძლებელი იქნება 16 ოქტომბრიდან</span></p></div></div>');
            $('body').css('overflow','hidden');
        }
        function clssblck(){
           $('body').css('overflow','auto');
           $('.blck').next().remove();
           $('.blck').remove();
           $.post($loc+"php/ntf_see.php", { subj: 0, week: 0, sad: 0, rml: -49}, function (succ) {
                console.log(succ);
            });
        }
         msgsUnseenCount=0;        shwMsgIcn();
        //playMusic(sounds.jingle);

        function nps(){
            var x='';
            x+='<center><div style="display:inline-block">';
            x+='<div class="NPSsrchvb">'; for(var i=0; i<=10; i++) x+='<div id="NPSchswchn'+i+'" class="NPSchswchn" onclick="npsDfqs('+i+')">'+i+'</div>'; x+='</div>';
            x+='<div class="NPSsrchvbxsn"><a>0 - არასდროს.</a>&nbsp;<a>აუცილებლად - 10</a></div><div style="clear:both"></div>';
            x+='</div></center>';
            $('body').append('<div class="blck"></div><div id="blinfo"><div class="blinfinfo"><p style="font-size:24px">რამდენად ურჩევდით თქვენს მეგობარს კინგსის პლატფორმის გამოყენებას?</p>'+x+'</div></div>');
            $('.blck').click(function () {
               $('body').css('overflow','auto');
               $(this).next().remove();
               $(this).remove();
            });
        }
        function npsDfqs(ndx){
            var prvl=0;
            if($('.NPSchswchnArch').length==0) prvl=1;
            $('.NPSchswchnArch').removeClass('NPSchswchnArch');
            $('#NPSchswchn'+ndx).addClass('NPSchswchnArch');
            if(prvl){
                $('.blinfinfo').append('<center><br/><textarea class="npstextarea" placeholder="გთხოვთ, დაგვიტოვოთ კომენტარი"></textarea><br/><button id="gdmwrsglk" onclick="npssubmit()" style="margin-top: 10px">გაგზავნა</button></center>');
            }
        }

        function npssubmit(){
            var rmdn=$('.NPSchswchnArch').attr('id').substr(10);
            var txt=$('.npstextarea').val();
            $('body').css('overflow','auto');
            $('.blck').next().remove();
            $('.blck').remove();
            $('.npsssbtn').remove();
            $.post($loc+"php/nspsend.php", { rmdn: rmdn, text: txt }, function (succ) {
                console.log(succ);
            });
            location.reload();
        }
    </script>


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

        $.post('buy_books.php', {town: $("#town").val(),address: $("#address").val(),contact_number: $("#contact_number").val(), additional_info: $("#additional_info").val(), books: JSON.stringify(ordered_book),}, function(data){
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


  console.log($('.chSbjSxlwlBg').height());


   var test34=  $('.buy_book_page').height();

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
           $('body').css({'height':'unset',
                           'overflow':'unset'});
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


    $('.buy_book_page').css({'top':topStart,
                              'left':leftStart })
    $('.start_by_book').click(function(){
       $('.buy_book_page').css({
         'left':0,
         'top':0,
         'width':'100%',
         'height':'100%',
         'min-height':'100%'
       })
       $('.close_page').removeClass('hidden_somthing')

        $('body').css({'height':test34,
                           'overflow':'hidden'});
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
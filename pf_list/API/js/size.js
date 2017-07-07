$(document).ready(function(){

   $("#click").click(function(){
	   		var url = 'size.php';
			$(".ins").empty();
			var num = $("#num").val();
			//console.log(num);
	   
		 $.ajax({
			  url:url,
			  datatype:'xml',
			  type:'get',
			  data:$('form').serialize(),
			  success:function(response){
				  $(response).find('item').each(function(){
					  var print= $(response).find('telNoTypeNm1').text();
					  var val1= $(response).find('mcareRsvtTelNo1').text();
					  var val2= $(response).find('mcareRsvtUrl').text();
					  
					  $(".flt_wrap p").eq(1).html(print);
					  //$(".flt_wrap").detach("<p class='flt'>"+print+"</p>");
					  
					  $(".ins").append("<li>"+print+"</li>");
					  $(".ins").append("<li>tel &#41; "+val1+"</li>");
					  $(".ins").append("<li>url &#41; "+val2+"</li>");
						  
				  });
			  }
		 })
   });
	
	$(document).keypress(function(e) {
		if (e.keyCode == 13){
			e.preventDefault();
			alert("You can't use enter");
			window.location.reload(true);
		}
	});
	
});
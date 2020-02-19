var t = function(x) { return document.getElementById(x)}
var loading = "<span style='margin-left:40%; '><img  src='img/ajax-loader.gif'  style='width:100px; height:100px;'/></span>" ;
        $(document).ready(function() 
		            {
			   		
			  $("#submit__i").click( function() { $("#search_form").click();});
			  $("#deletecomment").click( function() { $("#delete").click();});
              $('.loadbutt').click(function()
			                          {
									   var xx = $(this).attr('id');
									   t("rimwe").value = $(this).attr('id');
									   t("rimwe1").value = $(this).attr('id');
									   var n = 0;
									   var cat = false;
									   /*while ( n < xx.length) {
												if(!(xx[n]==="x")) {t("rimwe").value += xx[n] ;}
												if(xx[n]==="x") {  cat = true;} 
												else if(((xx[n]!=="x"))&&(cat)) {t("rimwe1").value += xx[n] ;}
												n++;
											}*/
									   // alert($(this).attr('id'));
                                       var elem$ = $("#twag");
                                       elem$.html(loading);
									   $("#ffgfj").submit( function(event) {});
									   values = $("#ffgfj").serialize();
									   jQuery.ajax({
									                type:"POST",
                                                    url: "details.php",
													data:values,
                                                    success: function( data, status) 
									                                                     {setTimeout( function(){elem$.html('');elem$.html(data);},2000)}} );
                                      /* $.post("details.php", { }  ,function( data, status) 
									                                                     {setTimeout( function(){elem$.load('details.php');},2000)} );*/
				                      });
			  $('.loadbutt2').click(function()
			                          {
									   var xx = $(this).attr('id');
									   t("rimwe").value = $(this).attr('id');
									   t("rimwe1").value = $(this).attr('id');
									   var n = 0;
									   var cat = false;
									   /*while ( n < xx.length) {
												if(!(xx[n]==="x")) {t("rimwe").value += xx[n] ;}
												if(xx[n]==="x") {  cat = true;} 
												else if(((xx[n]!=="x"))&&(cat)) {t("rimwe1").value += xx[n] ;}
												n++;
											}*/
									   // alert($(this).attr('id'));
                                       var elem$ = $("#twag");
                                       elem$.html(loading);
									   $("#ffgfj").submit( function(event) {});
									   values = $("#ffgfj").serialize();
									   jQuery.ajax({
									                type:"POST",
                                                    url: "details2.php",
													data:values,
                                                    success: function( data, status) 
									                                                     {setTimeout( function(){elem$.html('');elem$.html(data);},2000)}} );
                                      /* $.post("details.php", { }  ,function( data, status) 
									                                                     {setTimeout( function(){elem$.load('details.php');},2000)} );*/
				                      });
			  $('.pipPages0').show();
			  $('.clicking').click(function()
											{
										    var ttt = $(this).attr('id');
											var aho = t("aho").value;
											
											var booler = false;
											var booler2 = false;
											  if((ttt=='pipN')) { if(!(aho==0)) {ttt = "pipPages" + (aho-1);  booler = false;} else booler = true; }
											  if((ttt=='pipP')) { if($("#pipPages" + (aho+1))) {ttt = "pipPages" + (aho+1); booler2 = false; }else booler2 = true; }
											  //alert(aho);
											t("aho").value = ttt.substring(8,ttt.length);
											if((!booler)&&(!booler2))
											 {
											$('.clicking').children().css("box-shadow","0 0 0 #000");
											$("#" + ttt).children().css("box-shadow","1px 0 3px #000");
											$('.pipPages').css("display","none");
											$('.'+ttt).slideDown(500); 
											}
											});
					});
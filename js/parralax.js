$(document).ready(function(){
				var height = $(window).height();

				ajustar();

				function ajustar(){
					$(".sabores-padre").css({"margin-top": height -620 + "px"});
				}
				$(document).scroll(function(){
					var scrollTop = $(this).scrollTop();
					var pixel = scrollTop / 70;

					if (scrollTop < height){
						$(".contenedor-inicio").css({
							"filter": "blur(" + pixel + "px)",
							"background-position": "center -" + pixel * 10 + "px"
						});
					}
				});
			});

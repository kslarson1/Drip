$(window).scroll(function(){$(window).scrollTop()>100?$(".main_h").addClass("sticky"):$(".main_h").removeClass("sticky")}),$(".mobile-toggle").click(function(){$(".main_h").hasClass("open-nav")?$(".main_h").removeClass("open-nav"):$(".main_h").addClass("open-nav")}),$(".main_h li a").click(function(){$(".main_h").hasClass("open-nav")&&($(".navigation").removeClass("open-nav"),$(".main_h").removeClass("open-nav"))}),$("nav a").click(function(a){var n=$(this).attr("href"),o=60,i=$(n).offset().top-o;$("html, body").animate({scrollTop:i},500),a.preventDefault()});
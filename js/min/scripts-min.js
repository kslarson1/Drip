function resizeDiv(){vpw=$(window).width(),vph=$(window).height(),headerH=$("#masthead").height(),cirW=$(".circle").width(),$(".circle").css({height:cirW+"px"}),$(".fixed_bg_home").css({height:vph+100+"px"})}$(document).ready(function(){resizeDiv()}),window.onresize=function(e){resizeDiv()},$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},500),!1}})});
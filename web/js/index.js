var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-16729802-1']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
function slideSwitch(){var $active=$('#slideshow IMG.active');if($active.length==0)$active=$('#slideshow IMG:last');var $next=$active.next().length?$active.next()
:$('#slideshow IMG:first');$active.addClass('last-active');$next.css({opacity:0.0}).addClass('active').animate({opacity:1.0},1000,function(){$active.removeClass('active last-active');});}
$(function(){setInterval("slideSwitch()",5000);});



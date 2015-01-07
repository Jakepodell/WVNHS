$(document).ready( function(){
if(screen.width>800){
    var container = document.getElementById("container");
    var inner = document.getElementById("content");
    var inHeight = inner.offsetHeight;

    container.style.height = window.innerHeight;
    container.style.width = window.innerWidth;
    var conHeight = container.offsetHeight;

    inner.style.marginTop = ((conHeight-inHeight)/2)+'px';

    var a = document.getElementById("announcment");
    var aheight = announcment.offsetHeight;
    a.style.marginTop = ((conHeight-inHeight)/2)+'px';

    //var c = document.getElementById("calWrap");
    //c.style.marginTop = ((conHeight-inHeight)/2)+'px';
	
}
	$( "#signup" ).click(function() {
	  window.location.href = "http://wvnhs.com/members/signup.php";

	});
	
	$( "#admin" ).click(function() {
	  window.location.href = "http://wvnhs.com/admin";

	});
	
	$( "#events" ).click(function() {
	  window.location.href = "http://wvnhs.com/events";

	});
	
	$( "#members" ).click(function() {
	  window.location.href = "http://wvnhs.com/members";

	});
	$( "#home" ).click(function() {
	  window.location.href = "http://wvnhs.com";

	});
	$( "#mystats" ).click(function() {
	  window.location.href = "http://wvnhs.com/myStats";

	});
	$( "#forms" ).click(function() {
	  window.location.href = "http://wvnhs.com/forms";

	});
	
	$(document).ready(function(){
$('.bxslider').bxSlider({
    slideWidth: 400,
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 1,
    slideMargin: 10,
    auto: true,
    autoControls: true
  });
});
});


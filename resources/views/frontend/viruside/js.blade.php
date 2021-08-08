<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ Helper::frontend('slick/slick.min.js') }}"></script>

<script>

$(document).ready(function(){

  var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
  if(width > 765){
    $('.slider').slick({
      autoplay: true,
      slidesToShow: 3,
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
  }
  else{
    $('.slider').slick({
      autoplay: true,
      slidesToShow: 1,
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
  }

});
</script>

@stack('javascript')

<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>


$(document).ready(function() {
    $('#autoWidth,#autoWidth2').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
        } 
    });  
  });
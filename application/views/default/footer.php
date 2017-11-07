
<!--footer section start-->
<footer>
	<div class="container footer-container">
		<div class="row">
			<!--<div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">	
				<h3>Using AllAboutGrocery </h3>
				<ul class="footer-ul">
					<li> <a href="#"> How It Works</a></li>
					<li> <a href="#"> Gift </a></li>
					<li> <a href="#"> Help</a></li>
 
				</ul>
			</div>
			<div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3>Our Company </h3>
				<ul class="footer-ul">
					<li> <a href="#"> About</a></li>
					<li> <a href="#"> Partners</a></li>
					<li> <a href="#"> Careers</a></li>
					<li> <a href="#"> Blog</a></li>
 
				</ul>
			</div>
			
			<div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3>Legal  AllAboutGrocery </h3>
				<ul class="footer-ul">
					<li> <a href="#"> Terms of Service</a></li>
					<li> <a href="#"> Privacy Policy</a></li>
					 
				</ul>
			</div>
			
			<div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3>Nice Links </h3>
				<ul class="footer-ul">
					<li> <a href="#"> Log in</a></li>
					<li> <a href="#"> Contact Us</a></li>
					<li> <a href="#"> Press/Media</a></li>
					<li> <a href="#">Shoppers </a></li>
				 
				</ul>
			</div>-->
			
			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<p class="menufooters"><a href="#">home</a> <a href="#"> Get started</a> <a href="#">Download</a><a href="#">Contact us</a>
				<a href="#">DO YOU HAVE A GROCERY STORE?</a> </p>
			</div>
			
			<div class="col-md-12">
				<section class="social-section">
					<ul class="social-ul">
						<li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> </a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						 
					</ul>	
				</section>
			</div>
			<div class="clear" style="clear:both"></div>
			<div class="col-md-12">
				<p style="text-align:center; padding-top:10px; font-size:14px">&copy 2017 AllAboutGrocery.com and its services 
				are not necessarily affiliated or endorsed by the retailers of this site and app.</p>
			</div>
			
			
		</div>
	</div>
</footer>
<!--footer section end-->

</main>

<!--js links-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>
 <script>
 
 /*Select Box js*/
$('.drop-menu').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropeddown').slideToggle(300);
    });
    $('.drop-menu').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropeddown').slideUp(300);
    });
    $('.drop-menu .dropeddown li').click(function () {
        $(this).parents('.drop-menu').find('span').text($(this).text());
        $(this).parents('.drop-menu').find('input').attr('value', $(this).attr('id'));
    });
/*End Select Box js*/
 
 </script>
 
<script>
 
$(window).scroll(function(){
  var sticky = $('header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-header ');
  else sticky.removeClass('fixed-header ');
});
 /*
jQuery(function(){
    createSticky(jQuery("header"));
});

function createSticky(sticky) {
    if (typeof sticky != "undefined") {

        var pos = sticky.offset().top + 150,
            win = jQuery(window);

        win.on("scroll", function() {

            if( win.scrollTop() > pos ) {
                sticky.addClass("fixed-header");
            } else {
                sticky.removeClass("fixed-header");
            }           
        });         
    }
}*/


</script>
<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>


<script src="assets/js/multiple-select.js"></script>
<script>
    $(function() {
        $('.ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>
<!--
<script>
$(document).ready(function(){
    $("#radio-btn2").click(function(){
        $("#opentime-divs").toggle();
    });
	 $("#radio-btn1").click(function(){
        $("#opentime-divs").hide();
    });
});
</script>-->

</body>
</html>
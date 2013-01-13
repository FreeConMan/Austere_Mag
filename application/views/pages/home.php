<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>public/css/home_style.css">

<script type="text/javascript">
$(function(){
	$('#content').mousewheel(function(event, delta){
		this.scrollLeft -= (delta*30);
		event.preventDefault();
	});
});
</script>

<div class ="span3" id ="header">
	<img src="<?=base_url();?>public/images/Austereside.jpg" />
</div>


<div class ="span12" id ="content">
	<div id="content-inner">
		<img src="<?=base_url();?>public/images/slidephoto1.jpg" class ="content-unit" id ="first"/>
		<img src="<?=base_url();?>public/images/slidephoto2.jpg" class ="content-unit" />
		<img src="<?=base_url();?>public/images/about.png" class ="content-unit" />
		<img src="<?=base_url();?>public/images/about.png" class ="content-unit" />
		<img src="<?=base_url();?>public/images/about.png" class ="content-unit" />
		<img src="<?=base_url();?>public/images/about.png" class ="content-unit" />
	</div>
</div>




<!-- <div id="myCarousel" class="carousel slide">
	<div class="carousel-inner">
		<div class="item">
			<img src="public/images/mainphoto.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
		</div>
		<div class="item">
			<img src="public/images/coverphoto.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">

				</div>
			</div>
		</div>
		<div class="item active">
			<img src="public/images/mainphoto.jpg" alt="">
			<div class="container">
				<div class="carousel-caption">
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<div class="span3">
	<form id ="newsletter">
		<h3>Newsletter</h3>
		<label>Name:</label><input type="text"></input>
		<label>Email: </label><input type="text"></input>
		<a href="#" class ="btn btn-inverse subscribe">subscribe</a>
	</form>
</div>


<div class ="span8" id ="promo">
	<iframe src="http://www.youtube.com/embed/zlDRLV-xLeU" frameborder="0" allowfullscreen></iframe>
</div>


<div class ="clear"></div>


<div class ="clear"></div>


	<ul class ="row-fluid" id ="nails">
		<li class ="span4">

				<img src="public/images/talent.png" alt="">
				<h3>Where the Talent?</h3>
				<p>
					Would you like to be the next featured artist in Austere Magazine?
				</p>

		</li>

		<li class ="span4">

				<img src="public/images/talent.png" alt="">
				<h3>Where the Talent?</h3>
				<p>
					Would you like to be the next featured artist in Austere Magazine?
				</p>

		</li>

		<li class ="span4">

				<img src="public/images/talent.png" alt="">
				<h3>Where the Talent?</h3>
				<p>
					Would you like to be the next featured artist in Austere Magazine?
				</p>

		</li>
	</ul>

</div>

<script type="text/javascript">
!function ($) {
	$(function(){
		$('#myCarousel').carousel()
	})
}(window.jQuery)
</script>

<script type="text/javascript">
// $(function(){
// 	$('.thumbnails > span4').css("margin", "100px");

// });
</script> -->
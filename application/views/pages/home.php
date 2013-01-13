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
	<div id="content-inner" data-spy="scroll" data-target="">

		<div class ="content-unit" id ="one">
			<h1 class ="pull-left" id ="one-text">welcome <i class ="icon-angle-right"></i></h1>
		</div>
		<div class ="content-unit" id ="two">
		</div>
		<div class ="content-unit" id ="three">
		</div>
		<div class ="content-unit" id ="four">
		</div>
		<div class ="content-unit" id ="five">
		</div>
		<div class ="content-unit" id ="six">
		</div>
		<div class ="content-unit" id ="seven">
		</div>
		<div class ="content-unit" id ="eight">
		</div>
		<div class ="content-unit" id ="nine">
		</div>
		<div class ="content-unit" id ="ten">
		</div>
		<div class ="content-unit" id ="eleven">
		</div>
		<div class ="content-unit" id ="twelve">
		</div>
	</div>
</div>


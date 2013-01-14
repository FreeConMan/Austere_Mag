<body>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>public/css/nav_style.css">

	<script type="text/javascript">
	$(function({
		$('myModal').modal();
	});
	</script>

	<div class ="navbar navbar-inverse" id ="nav">
		<div class ="navbar-inner pull-right">
			<ul class ="nav">
				<li><a href="<?=base_url();?>" rel="tooltip" title="Home" data-placement="bottom"><i class ="icon-home icon-2x"></i></a></li>
				<li><a href="<?=base_url();?>" rel="tooltip" title="Store" data-placement="bottom"><i class ="icon-shopping-cart icon-2x"></i></a></li>
				<li><a href="#myModal" rel="tooltip" title="About" data-placement="bottom" role="button" data-toggle="modal"><i class ="icon-group icon-2x"></i></a></li>
				<li><a href="<?=base_url();?>index.php/blog" rel="tooltip" title="Blog" data-placement="bottom"><i class ="icon-rss icon-2x"></i></a></li>
				<li><a href="<?=base_url();?>" rel="tooltip" title="Facebook" data-placement="bottom"><i class ="icon-facebook icon-2x"></i></a></li>
				<li><a href="<?=base_url();?>" rel="tooltip" title="Twitter" data-placement="bottom"><i class ="icon-twitter icon-2x"></i></a></li>
				<li><a href="<?=base_url();?>" rel="tooltip" title="Instagram" data-placement="bottom"><i class ="icon-camera icon-2x"></i></a></li>								
			</ul>
		</div>
	</div>

<div id="myModal" class ="modal hide fade" tabindex="-1" role="dialog">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h2 id ="modalHeader">Contact</h2>
	</div>
	<div class ="modal-body">
		<form>
			<label for="name">Name: </label><input type="text" id="name"></input>
			<label for="email">Email: </label><input type="text" id="email"></input>
			<div class ="clear"></div>
			<button type="submit">Submit</button>
		</form>
	</div>
</div>
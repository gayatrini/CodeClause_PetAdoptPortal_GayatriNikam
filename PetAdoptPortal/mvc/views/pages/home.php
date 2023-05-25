<div class="container-fluid p-0">
	<img id="banner" src="./public/images/banner/banner3.jfif" width="100%" style="margin-top: 85px">
	<div class="text">
		<h2>Every Pet Deserves A Home</h2>
		<p>Over thousand of rescued pet needs a proper home and second chance. </p>
	</div>
</div>
<style type="text/css">
	.text {
		position: absolute;
		word-spacing: 7px;
		width: 250px;
		top: 230px;
		left: 16px;
	}

	.text h2 {
		color: #fff;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		font-size: 40px;
	}

	.text p {
		color: #fff;
		font-size: 18px;
		font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	}

	.post--box:hover {
		transform: scale(1.02);
		transition: 0.3s;
	}
</style>

<div class="container pl-2 pr-2 pt-3 pb-5">
	<p class="font-weight-bold ml-1 mb-1"  style="font-size: 180%">Popular right now </p>
	<div class="row m-0">
		<?php include("./mvc/views/partials/home-post.php"); ?>
	</div>
</div>
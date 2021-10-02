<div class="container pt-5">
<?php/* Dropdown Button */ ?>
	<style>
		body{
            margin: 20px;
        }
		.dropbtn{
			background-color: #04AA6D;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
		}

		.dropdown{
			position: relative;
			display: inline-block;
		}

		.dropdown-content{
			display: none;
			position: absolute;
			background-color: #f1f1f1
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdown-content a{
			color: black;
			padding: 2px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content{
			display: block;
		}

		.dropdown:hover .dropbtn{
			background-color: #3e8e41;
		}
	</style>

	<div class="row align-items-center justify-content-center">
<div class="col-md-10">
<div class="dropdown" style="margin-top: 2em">
	<h2>New Washington</h2>

	<button class="dropbtn">Select Year</button>
	<div class="dropdown-content">
		<a href="#">2014</a>
		<a href="#">2015</a>
		<a href="#">2016</a>
		<a href="#">2017</a>
		<a href="#">2018</a>
		<a href="#">2019</a>
		<a href="#">2020</a>
	</div>
</div>
</div>
</div>
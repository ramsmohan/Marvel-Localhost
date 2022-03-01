<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marvel Localhost</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="fav.ico" rel="shortcut icon">
  <style type="text/css">
	body{
		font-family: monospace;
		font-size: 40px;
		font-weight: 500;
		text-shadow: 0px 0px 50px black;
		background: black;
		color: black;
		background:url('assets/img/bgblk.jpg') repeat fixed;
		background-blend-mode: color-dodge;
	}
	small{
		font-size:20px !important;
	}

	.dark-bg
	{
		background:url('assets/img/bg-banner.jpg') center top;
		height: 300px;
	}
	thead {
		background: rgba(200,200,200,0.5);
	}
	::-webkit-scrollbar{}
	::-webkit-scrollbar-button     {}
	::-webkit-scrollbar-track      {}
	::-webkit-scrollbar-track-piece{}
	::-webkit-scrollbar-thumb      {}
	::-webkit-scrollbar-corner     {}
	::-webkit-resizer
	::-webkit-scrollbar-track{
		width: 1px;
	}
	.table-striped>tbody>tr a{color:#bc1423; }
	.table-striped>tbody>tr:nth-of-type(even) {
		color:#dfdfdf;}
	.table-striped>tbody>tr:nth-of-type(odd) {
		background-color: rgba(249, 249, 249, 0.7);
	}
	#myInput{background: rgba(255,255,255,0.2);
    color: #fff;
    border: 5px solid rgba(255,255,255,0.4);}
	#myInput:focus, #myInput:hover,#myInput:active {background: rgba(255,255,255,1);
    border: 5px solid rgba(255,255,255,1); color:#000;
	transform:scale(1.2);
	}
  </style>
  
</head>
<body>


	<?php
	$dir    = __DIR__;
	$imgdir    = __DIR__.'';
	$files1 = scandir($dir);
	$images = scandir($imgdir, 2);
	/*
	?>
	<div class="jumbotron">
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			<?php
				$i = 2 ;
				$active = ' active';
				foreach($files1 as $project)
				{
					if($i==sizeof($images)-1) $i = 3;
					
					if(is_dir($project)&&(!empty($project)&&($project!='..')&&($project != '.')))
					{
						?>
							<div class="item <?php echo $active; ?>">
								<img src="<?= 'http://localhost/practice/bg/'.$images[$i] ?>" width="100%" height="300">
								<div class="carousel-caption">
								  <h2><?php echo ucfirst($project); ?></h2>
								  <small><?php echo '<a href="http://localhost/'.strtolower($project).'">'.ucfirst($project).'</a>'; ?><small>
								</div>
							</div>
						<?php
					}
				$i++;
				$active = '';
				}
			?>
		  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<? */ ?>

<div class="container">
	
	<br>
	<div class="clearfix"> </div>
	<div class="form-group dark-bg">
		<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
			<h1 class="text-center" style="color:#fff; font-size:30px;">Localhost Projects</h1>
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Projects.." class="form-control input-lg">
			<br>
		</div>
		</div>
	</div>
	<?php
	echo '  <table id="myTable" class="table table-striped" style="background: rgba(0,0,0,0.7);">
    <thead>
      <tr>
        <th width="10%"><h3> </h3></th>
        <th width="40%"><h3>Name</h3></th>
        <th width="50%"><h3>Project</h3></th>
      </tr>
      <tr>
        <td width="10%"> ► </td>
        <th width="40%">Phpmyadmin</th>
        <th width="50%"><a href="http://localhost/phpmyadmin">phpmyadmin</a></th>
      </tr>
    </thead>
    <tbody>
	  ';
	foreach($files1 as $project)
	{	
		if(is_dir($project)&&(!empty($project))&&($project!=('..')&&($project != '.')))
		{
			echo '<tr><td> ► </td><td>'.ucfirst($project).'</td>';
			echo '<th><small><a href="http://localhost/'.strtolower($project).'">'.ucfirst($project).'<a></small></th></tr>';
		}
	}
	echo '</tbody></table>';
	?>
	
</div>
	<script type="text/javascript">
		$("#myCarousel").carousel();
	</script>
	<script>
	function myFunction() {
	  // Declare variables 
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("th")[0];
		if (td) {
		  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		} 
	  }
	}
	</script>

</body>
</html>
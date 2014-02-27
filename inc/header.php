<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo $pageTitle; ?></title>
		<link rel="stylesheet" type="text/css" href="css/grid.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="screen">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nunito:400,300,700"  >
	</head>
	<body id="index">	
	<div class="container clearfix">
		<header>
			<div class="colorBar topColorBar"></div>
			<div id="bodyHeader" class="grid_12">
				<div id="logo">
						<a href="index.php"><img src="img/logo.png"></a>
				</div>
				<div id ="nav">
					<ul>
						<li class="checkpoint"><a href="checkpoint.php"><strong>CheckPoint</strong></a></li>
						<li class="training"><a href="training.php"><strong>Training</strong></a></li>
						<li class="forms"><a href="forms.php"><strong>Forms</strong></a></li>
						<li class="signIn"><strong>Sign-In</strong></li>
					</ul>
				</div>
				<div class="search">
					<input name="search" value="Search" type="text"></input>
				</div>
			</div>
		</header>
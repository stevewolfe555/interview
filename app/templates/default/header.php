<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>

	<!-- Bootstrap & CSS -->
	<?php
		helpers\assets::css(array(
			#helpers\url::template_path() . 'css/bootstrap.min.css',
			helpers\url::template_path() . 'css/style.css'
		))
	?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo DIR ?>"><?php echo SITETITLE;?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo DIR ?>">Home</a></li>
            <li><a href="<?php echo DIR ?>order">Oders</a></li>
            <li><a href="<?php echo DIR ?>order/new">New Order</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container-fluid" id="site-container">
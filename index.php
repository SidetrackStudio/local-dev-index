<?php
/*
 */

$dir = basename( __DIR__ );
$home = 'http://localhost' . $_SERVER['SCRIPT_NAME'];
$url = 'http://localhost' . $_SERVER['REQUEST_URI'];
$user_info = $_SERVER['HTTP_USER_AGENT'];
$fullpath = __FILE__;

?>
<!doctype html>
<!--[if lt IE 7 ]><html itemscope itemtype="http://schema.org/Product" id="ie6" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie7" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie8" class="ie ie-old" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]>   <html itemscope itemtype="http://schema.org/Product" id="ie9" class="ie" lang="en-US" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 9]><!--><html itemscope itemtype="http://schema.org/Product" lang="en-US" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>

<!-- Meta -->
<meta charset="utf-8">

<title>My ♥ Local</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<!-- Favicons -->

<!-- Styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">
<!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php

?>
<style>
	::selection {
		background: #000;
		color: #fff;
	}

		::-moz-selection {
		background: #000;
		color: #fff;
	}
	body {
		font-family: 'Pathway Gothic One', sans-serif;
		height: 2000px;
	}
	a {
		-webkit-transition: all 310ms ease;
		-moz-transition: all 310ms ease;
		transition: all 310ms ease;
		text-decoration: none !important;
	}
	section {
		position: relative;
	}
	#topper {
		margin-top: 51px;
		height: 450px;
		text-align: center;
		box-shadow: .1rem 1rem 9px #999;
		background-image: url(<?php echo get_image(); ?>);
		background-size: cover;
		background-position: center;
	}
	#topper svg {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
	}
	#topper h1 {
		position: relative;
		color: #fff;
		left: 50%;
		top: 25%;
		-o-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-webkit-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		margin: 0;
		font-size: 80px;
		text-transform: uppercase;
		text-shadow:
			-1px -1px 0 #222,
			1px -1px 0 #222,
			-1px 1px 0 #222,
			1px 1px 0 #222;
	}
	#topper h1 i {
		color: rgb(255, 157, 157);
		text-shadow:
			-1px -1px 0 #ff6b6b,
			1px -1px 0 #ff6b6b,
			-1px 1px 0 #ff6b6b,
			1px 1px 0 #ff6b6b;
	}
	#topper h2 {
		position: relative;
		color: white;
	    padding: 3rem 0 0;
	}
	#topper h4 {
		color: wheat;
	}
	.topper-bg {
		background-color: rgba( 24, 24, 54, .2 );
		position: relative;
		top: 5rem;
		border-radius: 50%;
		width: 30%;
		margin: 0 auto;
	}
	article {
		padding: 50px 0;
	}
	article table {
		background: #e3e3e3;
	}
	article .content .wrap {
		background: rgba( 255, 27, 53, 0.8 );
		margin-bottom: 50px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	article .content .wrap h2 {
		margin: 10px 0 15px;
		color: #fff;
	}
	article .content .wrap td {
		font-size: 20px;
	}
	article .fa-times {
		color: rgb(255, 69, 69);
	}
	article .fa-check {
		color: rgb(0, 179, 64);
	}
	#site-footer {
		background: #05003D;
		padding: 100px 0;
		color: #e3e3e3;
		font-size: 35px;
	}
	#site-footer a {
		color: #fff;
	}
	#site-footer a:hover {
		color: rgb( 144, 255, 184 );
	}
	p {
		font-size: 1.4rem;
	}
	@media ( min-width: 992px ) {
		div.col-md-6.col-md-offset-3.wrap {
			width: 66%;
		}
		.col-md-offset-3 {
			margin-left: 18%;
		}
	}
</style>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><?php echo $dir; ?> <i class="fa fa-heart"></i> Folder</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav pull-right">
				<li><a href="<?php echo $dir; ?>" target="_blank"><?php echo $dir; ?> Resources</a></li>
				<li><a href="http://localhost/index.php?language=English&page=phpinfo" target="_blank">PHPinfo</a></li>
				<li><a href="http://localhost/db/index.php?page=phpmyadmin&language=English" target="_blank">phpMyAdmin</a></li>
			</ul>
		</div>
	</div>
</div>

<section id="topper">
<h1><?php echo $dir; ?> <i class="fa fa-heart"></i> Folder</h1>

<div class="topper-bg">
<h2><?php echo $home; ?></h2>
<h4>
<?php echo $fullpath; ?>
<br><br>
</h4>
</div>
</section>

<article>
	<div class="container">

		<div class="row content">
			<div class="col-md-6 col-md-offset-3 wrap">
				<h2>Directories found in <?php echo $dir; ?> Folder using Glob</h2>
				   <table class="table table-responsive table-striped table-hover">
					<?php
					// set to current directory 
					$dir = '';
					// directories only. ignore files, etc.
					foreach ( glob( $dir.'*', GLOB_ONLYDIR ) as $folder ) {
						// do not include wordpress directories
						if ( ( $folder != 'wp-admin' ) && ( $folder != 'wp-content' ) && ( $folder != 'wp-includes' ) ) {
						// list directories and their links
						?>
					<tr>
						<td><a href="<?php echo $url . '' . $folder; ?>" target="_blank"><?php echo $folder;?></td>
						<td><i class="fa fa-check"></i></td>
					</tr>
						
						<?php
						}
					}
					?>
				</table>
			</div>

		<div class="row content">
			<div class="col-md-6 col-md-offset-3 wrap">
			<h2>System Stuff</h2>
			<table class="table table-responsive table-striped table-hover">
			    <tr>
			        <td>OS</td>
			        <td>Ubuntu 14.04 LTS (Trusty Tahr) </td>
			    </tr>
			    <tr>
			        <td>PHP Version</td>
			        <td><?php echo phpversion(); ?></td>
			    </tr>
			    <tr>
			        <td>Ruby 2.2.x</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Vim</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Git</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>cURL</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Imagick</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Composer</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Beanstalkd</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>Node</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			    <tr>
			        <td>NPM</td>
			        <td><i class="fa fa-check"></i></td>
			    </tr>
			</table>
		</div>
		</div>

		<div class="row content">
		    <div class="col-md-6 col-md-offset-3 wrap">
                <h2>Database Stuff</h2>
				<table class="table table-responsive table-striped table-hover">
					<?php
					$mysql_exists = FALSE;
					if (extension_loaded('mysql') or extension_loaded('mysqli')) :
					    $mysql_exists = TRUE;
					endif;
					$mysqli = @new mysqli('localhost', 'root', 'root');
					$mysql_running = TRUE;
					if (mysqli_connect_errno()) {
					    $mysql_running = FALSE;
					} else {
					    $mysql_version = $mysqli->server_info;
					}

					$mysqli->close();
					?>
					<tr>
					    <td>MySQL is installed</td>
					    <td><i class="fa fa-<?php echo ($mysql_exists ? 'check' : 'times'); ?>"></i></td>
					</tr>
					<tr>
					    <td>MySQL is connected</td>
					    <td><i class="fa fa-<?php echo ($mysql_running ? 'check' : 'times'); ?>"></i></td>
					</tr>
					<tr>
					    <td>MySQL Version</td>
					    <td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
					</tr>


					<?php
					$psql_is_connected = FALSE;
					$psql_conn = pg_connect('host=localhost port=5432 dbname=scotchbox user=root password=root');
					if ($psql_conn) $psql_is_connected = TRUE;
					$psql_version = pg_version($psql_conn)['client'];
					pg_close($psql_conn);
					?>
					<tr>
					    <td>PostgreSQL is installed</td>
					    <td><i class="fa fa-<?php echo ($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
					</tr>
					<tr>
					    <td>PostgreSQL is connected</td>
					    <td><i class="fa fa-<?php echo ($psql_is_connected ? 'check' : 'times'); ?>"></i></td>
					</tr>
					<tr>
					    <td>PostgreSQL Version</td>
					    <td><?php echo ($psql_version ? $psql_version : 'N/A'); ?></td>
					</tr>
				</table>
            </div>
        </div>

		<div class="row content">
			<div class="col-md-6 col-md-offset-3 wrap">
				<h2>All PHP Modules</h2>
				<table class="table table-responsive table-striped table-hover">
				    <?php
						$modules = get_loaded_extensions();
						asort($modules);
						foreach ($modules as $extension) :
						?>
						<tr>
						    <td><?php echo $extension; ?></td>
						    <td><i class="fa fa-check"></i></td>
					    </tr>
				    <?php endforeach; ?>
				</table>
			</div>
	    </div>
		<div class="row content">
						<div class="col-md-6 col-md-offset-3 wrap">
				<h2>Server Variables</h2>
				<table class="table table-responsive table-striped table-hover">
				    <?php
						$server = $_SERVER;
						unset( $server['HTTP_COOKIE'] );
						foreach ( $server as $variable => $value ) :
						?>
						<tr>
						    <td><?php echo $variable; ?></td>
						    <td><i class="fa fa-check"></i> <span><? echo $value; ?></span></td>
					    </tr>
				    <?php endforeach; ?>
			</table>
			</div>
		</div>
	</article>
<?php

?>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				Built by <a href="http://paul.barthmaier.rocks">Paul Barthmaier rocks</a>
			</div>
		</div>
	</div>
</footer>
<?php
function get_image() {
	$array = array(
		'http://images.unsplash.com/photo-1468956332313-2dcf1542828f',
		'http://images.unsplash.com/photo-1469547371150-47620ed0c5ea',
		'http://images.unsplash.com/photo-1468103933896-2c34a78104c2',
		'https://images.unsplash.com/photo-1472214103451-9374bd1c798e',
		'http://www.peta.org/wp-content/uploads/2015/08/piglets4.jpg',
		'http://images.unsplash.com/photo-1474204075013-fafcfee9bfd7',
		'http://images.unsplash.com/photo-1474478559444-4f154565ae3b',
		'https://images.unsplash.com/photo-1440700265116-fe3f91810d72',
		'http://images.unsplash.com/photo-1474204075013-fafcfee9bfd7',
		'http://images.unsplash.com/photo-1467189386127-c4e5e31ee213',
		'http://images.unsplash.com/uploads/1411599070526e808c923/239f12cc',
		'https://images.unsplash.com/photo-1454123253751-1fe2b9e0c10d',
		'https://images.unsplash.com/photo-1463780324318-d1a8ddc05a11',
		 );
	$image = array_rand( array_flip( $array ), 1 );

	return $image;
}
?>
<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>

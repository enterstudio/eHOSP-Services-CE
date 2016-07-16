<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>


<html class="no-js" lang="en">
<head>
	<title>Video Communication</title>
	<?php
		include '../../includes/php/head.php';
	?>
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Video Communication</h1>
	        <br>

            <div id='video-space'>
                <video class="my-video" controls autoplay>Test</video>
            </div>
            <div class="blank-space"></div>
            <script src="js/video-chat.js"></script>
			
      	</div>

      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<?php include '../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>

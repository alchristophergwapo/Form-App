<head>
	<style type="text/css">
	body {
		font-size: 25px;
		color: white;
		background-image: url("https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/Hnd01gaCiu89hpk4/videoblocks-network-on-a-black-background-cinematic-plexus-background-seamless-loop_hagskxz4rm_thumbnail-full01.png");
		background-size: cover;
		background-repeat: no-repeat;
	}
	div{
		padding-left: 25%;
		padding-right: 25%;
	}
	form{
		
		border-radius: 25px;
		padding-left: 30px;
		padding-right: 30px;
		padding-bottom: 30px;
	}
	input{
		position: absolute;
	}
	</style>
</head>

<body><div><form>
	<H1>WELCOME</H1>
	<?php
	echo $_REQUEST['firstN'];
	echo $_REQUEST['lastN'],'!','<br>', '<hr>';
	echo 'Your user name is ', $_REQUEST['userN'],'<br>','<hr>';
	echo 'Your email is ', $_REQUEST['mail'],'<br>','<hr>';
	echo 'Your sex is ', $_REQUEST['gender'],'<br>','<hr>';
	$status = $_REQUEST['status'];
	if ($status == "Single")
	{
		echo 'Your status is ', $status,'<br>','<hr>';
	}
	if ($status == "Married") 
	{
		echo 'Your status is ', $status,'<br>','<hr>';
		$spouse = $_REQUEST['spouseN'];
		echo 'You are married with '.$spouse.'<br>','<hr>';
		$child = $_REQUEST['child'];
		$children  = array();
		for ($i=0; $i < 24; $i++) { 
			$children[$i] = $child;
		}
		ECHO 'Your child/children is/are '.implode(' , ', $children[0]).'<br>','<hr>';

	}
	echo "Your likes and hobbies are: ";
	$like = $_REQUEST['fav'];
	foreach ($_REQUEST['fav'] as $like) {
		echo $like;
	}
	?> 
</form></div></body>





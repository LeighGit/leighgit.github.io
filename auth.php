<?php

	//ini_set('display_errors', '1');  	
	require('Pusher.php');
	
	//Can check if User allowed, before processing call-back
	
	//Yes - reply with auth Key
  	$pusher = new Pusher('682c10e9ae1e3633aa51', '0ee2fd46dda5abeb0250', '269909');
 	echo $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);
  
  	//SNo - reply with error message	
  	//header('', true, 403);
  	//echo "Forbidden";
	
?>

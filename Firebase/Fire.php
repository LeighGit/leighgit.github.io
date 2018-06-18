<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<script type="text/javascript" language="JavaScript1.1">
function JS_Fire(){

	var key = 'AAAAI2B-JFc:APA91bG7VdL15ES1DJZvvdxpZOJQrRvfJQv1NcyKSljKUdaSGyAbQtDt6vbMw1Gbe2C_e0kAm9Jf97rblYENnihsnN_ZV-uvmewnW9OyXvFnvqfHVBL5LCl93DerKtq_LqbM0NbH_ZUm';
	var to = '151942734935';
	var notification = {
	  'title': 'Portugal vs. Denmark',
	  'body': '5 to 1',
	  'icon': 'firebase-logo.png',
	  'click_action': 'http://localhost:8081'
	};
	
	fetch('https://fcm.googleapis.com/fcm/send', {
	  'method': 'POST',
	  'headers': {
		'Authorization': 'key=' + key,
		'Content-Type': 'application/json'
	  },
	  'body': JSON.stringify({
		'notification': notification,
		'to': to
	  })
	}).then(function(response) {
	  console.log(response);
	}).catch(function(error) {
	  console.error(error);
	})
	
}

</script>
<p>Click to Fire off a Notification:</p>
<input name="btnFire" type="button" id="btnFire" onClick="JS_Fire();" value="Fire">

</body>
</html>

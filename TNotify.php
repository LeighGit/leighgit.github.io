<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Notify</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" language="JavaScript1.1">
navigator.serviceWorker.register('TNotifyService.js');

function Notify(){
	setTimeout(showNotification, 3000);
}

function showNotification() {
  Notification.requestPermission(function(result) {
    if (result === 'granted') {
      navigator.serviceWorker.ready.then(function(registration) {
        registration.showNotification('Vibration Sample', {
          body: 'Buzz! Buzz!',
          icon: 'Images/n.jpg',
          vibrate: [200, 100, 200, 100, 200, 100, 200],
          tag: 'vibration-sample'
        });
      });
    }
  });
}
</script>
</head>

<body>

<h3>This will test your browser<br>
  for Notifications allowed on pc or mobile<br>
  Only HTTPS supported!</h2>
  
<p>&nbsp;</p>

<input name="buttonNotify" type="button" value="Notify Me after 3 sec" onclick="Notify()">
<p>&nbsp;</p>
  
</body>
</html>
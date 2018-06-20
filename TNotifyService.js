self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v1').then(function(cache) {
		console.log('Install Success');
      /*return cache.addAll([
        '/Netinfo/Iot/Poll/TNotifySound.wav'
      ]);*/
    })
  );
});

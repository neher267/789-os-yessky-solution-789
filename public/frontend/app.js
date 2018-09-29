// if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.register('service-worker.js');
// }

if (navigator.serviceWorker.controller) {
    console.log('[PWA Builder] active service worker found, no need to register')
    //window.alert('[PWA Builder] active service worker found, no need to register')
} else {
    //Register the ServiceWorker
    navigator.serviceWorker.register('/service-worker.js', {
        scope: '/',
    }).then(function(reg) {
        //window.alert('Service worker has been registered for scope:'+ reg.scope);
        console.log('Service worker has been registered for scope:'+ reg.scope);
    });
}

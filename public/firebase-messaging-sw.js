importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

firebase.initializeApp({
    apiKey: "AIzaSyDrUZ0v4GxSArZWifZuW1apMpARsVbOnE4",
    projectId: "placement-f5f48",
    messagingSenderId: "105390287105",
    appId: "1:105390287105:web:98b09b9b04696de0835300",

});

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({ data: { title, body, icon } }) {
    return self.registration.showNotification(title, { body, icon });
});
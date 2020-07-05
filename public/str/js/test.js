console.log('Here\'s a hidden message');

let today = new Date();
let formatDate = today.toDateString();
let selectElement = document.getElementById('date');
selectElement.innerHTML = formatDate;



var dateFormat = require('dateformat');
var now = new Date();
dateFormat(now, "dddd, mmmm dS, yyyy, h:MM:ss TT");




var d = new Date();

var datestring = d.getDate()  + "-" + (d.getMonth()+1) + "-" + d.getFullYear() + " " +
d.getHours() + ":" + d.getMinutes();
document.write(datestring);
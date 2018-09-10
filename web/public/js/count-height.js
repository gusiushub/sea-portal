var header = document.querySelector('header');
headerH = parseInt(getComputedStyle(header).height);
var screenHeight = parseInt(document.body.clientHeight);
var pageSection = document.querySelector('.page-start');
pageSection.style.height = screenHeight - headerH + 'px';
$(document).ready(function () {
  $('article').readmore({
    speed: 100,
    maxHeight: 5,
    moreLink: '<a href="#">показать все <i class="fa fa-angle-down"></i></a>',
    lessLink: '<a href="#">свернуть текст <i class="fa fa-angle-up"></i></a>'
  });
});
var m = document.getElementById("main_menu");
var k = document.getElementById("header");
    var z = document.querySelector(".mobile_link");
    s = k.offsetHeight + z.offsetHeight;
m.style.top = s + 'px';
(function() {window.addEventListener('scroll', function() {
  var m = document.getElementById("main_menu");
  var k = document.getElementById("header");

    var z = document.querySelector(".mobile_link");
  s = k.offsetHeight + z.offsetHeight;
  m.style.top = s + 'px';
  var a = document.documentElement;
  var body = document.body;
  var scrollTop = a.scrollTop || body && body.scrollTop || 0;
  scrollTop -= a.clientTop;
  if (scrollTop >= s) {
    m.classList.add('fixed');m.style.top = 0;
  } else if (scrollTop < s) {
    m.classList.remove('fixed');m.style.top = s + 'px'
  }
}, true);
var  i=document.getElementById("mobile");
if (i){i.addEventListener('click', function mobile() {
  var icon = document.querySelector('#main_menu');
  icon.classList.toggle('mobile-hidden');

});
}}
());
<!--end fixed menu js  -->
<!-- mobile menu-->

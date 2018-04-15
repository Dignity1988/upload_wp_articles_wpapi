(function() {
  jQuery(".overlay").click(function(){
  jQuery( "#form" ).hide( "fast" );
  jQuery( ".overlay" ).hide( "fast" );
  jQuery( "#main_menu" ).removeClass( "mobile-hidden" );
  });
var  i=document.getElementById("mobile");
var  y=document.getElementById("main");
var m = document.getElementById("main_menu");
m.addEventListener("load", function(){
var m = document.getElementById("main_menu");
var k = document.getElementById("header");
    var z = document.querySelector(".mobile_link");
    s = k.offsetHeight + z.offsetHeight;
m.style.top = s + 'px';

});
window.addEventListener('scroll', function() {
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
if (y){y.addEventListener('click', function mobile() {
  var icon = document.querySelector('#main_menu');
  icon.classList.remove('mobile-hidden');

});
}

if (i){i.addEventListener('click', function mobile() {
var icon = document.querySelector('#main_menu');

if (window.matchMedia=("(min-width: 768px)")){ jQuery( ".overlay" ).fadeToggle( "fast" ); }

icon.classList.toggle('mobile-hidden');
});
}}
());
<!--end fixed menu js  -->
<!-- mobile menu-->

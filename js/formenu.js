<!-- fixed menu js  -->

window.addEventListener('scroll', function() {
  var m = document.getElementById("main_menu");
  var k = document.getElementById("header");
    var z = document.querySelector("mobile_link");
  s = k.offsetHeight +z.offsetHeight;
  var a = document.documentElement;
  var body = document.body;
  var scrollTop = a.scrollTop || body && body.scrollTop || 0;
  scrollTop -= a.clientTop;
  if (scrollTop >= s) {
    m.classList.add('fixed');
  } else if (scrollTop < s) {
    m.classList.remove('fixed');
  }
}, true)

document.getElementById("mobile").addEventListener('click', function mobile() {
  var icon = document.querySelector('#main_menu');
  var menus = document.querySelectorAll('sidebar-main_menu__link');
  icon.classList.toggle('mobile-hidden');
  pos=1000;
var id = setInterval(frame, 10);
      function frame() {
          if (pos == 1000) {
              clearInterval(id);
          } else {
              pos++;

              menus.style.left = pos + 'px';
          }
      }

})

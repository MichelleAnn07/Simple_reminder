(function() {

    $('#moveleft').click(function() {
        $('#login-signup').addClass('move-left');
        $('#login-signup').removeClass('move-right');
        $('.dual').addClass('mobile-left');
        $('.dual').removeClass('mobile-right');
    });
    
    $('#moveright').click(function() {
        $('#login-signup').addClass('move-right');
        $('#login-signup').removeClass('move-left');
        $('.dual').addClass('mobile-right');
        $('.dual').removeClass('mobile-left');
    });
  
  var Menu = (function() {
    var burger = document.querySelector('.burger');
    // var menu = document.querySelector('.menu');
    // var menuList = document.querySelector('.menu__list');
    // var brand = document.querySelector('.menu__brand');
    var menu = document.querySelector('.dual');
    var menuList = document.querySelector('.login');
    var brand = document.querySelector('.sign-up');
    var right = document.querySelector('.right');
    var left = document.querySelector('.left');
    var menuItems = document.querySelectorAll('.menu__item');
    
    var active = false;
    
    var toggleMenu = function() {
      if (!active) {
        menu.classList.add('menu--active');
        menuList.classList.add('login--active');
        brand.classList.add('menu__brand--active');
        right.classList.add('menu__list--active');
        left.classList.add('menu__brand--active');
        burger.classList.add('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('menu__item--active');
        }
        
        active = true;
      } else {
        menu.classList.remove('menu--active');
        menuList.classList.remove('menu__list--active');
        brand.classList.remove('menu__brand--active');
        burger.classList.remove('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('menu__item--active');
        }
        
        active = false;
      }
    };
    
    var bindActions = function() {
      window.addEventListener('load', toggleMenu, false);
    };
    
    var init = function() {
      bindActions();
    };
    
    return {
      init: init
    };
    
  }());
  
  Menu.init();
  
}());
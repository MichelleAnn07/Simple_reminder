var Nav = (function() {
  
  var
    nav     = $('.nav'),
    burger  = $('.burger'),
    page    = $('.page'),
    section = $('.section'),
    link    = nav.find('.nav__link'),
    navH    = nav.innerHeight(),
    isOpen  = true,
    hasT    = false;
  
  var toggleNav = function() {
    nav.toggleClass('nav--active');
    burger.toggleClass('burger--close');
    shiftPage();
  };
  
  var shiftPage = function() {
    if (!isOpen) {
      page.css({
        'height' : '85vh',
        'transform': 'translateY(' + navH + 'px)',
        '-webkit-transform': 'translateY(' + navH + 'px)'
      });
      section.css({
        'height': '85vh'
      })
      isOpen = true;
    } else {
      page.css({
        'height' : '100vh',
        'transform': 'none',
        '-webkit-transform': 'none'
      });
      section.css({
        'height' : '100vh'
      })
      isOpen = false;
    }
  };
  
  var switchPage = function(e) {
    var self = $(this);
    var i = self.parents('.nav__item').index();
    var s = section.eq(i);
    var a = $('section.section--active');
    var t = $(e.target);
    
    if (!hasT) {
      if (i == a.index()) {
        return false;
      }
      a
      .addClass('section--hidden')
      .removeClass('section--active');

      s.addClass('section--active');

      hasT = true;

      a.on('transitionend webkitTransitionend', function() {
        $(this).removeClass('section--hidden');
        hasT = false;
        a.off('transitionend webkitTransitionend');
      });
    }

    return false;
  };
    
  var bindActions = function() {
    burger.on('click', toggleNav);
    link.on('click', switchPage);
    $(document).on('ready', function() {
       page.css({
        'transform': 'translateY(' + navH + 'px)',
         '-webkit-transform': 'translateY(' + navH + 'px)'
      });
    });
    $('body').on('keydown', keyNav);
  };
  
  var init = function() {
    bindActions();
  };
  
  return {
    init: init
  };
  
}());

Nav.init();
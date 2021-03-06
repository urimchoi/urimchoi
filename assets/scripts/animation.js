// Generated by CoffeeScript 1.7.1
(function() {
  var clickAnimation, elInView, lazyLoad, lazyLoadCheck, linkDelay, loadAnimation, navLoadIn, navMobileLoadIn, w, wb, wt;

  w = $(window).height();

  wt = $(window).scrollTop();

  wb = wt + w;

  elInView = function($el, offset) {
    return $el.offset().top + offset < wb;
  };

  loadAnimation = function($el, cssClass, offset) {
    return $el.each(function() {
      if (elInView($(this), 100)) {
        return $(this).addClass(cssClass);
      }
    });
  };

  lazyLoadCheck = function($el) {
    return $el.each(function() {
      if (elInView($(this), -200)) {
        return $(this).trigger('scroll.lazyLoad');
      }
    });
  };

  lazyLoad = function($el) {
    return $el.each(function() {
      return $(this).one('scroll.lazyLoad', function() {
        var src;
        src = $(this).attr('data-src');
        $(this).attr('src', src).css({
          'height': 'auto',
          'background': 'transparent'
        });
        return console.log($(this));
      });
    });
  };

  linkDelay = function() {
    return $('a:not(.social-icon-circle, .button, .external-link)').each(function() {
      return $(this).on('click', function() {
        var that;
        that = $(this);
        event.preventDefault();
        $('body').fadeOut();
        return setTimeout(function() {
          return window.location.href = that.attr('href');
        }, 500);
      });
    });
  };

  clickAnimation = function() {
    return $('#work').on('click', '.work-block', function() {
      var dest;
      $('.work-block-wrapper').each(function() {
        var that;
        that = $(this);
        $(this).children($('.work-block')).addClass('anim-flash');
        return setTimeout(function() {
          console.log(that);
          that.removeClass('anim-slideup anim-slideup-init').addClass('anim-slideleftout-' + that.index());
          return $('body').fadeOut();
        }, 100);
      });
      dest = $(this).attr('data-href');
      if (typeof dest !== "undefined" && dest !== "") {
        return setTimeout(function() {
          return window.location.href = dest;
        }, 600);
      }
    });
  };

  navLoadIn = function() {
    var $elDesktop;
    $elDesktop = $('nav#desktop-nav');
    if (wt > 100) {
      return $elDesktop.removeClass('nav-hide').addClass('nav-reveal');
    } else if (wt < 100 && $elDesktop.hasClass('nav-reveal')) {
      return $elDesktop.removeClass('nav-reveal').addClass('nav-hide');
    } else {
      return false;
    }
  };

  navMobileLoadIn = function() {
    var $elMobile;
    $elMobile = $('.nav-button');
    return $elMobile.click(function() {
      console.log('click');
      return $('.mobile-menu').slideToggle();
    });
  };

  $(document).ready(function() {
    clickAnimation();
    lazyLoad($('.screenshot'));
    linkDelay();
    return navMobileLoadIn();
  });

  $(document).scroll(function() {
    w = $(window).height();
    wt = $(window).scrollTop();
    wb = wt + w;
    loadAnimation($('.anim-slideup-init'), 'anim-slideup');
    loadAnimation($('.anim-slideright-init'), 'anim-slideright');
    lazyLoadCheck($('.screenshot'));
    loadAnimation($('.figure'), 'anim-fadein');
    return navLoadIn();
  });

}).call(this);

$(document).ready(function(){
    
  // Offcanvas Navigation
  $(".open-panel").click(function(){
    $("html").addClass("openNav");
  });

  $(".close-panel, #content").click(function(){
    $("html").removeClass("openNav");
  });

  // Trigger tabs from sidebar button
  $(".sidebar-button").click(function(){
    var target = $(this).attr("href");
    $('.o-tabs a[href=' +target+ ']').trigger("click"); // triggers 'click fndtn' event on tab 
    //alert(target);
    $('html, body').animate({
      // scrollTop: ($('.tabs').offset().top)
      scrollTop: ($('.o-tabs').offset().top)
    },333);
  });

  // Trigger tabs from bottom nav and scroll up
  $(".c-link-pagination").children('a').click(function(){
    var target = $(this).attr("href");
    $('.o-tabs a[href=' +target+ ']').trigger("click"); // triggers 'click fndtn' event on tab 
    //alert(target);
    $('html, body').animate({
      // scrollTop: ($('.tabs').offset().top)
      scrollTop: ($('.o-tabs').offset().top)
    },333);
  });

  // Overview Sidebar on mobile
  $(function() {
    if ($(window).width()<767) {
      // Move Sidebar to end of content 
      $(".c-project-sidebar").appendTo("#overviewTab > .overview-content");
      // Scroll to top of tabs when clicking sidebar button
      $(".sidebar-button").click(function() {
        $('html, body').animate({
          scrollTop: ($('.tabs').offset().top)
        },333);
      });
    } else {
      return;
    }
  });

  //Rotator
  //http://archive.plugins.jquery.com/project/RotationalStringObfuscator
  //http://www.josephfinsterwald.com/UI/Pages/Email-Obfuscation-with-JQuery.aspx
  //Not compatible with jQuery 1.7.x?

  $(function() {
    $.rotate = function(s) {
        return $.rotate13($.rotate5(s));
    }

    $.rotate5 = function(s) {
        var b = [],c,i = s.length,a = '0'.charCodeAt(),z = a + 10;
        while (i--) { 
            c = s.charCodeAt(i);
            if (c >= a && c < z) { b[i] = String.fromCharCode(((c - a + 5) % (10)) + a); }
            else { b[i] = s.charAt(i); }
        }
        return b.join('');
    };

    $.rotate13 = function(s) {
        var b = [],c,i = s.length,a = 'a'.charCodeAt(),z = a + 26,A = 'A'.charCodeAt(),Z = A + 26;
        while (i--) {
            c = s.charCodeAt(i);
            if (c >= a && c < z) { b[i] = String.fromCharCode(((c - a + 13) % (26)) + a); }
            else if (c >= A && c < Z) { b[i] = String.fromCharCode(((c - A + 13) % (26)) + A); }
            else { b[i] = s.charAt(i); }
        }
        return b.join('');
    };
  });

  $(function() {
    $('#contact').attr('href', $.rotate('znvygb:pbyva@pbyvawbuafgba.pbz')).text(
        $.rotate('pbyva@pbyvawbuafgba.pbz'));
  });

}); //


/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto. MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); 


// animation

$(document).ready(function () {
  var animation_elements = $.find('.animate');
  var web_window = $(window);

  function check_if_in_view() {
    var window_height = web_window.height();
    var window_top_position = web_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    $.each(animation_elements, function () {
      var element = $(this);
      var element_height = $(element).outerHeight();
      var element_top_position = $(element).offset().top;
      var element_bottom_position = (element_top_position + element_height);
      if (element.hasClass('animated')) { return };
      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
        element.addClass('inview');
        element.addClass('animated');
      } else {
        element.removeClass('inview');
      }
    });
  }
  $(window).on('scroll resize', function () {
    check_if_in_view();
  });
  $(window).trigger('scroll');
});

// refresh window on resize

$(window).on('resize',function(){location.reload();});
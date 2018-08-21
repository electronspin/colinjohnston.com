;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    //$.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    //$.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    //$.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    //$.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    //$.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    //$.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    //$.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    //$.fn.foundationClearing         ? $doc.foundationClearing() : null;

    //$.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);


(function($){
    
// //Dropdown
     
// $(function() {

//   // Create the dropdown base
//   $("<select />").appendTo("nav");
  
//   // Create default option "Go to..."
//   $("<option />", {
//      "selected": "selected",
//      "value"   : "",
//      "text"    : "Recent projects..."
//   }).appendTo("nav select");
  
//   // Populate dropdown with menu items
//   $("nav a").each(function() {
//    var el = $(this);
//    $("<option />", {
//        "value"   : el.attr("href"),
//        "text"    : el.text()
//    }).appendTo("nav select");
//   });
  
//   // To make dropdown actually work
//   // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
//   $("nav select").change(function() {
//     window.location = $(this).find("option:selected").val();
//   });

// });
    
// //End Dropdown    
         
	 
	 
//$(window).bind('resize', function() {
//   location.reload();
//});


// My Loader
// Wait for window load
$(window).load(function() {
// Animate loader
  $('.loading').fadeOut();
  $('#loader').delay(500).fadeOut('slow');
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

// Offcanvas Navigation

$(".open-panel").click(function(){
  $("html").addClass("openNav");
});

$(".close-panel, #content").click(function(){
  $("html").removeClass("openNav");
});


// Overview Sidebar on mobile
$(window).load(function() {
  if ($(window).width()<767) {
    // Move Sidebar to end of content 
    $(".overview-sidebar").appendTo("#overviewTab > .overview-content");
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

// Trigger tabs from sidebar button
$(".sidebar-button").click(function(){
  var target = $(this).attr("href");
  $('.tabs a[href=' +target+ ']').trigger("click"); // triggers 'click fndtn' event on tab 
  //alert(target);
  $('html, body').animate({
    scrollTop: ($('.tabs').offset().top)
  },333);
});


// Trigger tabs from bottom nav and scroll up
$(".bottom-tab-nav").click(function(){
  var target = $(this).attr("href");
  $('.tabs a[href=' +target+ ']').trigger("click"); // triggers 'click fndtn' event on tab 
  //alert(target);
  $('html, body').animate({
    scrollTop: ($('.tabs').offset().top)
  },333);
});


})(jQuery); //



/*! A fix for the iOS orientationchange zoom bug. Script by @scottjehl, rebound by @wilto. MIT / GPLv2 License.*/(function(a){function m(){d.setAttribute("content",g),h=!0}function n(){d.setAttribute("content",f),h=!1}function o(b){l=b.accelerationIncludingGravity,i=Math.abs(l.x),j=Math.abs(l.y),k=Math.abs(l.z),(!a.orientation||a.orientation===180)&&(i>7||(k>6&&j<8||k<8&&j>6)&&i>5)?h&&n():h||m()}var b=navigator.userAgent;if(!(/iPhone|iPad|iPod/.test(navigator.platform)&&/OS [1-5]_[0-9_]* like Mac OS X/i.test(b)&&b.indexOf("AppleWebKit")>-1))return;var c=a.document;if(!c.querySelector)return;var d=c.querySelector("meta[name=viewport]"),e=d&&d.getAttribute("content"),f=e+",maximum-scale=1",g=e+",maximum-scale=10",h=!0,i,j,k,l;if(!d)return;a.addEventListener("orientationchange",m,!1),a.addEventListener("devicemotion",o,!1)})(this); 

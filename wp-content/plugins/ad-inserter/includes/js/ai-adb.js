var ai_adb = false;
var ai_adb_wrapping_div_selector = ".AI_BLOCK_CLASS_NAME";
var ai_adb_debugging = AI_DATAB_AI_JS_DEBUGGING;
var ai_adb_active = false;
var ai_adb_counter = 0;
var ai_adb_overlay = AI_ADB_OVERLAY_WINDOW;
var ai_adb_message_window = AI_ADB_MESSAGE_WINDOW;
var ai_adb_message_undismissible = AI_FUNCB_GET_UNDISMISSIBLE_MESSAGE;
var ai_adb_act_cookie_name = "aiADB";
var ai_adb_pgv_cookie_name = "aiADB_PV";
var ai_adb_page_redirection_cookie_name = "aiADB_PR";
var ai_adb_message_cookie_lifetime = AI_FUNCT_GET_NO_ACTION_PERIOD;
var ai_adb_action = AI_FUNC_GET_ADB_ACTION;
var ai_adb_page_views = AI_FUNCT_GET_DELAY_ACTION;
var ai_adb_selectors = "AI_ADB_SELECTORS";
var ai_adb_redirection_url = "AI_ADB_REDIRECTION_PAGE";

function ai_adb_process_content () {
  (function ($) {

    if (ai_adb_debugging) console.log ("AI ad blocking CONTENT PROCESSING");

    $(".AI_ADB_CONTENT_CSS_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI ad blocking parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_css = $(this).data ("css");
      if (typeof ai_adb_css == "undefined") ai_adb_css = "display: none !important;";

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ('AI ad blocking CSS, css=\'' + ai_adb_css +'\'', "selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_CSS_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_CSS_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_CSS_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          var ai_adb_style = $(this).attr ("style");
          if (typeof ai_adb_style == "undefined") ai_adb_style = "";
          $(this).attr ("style", ai_adb_style + ";" + ai_adb_css);
        }
      });
    });

    $(".AI_ADB_CONTENT_DELETE_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI ad blocking DELETE, parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ("AI ad blocking DELETE, selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_DELETE_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_DELETE_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_DELETE_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          $(this).remove ();
        }
      });

    });

    $(".AI_ADB_CONTENT_REPLACE_BEGIN_CLASS").each (function () {
      var ai_adb_parent = $(this).parent ();

      if (ai_adb_debugging) console.log ("AI ad blocking REPLACE, parent", ai_adb_parent.prop ("tagName"), "id=\""+ ai_adb_parent.attr ("id")+"\"", "class=\""+ ai_adb_parent.attr ("class")+"\"");

      var ai_adb_text = $(this).data ("text");
      if (typeof ai_adb_text == "undefined") ai_adb_text = "";

      var ai_adb_css = $(this).data ("css");
      if (typeof ai_adb_css == "undefined") ai_adb_css = "";

      var ai_adb_selectors = $(this).data ("selectors");
      if (typeof ai_adb_selectors == "undefined" || ai_adb_selectors == '') ai_adb_selectors = "p";

      if (ai_adb_debugging) console.log ("AI ad blocking REPLACE, text=\'" + ai_adb_text + '\'', 'css=\'' + ai_adb_css +'\'', "selectors='" + ai_adb_selectors + "'");

      var ai_adb_action = false;
      $(ai_adb_parent).find ('.AI_ADB_CONTENT_REPLACE_BEGIN_CLASS, ' + ai_adb_selectors).each (function () {
        if ($(this).hasClass ("AI_ADB_CONTENT_REPLACE_BEGIN_CLASS")) {$(this).remove (); ai_adb_action = true;}
        else if ($(this).hasClass ("AI_ADB_CONTENT_REPLACE_END_CLASS")) {$(this).remove (); ai_adb_action = false;}
        else if (ai_adb_action) {
          if (ai_adb_text.length != 0) {
            var n = Math.round ($(this).text ().length / (ai_adb_text.length + 1));
            $(this).text (Array(n + 1).join(ai_adb_text + ' '));
          } else $(this).text ('');
          var ai_adb_style = $(this).attr ("style");
          if (typeof ai_adb_style == "undefined") ai_adb_style = "";
          $(this).attr ("style", ai_adb_style + ";" + ai_adb_css);
        }
      });
    });

  }(jQuery));
}

var ai_adb_detected = function(n) {

  if (ai_adb_debugging) console.log ("AI ad blocking DETECTED", n);

  if (!ai_adb_active) {
    ai_adb_active = true;

    (function ($) {

      $(window).ready(function () {
        if (ai_adb_debugging) console.log ("AI ad blocking block actions");

        $(".ai-adb-show").each (function () {
          $(this).css ({"display": "block", "visibility": "visible"});

          var tracking_data = $(this).data ('ai-tracking');
          if (typeof tracking_data != 'undefined') {
            var wrapping_div = $(this).closest (ai_adb_wrapping_div_selector);
            if (typeof wrapping_div.data ("ai") != "undefined") {

              if ($(this).hasClass ('ai-no-tracking')) {
                var data = JSON.parse (atob (wrapping_div.data ("ai")));
                if (typeof data !== "undefined" && data.constructor === Array) {
                  data [1] = "";
                  tracking_data = btoa (JSON.stringify (data));
                }
              }

              wrapping_div.data ("ai", tracking_data);
            }
          }

          if (ai_adb_debugging) {
            var debug_info = $(this).data ("ai-debug");
            console.log ("AI ad blocking SHOW", typeof debug_info != "undefined" ? debug_info : "");
          }
        });

        $(".ai-adb-hide").each (function () {
          $(this).css ({"display": "none", "visibility": "hidden"});
          if (ai_adb_debugging) {
            var debug_info = $(this).data ("ai-debug");
            console.log ("AI ad blocking HIDE", typeof debug_info != "undefined" ? debug_info : "");
          }
        });

//          ai_adb_process_content ();

        setTimeout (ai_adb_process_content, 10);
      });

      if (ai_adb_debugging) console.log ("AI ad blocking action check");
//        $.removeCookie (ai_adb_pgv_cookie_name, {path: "/" });

      if (ai_adb_page_views != 0) {
        var ai_adb_page_view_counter = 1;
        var cookie = $.cookie (ai_adb_pgv_cookie_name);
        if (typeof cookie != "undefined") ai_adb_page_view_counter = parseInt (cookie) + 1;
        if (ai_adb_debugging) console.log ("AI ad blocking page views cookie:", cookie, "- page view:", ai_adb_page_view_counter);
        if (ai_adb_page_view_counter < ai_adb_page_views) {
          if (ai_adb_debugging) console.log ("AI ad blocking", ai_adb_page_views, "page views not reached, no action");
          var d1 = ai_adb_page_view_counter;
          var AI_ADB_STATUS_MESSAGE=1;
          $.cookie (ai_adb_pgv_cookie_name, ai_adb_page_view_counter, {expires: 365, path: "/"});
          return;
        }
      }

      if (ai_adb_message_cookie_lifetime != 0 && (ai_adb_action != 1 || !ai_adb_message_undismissible)) {
        var cookie = $.cookie (ai_adb_act_cookie_name);
        if (ai_adb_debugging) console.log ("AI ad blocking cookie:", cookie);
        if (typeof cookie != "undefined" && cookie == "AI_CONST_AI_ADB_COOKIE_VALUE") {
          if (ai_adb_debugging) console.log ("AI ad blocking valid cookie detected, no action");
          var AI_ADB_STATUS_MESSAGE=2;
          return;
        }

        else if (ai_adb_debugging) console.log ("AI ad blocking invalid cookie");
        $.cookie (ai_adb_act_cookie_name, "AI_CONST_AI_ADB_COOKIE_VALUE", {expires: ai_adb_message_cookie_lifetime, path: "/"});
      } else $.removeCookie (ai_adb_act_cookie_name, {path: "/" });

      if (ai_adb_debugging) console.log ("AI ad blocking action", ai_adb_action);
      var AI_ADB_STATUS_MESSAGE=3;

      switch (ai_adb_action) {
        case 1:
          if (!ai_adb_message_undismissible) {
            ai_adb_overlay.click (function () {
              $(this).remove();
              ai_adb_message_window.remove();
            }).css ("cursor", "pointer");
            ai_adb_message_window.click (function () {
              $(this).remove();
              ai_adb_overlay.remove();
            }).css ("cursor", "pointer");
            window.onkeydown = function( event ) {
              if (event.keyCode === 27 ) {
                ai_adb_overlay.click ();
                ai_adb_message_window.click ();
              }
            }

            if (ai_adb_debugging) console.log ("AI ad blocking MESSAGE click detection installed");

          } else {
//                $.removeCookie (ai_adb_act_cookie_name, {path: "/" });
            }

          if (ai_adb_debugging) console.log ("AI ad blocking MESSAGE");
          $("body").prepend (ai_adb_overlay).prepend (ai_adb_message_window);
          break;
        case 2:
          if (ai_adb_redirection_url != "") {
            if (ai_adb_debugging) console.log ("AI ad blocking REDIRECTION to", ai_adb_redirection_url);

            var redirect = true;
            if (ai_adb_redirection_url.toLowerCase().substring (0, 4) == "http") {
              if (window.location.href == ai_adb_redirection_url) var redirect = false;
            } else {
                if (window.location.pathname == ai_adb_redirection_url) var redirect = false;
              }

            if (redirect) {
              var cookie = $.cookie (ai_adb_page_redirection_cookie_name);
              if (typeof cookie == "undefined") {
                var date = new Date();
                date.setTime (date.getTime() + (10 * 1000));
                $.cookie (ai_adb_page_redirection_cookie_name, window.location.href, {expires: date, path: "/" });

                window.location.replace (ai_adb_redirection_url)
              } else {
                  if (ai_adb_debugging) console.log ("AI ad blocking no redirection, cookie:", cookie);

                }
            } else {
                if (ai_adb_debugging) console.log ("AI ad blocking already on page", window.location.href);
                jQuery.removeCookie (ai_adb_page_redirection_cookie_name, {path: "/"});
              }
          }
          break;
      }

    }(jQuery));

    ai_adb = true;
  }
}


var ai_adb_undetected = function(n) {
  ai_adb_counter ++;

  if (ai_adb_debugging) console.log ("AI ad blocking not detected", n, "- counter:", ai_adb_counter);

  if (!ai_adb_active && ai_adb_counter == 3) {
    if (ai_adb_debugging) console.log ("AI ad blocking NOT DETECTED");

      var AI_ADB_STATUS_MESSAGE=4; // Check replacement code {}

//      var redirected_page = false;
//      if (ai_adb_redirection_url.toLowerCase().substring (0, 4) == "http") {
//        if (window.location.href == ai_adb_redirection_url) var redirected_page = true;
//      } else {
//          if (window.location.pathname == ai_adb_redirection_url) var redirected_page = true;
//        }

//      if (redirected_page) {
//        var cookie = jQuery.cookie (ai_adb_page_redirection_cookie_name);
//        if (typeof cookie != "undefined" && cookie.toLowerCase().substring (0, 4) == "http") {
//          if (ai_adb_debugging) console.log ("AI ad blocking returning to", cookie);
//          jQuery.removeCookie (ai_adb_page_redirection_cookie_name, {path: "/"});
//          window.location.replace (cookie);
//        }
//      }

  }
}

if (AI_DBG_AI_DEBUG_AD_BLOCKING) jQuery (document).ready (function () {ai_adb_detected (0)});

if (!document.getElementById ("AI_CONST_AI_ADB_1_NAME")){
  jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (1)});
} else {
    jQuery (document).ready (function () {ai_adb_undetected (1)});
}

if (typeof window.AI_CONST_AI_ADB_2_NAME == "undefined") {
  jQuery (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (2)});
} else {
    jQuery (document).ready (function () {ai_adb_undetected (2)});
  }

jQuery (document).ready (function ($) {
  $(window).ready (function () {


    $("#ai-adb-bar").click (function () {
      $.removeCookie (ai_adb_act_cookie_name, {path: "/" });
      $.removeCookie (ai_adb_pgv_cookie_name, {path: "/" });
      var AI_ADB_STATUS_MESSAGE=5;
    });

    if ($("#banner-advert-container img").length > 0) {
      if ($("#banner-advert-container img").outerHeight() === 0) {
        $(document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (3)});
      } else $(document).ready (function () {ai_adb_undetected (3)});
      $("#banner-advert-container img").remove();
    }

    if ((!ai_adb_active || ai_adb_debugging) && ai_adb_selectors != "") {
      var ai_adb_el_counter = 0;
      var ai_adb_el_zero = 0;
      var ai_adb_selector = ai_adb_selectors.split (",");
      $.each (ai_adb_selector, function (i) {

        if (ai_adb_debugging) console.log ("AI ad blocking selector", ai_adb_selector [i]);

        if ($(ai_adb_selector [i]).length != 0) {
          $(ai_adb_selector [i]).each (function (n) {

            if (ai_adb_debugging) console.log ("AI ad blocking element id=\"" + $(this).attr ("id") + "\" class=\"" + $(this).attr ("class") + "\" heights:", $(this).outerHeight (), $(this).innerHeight (), $(this).height ());

            ai_adb_el_counter ++;
            if ($(this).outerHeight () === 0) {
              $ (document).ready (function () {if (!ai_adb_active || ai_adb_debugging) ai_adb_detected (4)});
              ai_adb_el_zero ++;
              if (!ai_adb_debugging) return false;
            }

          });

        }
      });
      if (ai_adb_el_counter != 0 && ai_adb_el_zero == 0) $(document).ready (function () {ai_adb_undetected (4)});
    }
  });
});

/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
  if (typeof define === "function" && define.amd) {
    // AMD
    define(["jquery"], factory);
  } else if (typeof exports === "object") {
    // CommonJS
    factory(require("jquery"));
  } else {
    // Browser globals
    factory(jQuery);
  }
}(function ($) {

  var pluses = /\+/g;

  function encode(s) {
    return config.raw ? s : encodeURIComponent(s);
  }

  function decode(s) {
    return config.raw ? s : decodeURIComponent(s);
  }

  function stringifyCookieValue(value) {
    return encode(config.json ? JSON.stringify(value) : String(value));
  }

  function parseCookieValue(s) {
    if (s.indexOf('"') === 0) {
      // This is a quoted cookie as according to RFC2068, unescape...
      s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    }

    try {
      // Replace server-side written pluses with spaces.
      // If we can\'t decode the cookie, ignore it, it\'s unusable.
      // If we can\'t parse the cookie, ignore it, it\'s unusable.
      s = decodeURIComponent(s.replace(pluses, " "));
      return config.json ? JSON.parse(s) : s;
    } catch(e) {}
  }

  function read(s, converter) {
    var value = config.raw ? s : parseCookieValue(s);
    return $.isFunction(converter) ? converter(value) : value;
  }

  var config = $.cookie = function (key, value, options) {

    // Write

    if (value !== undefined && !$.isFunction(value)) {
      options = $.extend({}, config.defaults, options);

      if (typeof options.expires === "number") {
        var days = options.expires, t = options.expires = new Date();
        t.setTime(+t + days * 864e+5);
      }

      return (document.cookie = [
        encode(key), "=", stringifyCookieValue(value),
        options.expires ? "; expires=" + options.expires.toUTCString() : "", // use expires attribute, max-age is not supported by IE
        options.path    ? "; path=" + options.path : "",
        options.domain  ? "; domain=" + options.domain : "",
        options.secure  ? "; secure" : ""
      ].join(""));
    }

    // Read

    var result = key ? undefined : {};

    // To prevent the for loop in the first place assign an empty array
    // in case there are no cookies at all. Also prevents odd result when
    // calling $.cookie().
    var cookies = document.cookie ? document.cookie.split("; ") : [];

    for (var i = 0, l = cookies.length; i < l; i++) {
      var parts = cookies[i].split("=");
      var name = decode(parts.shift());
      var cookie = parts.join("=");

      if (key && key === name) {
        // If second argument (value) is a function it\'s a converter...
        result = read(cookie, value);
        break;
      }

      // Prevent storing a cookie that we couldn\'t decode.
      if (!key && (cookie = read(cookie)) !== undefined) {
        result[name] = cookie;
      }
    }

    return result;
  };

  config.defaults = {};

  $.removeCookie = function (key, options) {
    if ($.cookie(key) === undefined) {
      return false;
    }

    // Must not alter options, thus extending a fresh object...
    $.cookie(key, "", $.extend({}, options, { expires: -1 }));
    return !$.cookie(key);
  };

}));


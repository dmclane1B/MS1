/*-------------------------------------------------------------------------------
 * File       	    : form.errors.js (LPMSV Web Application - v2.0.1)
 * Description		: controls form errors and warnings
 * Website          : http://www.lpmsiliconvalley.com (C)2017
 * Last Updated		: 05/31/2017
---------------------------------------------------------------------------------*/
/* Define Application Form Error Variables 
----------------------------------------------*/
var LegacyAppForm = function() {
    var isAngular = false;
    var isAspMvc = false;
    var _default = '#27292c';
    var primary = '#29c7ca';
    var danger = '#cd4237';
    var success = '#1dbc9c';
    var warning = '#FFC107';
    var info = '#34b5dc';
    var inverse = '#55606e';
    var touchScrollSpeed = 80;
    var loadingMarkUp =
        "<div class='loading'>\
            <div class='loader-circle'>\
            </div>\
            <div class='loader-line-mask'>\
                <div class='loader-line'>\
                </div>\
            </div>\
            <div class='glow'>\
            </div>\
            <div class='logo' style='background-image:url(\"" + getAssetPath("assets/img/logo.png") + "\")'>\
            </div>\
        </div>"
    /* Color : Change HEX to RGBA values
    ----------------------------------------------*/		
    function hextoRgba(hex, opacity) {
        hex = hex.replace('#', '');
        var r = parseInt(hex.substring(0, 2), 16);
        var g = parseInt(hex.substring(2, 4), 16);
        var b = parseInt(hex.substring(4, 6), 16);
        var result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
        return result;
    }
    /* Form Elements Color 'Conditions'
    ----------------------------------------------*/		
    function getcolor(colorString) {
        switch (colorString) {
        case ("default"):
            return _default;
        case ("primary"):
            return primary;
        case ("danger"):
            return danger;
        case ("warning"):
            return warning;
        case ("info"):
            return info;
        case ("success"):
            return success;
        case ("inverse"):
            return inverse;
        default:
            return colorString;
        }
    }
    /* Create Array
    ----------------------------------------------*/	
    function stringToIntArray(str) {
        if (str.indexOf(':') > -1)
            return str.split(",");
        var array = str.split(",");
        for (var i = 0; i < array.length; i++) {
            array[i] = +array[i];
        }
        for (var i = 0; i < array.length; i++) {
            array[i] = parseInt(array[i], 10);
        }
        return array;
    }
    /* Cookies
    ----------------------------------------------*/		
    function addCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEq = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEq) == 0) return c.substring(nameEq.length, c.length);
        }
        return null;
    }
    function removeCookie(name) {
        addCookie(name, "", -1);
    }
    function getAssetPath(assetPath) {
        if (isAspMvc) {
            return "/" + assetPath;
        } else {
            return assetPath;
        }
    }
    return {
        /* Define Global Variables
        ----------------------------------------------*/
        isAngular: function() {
            return isAngular
        },
        isAspMvc: function() {
            return isAspMvc
        },
        _default: function() {
            return _default;
        },
        primary: function() {
            return primary;
        },
        danger: function() {
            return danger;
        },
        success: function() {
            return success;
        },
        warning: function() {
            return warning;
        },
        info: function() {
            return info;
        },
        inverse: function() {
            return inverse;
        },
        skinColors: function() {
            return {
                'default': '#29c7ca',
                'light-green': '#5bd2b8',
                'green': '#2cc491',
                'dark-green': '#00828c',
                'light-blue': '#26c1ff',
                'blue': '#0c9fd6',
                'velvet': '#8c5dad',
                'pink': '#e076ed',
                'red': '#ff5b57',
                'orange': '#f86e49',
                'light-orange': '#f07f7f',
                'yellow': '#ffd967'
            };
        },
        init: function() {
            /* Initialize Animsition Effets */
            $(".animsition").animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.sidebar-menu .menu a[href]:not([target="_blank"]):not([href^=#]):not([href=""])',
                loading: true,
                loadingParentElement: 'body',
                loadingClass: 'animsition-loading',
                loadingInner: loadingMarkUp,
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration'],
                overlay: false,
                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body',
                transition: function(url) { window.location.href = url; }
            });
        },
        /* Hex to RGBA
		----------------------------------------------*/
        hextoRgba: function(hex, opacity) {
            return hextoRgba(hex, opacity);
        },
        /* Get Color from String
		----------------------------------------------*/
        getcolor: function(colorString) {
            return getcolor(colorString);
        },
        /* String to Array
		----------------------------------------------*/
        stringToIntArray: function(str) {
            return stringToIntArray(str);
        },
        /* Add or Update Cookies
		----------------------------------------------*/
        addCookie: function(name, value, days) {
            return addCookie(name, value, days);
        },
        /* Get Cookies
        ----------------------------------------------*/
        getCookie: function(name) {
            return getCookie(name);
        },
        /* Remove Cookies
		----------------------------------------------*/
        removeCookie: function(name) {
            return removeCookie(name);
        },
        getAssetPath: function (assetPath) {
            return getAssetPath(assetPath);
        },
    };
}();
jQuery(document).ready(function() {
    if (LegacyAppForm.isAngular() === false) {
        LegacyAppForm.init();
    }
});


/* ========= END DOCUMENT ========================== */
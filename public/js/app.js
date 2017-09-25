/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("\r\n/**\r\n * First we will load all of this project's JavaScript dependencies which\r\n * include Vue and Vue Resource. This gives a great starting point for\r\n * building robust, powerful web applications using Vue and Laravel.\r\n */\r\n\r\n// require('./bootstrap');\r\n\r\n/**\r\n * Next, we will create a fresh Vue application instance and attach it to\r\n * the page. Then, you may begin adding components to this application\r\n * or customize the JavaScript scaffolding to fit your unique needs.\r\n */\r\n/*\r\nVue.component('example', require('./components/Example.vue'));\r\n\r\nconst app = new Vue({\r\n    el: '#app'\r\n});\r\n*/\r\n\r\njQuery(document).ready(function($) {\r\n\r\n    $('#myCarousel').carousel({\r\n        interval: 5000\r\n    });\r\n\r\n    //Handles the carousel thumbnails\r\n    $('[id^=carousel-selector-]').click(function () {\r\n        var id_selector = $(this).attr(\"id\");\r\n        try {\r\n            var id = /-(\\d+)$/.exec(id_selector)[1];\r\n            console.log(id_selector, id);\r\n            jQuery('#myCarousel').carousel(parseInt(id));\r\n        } catch (e) {\r\n            console.log('Regex failed!', e);\r\n        }\r\n    });\r\n    // When the carousel slides, auto update the text\r\n    $('#myCarousel').on('slid.bs.carousel', function (e) {\r\n        var id = $('.item.active').data('slide-number');\r\n        $('#carousel-text').html($('#slide-content-'+id).html());\r\n    });\r\n});\r\n\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcz84YjY3Il0sInNvdXJjZXNDb250ZW50IjpbIlxyXG4vKipcclxuICogRmlyc3Qgd2Ugd2lsbCBsb2FkIGFsbCBvZiB0aGlzIHByb2plY3QncyBKYXZhU2NyaXB0IGRlcGVuZGVuY2llcyB3aGljaFxyXG4gKiBpbmNsdWRlIFZ1ZSBhbmQgVnVlIFJlc291cmNlLiBUaGlzIGdpdmVzIGEgZ3JlYXQgc3RhcnRpbmcgcG9pbnQgZm9yXHJcbiAqIGJ1aWxkaW5nIHJvYnVzdCwgcG93ZXJmdWwgd2ViIGFwcGxpY2F0aW9ucyB1c2luZyBWdWUgYW5kIExhcmF2ZWwuXHJcbiAqL1xyXG5cclxuLy8gcmVxdWlyZSgnLi9ib290c3RyYXAnKTtcclxuXHJcbi8qKlxyXG4gKiBOZXh0LCB3ZSB3aWxsIGNyZWF0ZSBhIGZyZXNoIFZ1ZSBhcHBsaWNhdGlvbiBpbnN0YW5jZSBhbmQgYXR0YWNoIGl0IHRvXHJcbiAqIHRoZSBwYWdlLiBUaGVuLCB5b3UgbWF5IGJlZ2luIGFkZGluZyBjb21wb25lbnRzIHRvIHRoaXMgYXBwbGljYXRpb25cclxuICogb3IgY3VzdG9taXplIHRoZSBKYXZhU2NyaXB0IHNjYWZmb2xkaW5nIHRvIGZpdCB5b3VyIHVuaXF1ZSBuZWVkcy5cclxuICovXHJcbi8qXHJcblZ1ZS5jb21wb25lbnQoJ2V4YW1wbGUnLCByZXF1aXJlKCcuL2NvbXBvbmVudHMvRXhhbXBsZS52dWUnKSk7XHJcblxyXG5jb25zdCBhcHAgPSBuZXcgVnVlKHtcclxuICAgIGVsOiAnI2FwcCdcclxufSk7XHJcbiovXHJcblxyXG5qUXVlcnkoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCQpIHtcclxuXHJcbiAgICAkKCcjbXlDYXJvdXNlbCcpLmNhcm91c2VsKHtcclxuICAgICAgICBpbnRlcnZhbDogNTAwMFxyXG4gICAgfSk7XHJcblxyXG4gICAgLy9IYW5kbGVzIHRoZSBjYXJvdXNlbCB0aHVtYm5haWxzXHJcbiAgICAkKCdbaWRePWNhcm91c2VsLXNlbGVjdG9yLV0nKS5jbGljayhmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgdmFyIGlkX3NlbGVjdG9yID0gJCh0aGlzKS5hdHRyKFwiaWRcIik7XHJcbiAgICAgICAgdHJ5IHtcclxuICAgICAgICAgICAgdmFyIGlkID0gLy0oXFxkKykkLy5leGVjKGlkX3NlbGVjdG9yKVsxXTtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coaWRfc2VsZWN0b3IsIGlkKTtcclxuICAgICAgICAgICAgalF1ZXJ5KCcjbXlDYXJvdXNlbCcpLmNhcm91c2VsKHBhcnNlSW50KGlkKSk7XHJcbiAgICAgICAgfSBjYXRjaCAoZSkge1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygnUmVnZXggZmFpbGVkIScsIGUpO1xyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgLy8gV2hlbiB0aGUgY2Fyb3VzZWwgc2xpZGVzLCBhdXRvIHVwZGF0ZSB0aGUgdGV4dFxyXG4gICAgJCgnI215Q2Fyb3VzZWwnKS5vbignc2xpZC5icy5jYXJvdXNlbCcsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgdmFyIGlkID0gJCgnLml0ZW0uYWN0aXZlJykuZGF0YSgnc2xpZGUtbnVtYmVyJyk7XHJcbiAgICAgICAgJCgnI2Nhcm91c2VsLXRleHQnKS5odG1sKCQoJyNzbGlkZS1jb250ZW50LScraWQpLmh0bWwoKSk7XHJcbiAgICB9KTtcclxufSk7XHJcblxyXG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gcmVzb3VyY2VzL2Fzc2V0cy9qcy9hcHAuanMiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBc0JBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);
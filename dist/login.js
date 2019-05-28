/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/login.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/library/staff.js":
/*!******************************!*\
  !*** ./src/library/staff.js ***!
  \******************************/
/*! exports provided: Staff */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"Staff\", function() { return Staff; });\n\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar Staff =\n/*#__PURE__*/\nfunction () {\n  function Staff() {\n    _classCallCheck(this, Staff);\n\n    this.email = 'samwize.inc@gmail.com';\n    this.password = 'pwd-secret';\n  }\n\n  _createClass(Staff, [{\n    key: \"ajax_login\",\n    value: function ajax_login() {\n      $url = \"http://localhost/src/php/login.php\";\n      $data = {\n        email: $('#email').val(),\n        password: $('#password').val()\n      };\n      $.ajax({\n        type: \"POST\",\n        url: url,\n        data: data,\n        beforeSend: function beforeSend() {\n          document.getElementById('progress').style.display = 'block';\n        },\n        success: function success(data, xhr) {},\n        dataType: \"json\"\n      });\n    }\n  }, {\n    key: \"validate\",\n    value: function validate(email, password) {\n      var emailReg = \"/^([w-.]+@([w-]+.)+[w-]{2,4})?$/\";\n\n      if (email === \"\" && password === \"\") {\n        return false;\n      } else if (email.match(emailReg)) {\n        return false;\n      }\n\n      return true;\n    }\n  }], [{\n    key: \"yield\",\n    value: function _yield() {\n      console.log(this === \"window\");\n      console.log(this);\n    }\n  }, {\n    key: \"register\",\n    value: function register() {\n      console.log('processing..');\n      document.getElementById('progress').style.display = 'block';\n\n      if (window.XMLHttpRequest) {\n        var XHR = new XMLHttpRequest();\n      } else {\n        var XHR = new ActiveXObject(\"Microsoft.XMLHTTP\");\n      }\n\n      var urlEncodedDataPairs = [];\n      var urlEncodedData;\n      var name;\n      var gender;\n\n      if (document.getElementById('male').checked) {\n        gender = document.getElementById('male').value;\n      } else if (document.getElementById('female').checked) {\n        gender = document.getElementById('female').value;\n      }\n\n      var data = {\n        firstname: document.getElementById('firstname').value,\n        email: document.getElementById('email').value,\n        password: document.getElementById('password').value,\n        pin: document.getElementById('pin').value,\n        gender: gender,\n        role: document.getElementById('role').value\n      };\n      console.log(data);\n\n      for (name in data) {\n        urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));\n      }\n\n      urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');\n\n      XHR.onreadystatechange = function () {\n        if (this.readyState == 4 && this.status == 200) {\n          document.getElementById('progress').style.display = 'none';\n          document.getElementById('log').classList.remove('hide');\n          document.getElementById(\"log\").getElementsByTagName('p')[0].innerHTML = '<i class=\"material-icons\">check</i>' + this.responseText;\n          console.log(this.responseText);\n        }\n      };\n\n      XHR.addEventListener('error', function (event) {\n        alert('Oops! Something went wrong.');\n      });\n      XHR.open('POST', 'http://localhost/lexuspos/src/php/register.php');\n      XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');\n      XHR.send(urlEncodedData);\n    }\n  }, {\n    key: \"login\",\n    value: function login() {\n      console.log('processing..');\n      document.getElementById('progress').style.display = 'block';\n\n      if (window.XMLHttpRequest) {\n        var XHR = new XMLHttpRequest();\n      } else {\n        var XHR = new ActiveXObject(\"Microsoft.XMLHTTP\");\n      }\n\n      var urlEncodedDataPairs = [];\n      var urlEncodedData;\n      var name;\n      var data = {\n        email: document.getElementById('email').value,\n        password: document.getElementById('password').value\n      };\n\n      for (name in data) {\n        urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));\n      }\n\n      urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');\n\n      XHR.onreadystatechange = function () {\n        if (this.readyState == 4 && this.status == 200) {\n          var log = JSON.parse(this.responseText);\n          document.getElementById('progress').style.display = 'none';\n          document.getElementById('log').classList.remove('hide');\n          document.getElementById(\"log\").getElementsByTagName('p')[0].innerHTML = '<i class=\"material-icons\">check</i>' + log.msg;\n          console.log(log.msg);\n\n          if (log.status === true) {\n            window.location = \"http://localhost/lexuspos/dashboard\";\n          }\n        }\n      };\n\n      XHR.addEventListener('error', function (event) {\n        alert('Oops! Something went wrong.');\n      });\n      XHR.open('POST', 'http://localhost/lexuspos/src/php/login.php');\n      XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');\n      XHR.send(urlEncodedData);\n    }\n  }]);\n\n  return Staff;\n}();\n\n // module.exports = { sugar };//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvbGlicmFyeS9zdGFmZi5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3NyYy9saWJyYXJ5L3N0YWZmLmpzP2U1NWMiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCJcclxuXHJcblxyXG5jbGFzcyBTdGFmZiB7XHJcblx0Y29uc3RydWN0b3IoKXtcclxuXHRcdHRoaXMuZW1haWwgPSAnc2Ftd2l6ZS5pbmNAZ21haWwuY29tJztcclxuXHRcdHRoaXMucGFzc3dvcmQgPSAncHdkLXNlY3JldCc7XHJcblx0fVxyXG5cclxuXHRzdGF0aWMgeWllbGQoKXtcclxuXHRcdGNvbnNvbGUubG9nKHRoaXMgPT09IFwid2luZG93XCIpO1xyXG5cdFx0Y29uc29sZS5sb2codGhpcyk7XHJcblx0fVxyXG5cclxuXHRzdGF0aWMgcmVnaXN0ZXIoKXtcclxuXHRcdGNvbnNvbGUubG9nKCdwcm9jZXNzaW5nLi4nKTtcclxuXHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9ncmVzcycpLnN0eWxlLmRpc3BsYXkgPSAnYmxvY2snO1xyXG5cdFx0aWYgKHdpbmRvdy5YTUxIdHRwUmVxdWVzdCkge1xyXG5cdFx0XHR2YXIgWEhSID0gbmV3IFhNTEh0dHBSZXF1ZXN0KCk7XHJcblx0XHR9XHJcblx0XHRlbHNlIHtcclxuXHRcdFx0dmFyIFhIUiA9IG5ldyBBY3RpdmVYT2JqZWN0KFwiTWljcm9zb2Z0LlhNTEhUVFBcIik7XHJcblx0XHR9XHJcblxyXG5cdFx0dmFyIHVybEVuY29kZWREYXRhUGFpcnMgPSBbXTtcclxuXHRcdHZhciB1cmxFbmNvZGVkRGF0YTtcclxuXHRcdHZhciBuYW1lO1xyXG5cdFx0dmFyIGdlbmRlcjtcclxuXHJcblx0XHRpZihkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWFsZScpLmNoZWNrZWQpe1xyXG5cdFx0XHRnZW5kZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbWFsZScpLnZhbHVlO1xyXG5cdFx0fWVsc2UgaWYoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2ZlbWFsZScpLmNoZWNrZWQpe1xyXG5cdFx0XHRnZW5kZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZmVtYWxlJykudmFsdWU7XHJcblx0XHR9XHJcblxyXG5cdFx0dmFyIGRhdGEgPSB7XHJcblx0XHRcdGZpcnN0bmFtZTogZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2ZpcnN0bmFtZScpLnZhbHVlLFxyXG5cdFx0XHRlbWFpbDogZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2VtYWlsJykudmFsdWUsXHJcblx0XHRcdHBhc3N3b3JkOiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGFzc3dvcmQnKS52YWx1ZSxcclxuXHRcdFx0cGluOiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGluJykudmFsdWUsXHJcblx0XHRcdGdlbmRlcjogZ2VuZGVyLFxyXG5cdFx0XHRyb2xlOiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncm9sZScpLnZhbHVlXHJcblx0XHR9XHJcblx0XHRcclxuXHRcdGNvbnNvbGUubG9nKGRhdGEpO1xyXG5cclxuXHJcblx0XHRmb3IobmFtZSBpbiBkYXRhKSB7XHJcblx0XHRcdHVybEVuY29kZWREYXRhUGFpcnMucHVzaChlbmNvZGVVUklDb21wb25lbnQobmFtZSkgKyAnPScgKyBlbmNvZGVVUklDb21wb25lbnQoZGF0YVtuYW1lXSkpO1xyXG5cdFx0fVxyXG5cdFx0dXJsRW5jb2RlZERhdGEgPSB1cmxFbmNvZGVkRGF0YVBhaXJzLmpvaW4oJyYnKS5yZXBsYWNlKC8lMjAvZywgJysnKTtcclxuXHJcblx0XHRYSFIub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKSB7XHJcblx0XHRcdGlmICh0aGlzLnJlYWR5U3RhdGUgPT0gNCAmJiB0aGlzLnN0YXR1cyA9PSAyMDApIHtcclxuXHRcdFx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncHJvZ3Jlc3MnKS5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xyXG5cdFx0XHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsb2cnKS5jbGFzc0xpc3QucmVtb3ZlKCdoaWRlJyk7XHJcblx0XHRcdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJsb2dcIikuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3AnKVswXS5pbm5lckhUTUwgPSAnPGkgY2xhc3M9XCJtYXRlcmlhbC1pY29uc1wiPmNoZWNrPC9pPicrdGhpcy5yZXNwb25zZVRleHQ7XHJcblx0XHRcdFx0Y29uc29sZS5sb2codGhpcy5yZXNwb25zZVRleHQpO1xyXG5cdFx0XHR9XHJcblx0XHR9O1xyXG5cdFx0WEhSLmFkZEV2ZW50TGlzdGVuZXIoJ2Vycm9yJywgZnVuY3Rpb24oZXZlbnQpIHtcclxuXHRcdFx0YWxlcnQoJ09vcHMhIFNvbWV0aGluZyB3ZW50IHdyb25nLicpO1xyXG5cdFx0fSk7XHJcblx0XHRYSFIub3BlbignUE9TVCcsICdodHRwOi8vbG9jYWxob3N0L2xleHVzcG9zL3NyYy9waHAvcmVnaXN0ZXIucGhwJyk7XHJcblx0XHRYSFIuc2V0UmVxdWVzdEhlYWRlcignQ29udGVudC1UeXBlJywgJ2FwcGxpY2F0aW9uL3gtd3d3LWZvcm0tdXJsZW5jb2RlZCcpO1xyXG5cclxuXHRcdFhIUi5zZW5kKHVybEVuY29kZWREYXRhKTtcclxuXHR9XHJcblxyXG5cdHN0YXRpYyBsb2dpbigpe1xyXG5cdFx0Y29uc29sZS5sb2coJ3Byb2Nlc3NpbmcuLicpO1xyXG5cdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Byb2dyZXNzJykuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XHJcblx0XHRpZiAod2luZG93LlhNTEh0dHBSZXF1ZXN0KSB7XHJcblx0XHRcdHZhciBYSFIgPSBuZXcgWE1MSHR0cFJlcXVlc3QoKTtcclxuXHRcdH1cclxuXHRcdGVsc2Uge1xyXG5cdFx0XHR2YXIgWEhSID0gbmV3IEFjdGl2ZVhPYmplY3QoXCJNaWNyb3NvZnQuWE1MSFRUUFwiKTtcclxuXHRcdH1cclxuXHJcblx0XHR2YXIgdXJsRW5jb2RlZERhdGFQYWlycyA9IFtdO1xyXG5cdFx0dmFyIHVybEVuY29kZWREYXRhO1xyXG5cdFx0dmFyIG5hbWU7XHJcblx0XHR2YXIgZGF0YSA9IHtcclxuXHRcdFx0ZW1haWw6IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdlbWFpbCcpLnZhbHVlLFxyXG5cdFx0XHRwYXNzd29yZDogZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Bhc3N3b3JkJykudmFsdWVcclxuXHRcdH1cclxuXHJcblx0XHRmb3IobmFtZSBpbiBkYXRhKSB7XHJcblx0XHRcdHVybEVuY29kZWREYXRhUGFpcnMucHVzaChlbmNvZGVVUklDb21wb25lbnQobmFtZSkgKyAnPScgKyBlbmNvZGVVUklDb21wb25lbnQoZGF0YVtuYW1lXSkpO1xyXG5cdFx0fVxyXG5cdFx0dXJsRW5jb2RlZERhdGEgPSB1cmxFbmNvZGVkRGF0YVBhaXJzLmpvaW4oJyYnKS5yZXBsYWNlKC8lMjAvZywgJysnKTtcclxuXHJcblx0XHRYSFIub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKSB7XHJcblx0XHRcdGlmICh0aGlzLnJlYWR5U3RhdGUgPT0gNCAmJiB0aGlzLnN0YXR1cyA9PSAyMDApIHtcclxuXHRcdFx0XHR2YXIgbG9nID0gSlNPTi5wYXJzZSh0aGlzLnJlc3BvbnNlVGV4dCk7IFxyXG5cdFx0XHRcdGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdwcm9ncmVzcycpLnN0eWxlLmRpc3BsYXkgPSAnbm9uZSc7XHJcblx0XHRcdFx0ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2xvZycpLmNsYXNzTGlzdC5yZW1vdmUoJ2hpZGUnKTtcclxuXHRcdFx0XHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImxvZ1wiKS5nZXRFbGVtZW50c0J5VGFnTmFtZSgncCcpWzBdLmlubmVySFRNTCA9ICc8aSBjbGFzcz1cIm1hdGVyaWFsLWljb25zXCI+Y2hlY2s8L2k+Jytsb2cubXNnO1xyXG5cdFx0XHRcdGNvbnNvbGUubG9nKGxvZy5tc2cpO1xyXG5cdFx0XHRcdGlmKGxvZy5zdGF0dXMgPT09IHRydWUpeyB3aW5kb3cubG9jYXRpb24gPSBcImh0dHA6Ly9sb2NhbGhvc3QvbGV4dXNwb3MvZGFzaGJvYXJkXCI7IH1cclxuXHRcdFx0fVxyXG5cdFx0fTtcclxuXHRcdFhIUi5hZGRFdmVudExpc3RlbmVyKCdlcnJvcicsIGZ1bmN0aW9uKGV2ZW50KSB7XHJcblx0XHRcdGFsZXJ0KCdPb3BzISBTb21ldGhpbmcgd2VudCB3cm9uZy4nKTtcclxuXHRcdH0pO1xyXG5cdFx0WEhSLm9wZW4oJ1BPU1QnLCAnaHR0cDovL2xvY2FsaG9zdC9sZXh1c3Bvcy9zcmMvcGhwL2xvZ2luLnBocCcpO1xyXG5cdFx0WEhSLnNldFJlcXVlc3RIZWFkZXIoJ0NvbnRlbnQtVHlwZScsICdhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQnKTtcclxuXHJcblx0XHRYSFIuc2VuZCh1cmxFbmNvZGVkRGF0YSk7XHJcblx0fVxyXG5cclxuXHJcblx0YWpheF9sb2dpbigpe1xyXG5cdFx0JHVybCA9IFwiaHR0cDovL2xvY2FsaG9zdC9zcmMvcGhwL2xvZ2luLnBocFwiO1xyXG5cdFx0JGRhdGEgPSB7XHJcblx0XHRcdGVtYWlsOiAkKCcjZW1haWwnKS52YWwoKSxcclxuXHRcdFx0cGFzc3dvcmQ6ICQoJyNwYXNzd29yZCcpLnZhbCgpXHJcblx0XHR9O1xyXG5cclxuXHRcdCQuYWpheCh7XHJcblx0XHQgIHR5cGU6IFwiUE9TVFwiLFxyXG5cdFx0ICB1cmw6IHVybCxcclxuXHRcdCAgZGF0YTogZGF0YSxcclxuXHRcdCAgYmVmb3JlU2VuZDogZnVuY3Rpb24oKXtcclxuXHRcdCAgXHRkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncHJvZ3Jlc3MnKS5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcclxuXHRcdCAgfSxcclxuXHRcdCAgc3VjY2VzczogZnVuY3Rpb24oZGF0YSwgeGhyKXtcclxuXHJcblx0XHQgIH0sXHJcblx0XHQgIGRhdGFUeXBlOiBcImpzb25cIlxyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHR2YWxpZGF0ZShlbWFpbCwgcGFzc3dvcmQpe1xyXG5cdFx0dmFyIGVtYWlsUmVnID0gIFwiL14oW3ctLl0rQChbdy1dKy4pK1t3LV17Miw0fSk/JC9cIjtcclxuXHRcdGlmKGVtYWlsID09PSBcIlwiICYmIHBhc3N3b3JkID09PSBcIlwiKXtcclxuXHRcdFx0cmV0dXJuIGZhbHNlO1xyXG5cdFx0fWVsc2UgaWYoZW1haWwubWF0Y2goZW1haWxSZWcpKXtcclxuXHRcdFx0cmV0dXJuIGZhbHNlO1xyXG5cdFx0fVxyXG5cdFx0cmV0dXJuIHRydWU7XHJcblx0fVxyXG59XHJcblxyXG5leHBvcnQgeyBTdGFmZiB9O1xyXG5cclxuLy8gbW9kdWxlLmV4cG9ydHMgPSB7IHN1Z2FyIH07Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFDQTs7Ozs7OztBQUVBOzs7QUFDQTtBQUFBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFDQTs7O0FBd0dBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFGQTtBQUtBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFHQTtBQVZBO0FBWUE7OztBQUVBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7OztBQXBJQTtBQUNBO0FBQ0E7QUFDQTs7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFOQTtBQVNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTs7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFGQTtBQUNBO0FBSUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUNBOzs7Ozs7QUFtQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/library/staff.js\n");

/***/ }),

/***/ "./src/login.js":
/*!**********************!*\
  !*** ./src/login.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _library_staff__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./library/staff */ \"./src/library/staff.js\");\n // document.getElementsByClassName('login-form')[0]\n\ndocument.forms['login'].onsubmit = function (event) {\n  _library_staff__WEBPACK_IMPORTED_MODULE_0__[\"Staff\"].login();\n  event.preventDefault(); // or return false;\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvbG9naW4uanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvbG9naW4uanM/MzUyZiJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgeyBTdGFmZiB9IGZyb20gJy4vbGlicmFyeS9zdGFmZic7XHJcblxyXG4vLyBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdsb2dpbi1mb3JtJylbMF1cclxuZG9jdW1lbnQuZm9ybXNbJ2xvZ2luJ10ub25zdWJtaXQgPSBmdW5jdGlvbihldmVudCl7XHJcblx0U3RhZmYubG9naW4oKTtcclxuXHRldmVudC5wcmV2ZW50RGVmYXVsdCgpOyAvLyBvciByZXR1cm4gZmFsc2U7XHJcbn0iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./src/login.js\n");

/***/ })

/******/ });
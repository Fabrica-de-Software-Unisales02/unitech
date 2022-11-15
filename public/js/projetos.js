/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/projetos.js ***!
  \**********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var server = '35.247.209.51';
init($('#projetos'), server);
$('[name="form-type"]').change(function (e) {
  var hiddenables = $('[hiddenable]');
  hiddenables.prop("disabled", true);
  hiddenables.addClass("hidden");
  $("[".concat(e.target.value, "]")).prop("disabled", false);
  $("[".concat(e.target.value, "]")).removeClass("hidden");
});
function init(input, server) {
  var url = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
  var params = input.attr('params');
  input.empty();
  $.ajax({
    url: url ? url + "&conditions=".concat(params) : "http://".concat(server, "/api/projeto/?conditions=").concat(params),
    dataType: "json"
  }).then(function (data) {
    var items = data.current_page ? data.data : data;
    var links = data.current_page ? data.links : null;
    items.forEach(function (item) {
      appendProject(input, item.titulo, item.descricao);
    });
    document.getElementById('pagination').innerHTML = '';
    links.forEach(function (link) {
      if (link.url) appendLink(link.label, link.url, link.active);
    });
  });
}
function appendLink(page, url, active) {
  var links = document.getElementById('pagination');
  var li = document.createElement('li');
  var anch = document.createElement('a');
  li.classList.add('page-item');
  active ? anch.classList.add('page-link', 'bg-primary', 'text-dark') : anch.classList.add('page-link', 'bg-dark', 'text-primary');
  anch.innerHTML = page;
  anch.href = url;
  anch.addEventListener('click', function (e) {
    e.preventDefault();
    init($('#projetos'), null, url);
    document.querySelector('h2').focus();
  });
  li.append(anch);
  links.append(li);
}
function appendProject(input, title, text) {
  // let col = document.createElement('div');
  var card = document.createElement('div');
  var card_body = document.createElement('div');
  var card_title = document.createElement('h5');
  var card_text = document.createElement('p');
  card.classList.add('col-md-4', 'card', 'bg-dark');
  card_body.classList.add('card-body');
  card_title.classList.add('card-title');
  card_text.classList.add('card-text');
  card_title.append(title);
  card_text.append(text);

  // card.append(card);
  card.append(card_body);
  card_body.append(card_title);
  card_body.append(card_text);
  input.append(card);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (appendProject);
/******/ })()
;
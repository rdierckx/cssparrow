// Navigation with panel system
// --------------------------------------------------
// /!\ This module need panel-nav.scss to works

document.addEventListener("DOMContentLoaded", function() {
	var panelNavBtn = document.querySelector('.panel-nav--btn');

	panelNavBtn.onclick = function() {
		document.querySelector("body").classList.toggle('main-nav-open');
		return false
	}
});
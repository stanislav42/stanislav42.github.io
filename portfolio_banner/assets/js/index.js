"use strict";

(function () {
	"use strict";

	function Carousel(setting) {
		var _this = this;

		if (document.querySelector(setting.wrap) === null) {
			console.error("Carousel not fount selector " + setting.wrap);
			return;
		}

		/* Scope privates methods and properties */
		var privates = {},
		    xDown = undefined,
		    yDown = undefined,
		    xUp = undefined,
		    yUp = undefined,
		    xDiff = undefined,
		    yDiff = undefined;

		/* Public methods */
		// Prev slide
		this.prev_slide = function () {
			if (!privates.isAnimationEnd) {
				return;
			}

			privates.isAnimationEnd = false;

			--privates.opt.position;

			if (privates.opt.position < 0) {
				privates.sel.wrap.classList.add('s-notransition');
				privates.sel.wrap.style["transform"] = "translateX(-" + privates.opt.max_position + "00%)";
				privates.opt.position = privates.opt.max_position - 1;
			}

			setTimeout(function () {
				privates.sel.wrap.classList.remove('s-notransition');
				privates.sel.wrap.style["transform"] = "translateX(-" + privates.opt.position + "00%)";
			}, 10);

			privates.sel.wrap.addEventListener('transitionend', function () {
				privates.isAnimationEnd = true;
			});

			if (privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};

		// Next slide
		this.next_slide = function () {
			if (!privates.isAnimationEnd) {
				return;
			}

			privates.isAnimationEnd = false;

			if (privates.opt.position < privates.opt.max_position) {
				++privates.opt.position;
			}

			privates.sel.wrap.classList.remove('s-notransition');
			privates.sel.wrap.style["transform"] = "translateX(-" + privates.opt.position + "00%)";

			privates.sel.wrap.addEventListener('transitionend', function () {
				if (privates.opt.position >= privates.opt.max_position) {
					privates.sel.wrap.style["transform"] = 'translateX(0)';
					privates.sel.wrap.classList.add('s-notransition');
					privates.opt.position = 0;
				}

				privates.isAnimationEnd = true;
			});

			if (privates.setting.autoplay === true) {
				privates.timer.become();
			}
		};

		// Pause timer carousel
		this.pause = function () {
			if (privates.setting.autoplay === true) {
				privates.timer.pause();
			}
		};

		// Become timer carousel
		this.become = function () {
			var autoplayDelay = arguments.length <= 0 || arguments[0] === undefined ? privates.setting.autoplayDelay : arguments[0];

			if (privates.setting.autoplay === true) {
				privates.setting.autoplayDelay = autoplayDelay;
				privates.timer.become();
			}
		};

		// Go to
		this.goto = function (index) {
			privates.opt.position = index - 1;
			_this.next_slide();
		};

		// Item
		this.index = function () {
			return privates.opt.position;
		};

		/* privates methods */
		privates.hts = function (e) {
			xDown = e.touches[0].clientX;
			yDown = e.touches[0].clientY;
		};

		privates.htm = function (e) {
			if (!xDown || !yDown) {
				return;
			}

			xUp = e.touches[0].clientX;
			yUp = e.touches[0].clientY;

			xDiff = xDown - xUp;
			yDiff = yDown - yUp;

			if (Math.abs(xDiff) > Math.abs(yDiff)) {
				if (xDiff > 0) {
					_this.next_slide();
				} else {
					_this.prev_slide();
				}
			}

			xDown = 0;
			yDown = 0;
		};

		/* privates properties */
		privates.default = {
			"touch": true,
			"autoplay": false,
			"autoplayDelay": 3000,
			"pauseOnFocus": true,
			"pauseOnHover": true
		};

		privates.setting = Object.assign(privates.default, setting);

		privates.isAnimationEnd = true;

		privates.sel = {
			"wrap": document.querySelector(privates.setting.wrap),
			"children": document.querySelector(privates.setting.wrap).children,
			"prev": document.querySelector(privates.setting.prev),
			"next": document.querySelector(privates.setting.next)
		};

		privates.opt = {
			"position": 0,
			"max_position": document.querySelector(privates.setting.wrap).children.length
		};

		/* Constructor */
		// Clone first elem to end wrap
		privates.sel.wrap.appendChild(privates.sel.children[0].cloneNode(true));

		// Autoplay
		if (privates.setting.autoplay === true) {
			privates.timer = new Timer(this.next_slide, privates.setting.autoplayDelay);
		}

		// Control
		if (privates.sel.prev !== null) {
			privates.sel.prev.addEventListener('click', function () {
				_this.prev_slide();
			});
		}

		if (privates.sel.next !== null) {
			privates.sel.next.addEventListener('click', function () {
				_this.next_slide();
			});
		}

		// Touch events
		if (privates.setting.touch === true) {
			privates.sel.wrap.addEventListener('touchstart', privates.hts, false);
			privates.sel.wrap.addEventListener('touchmove', privates.htm, false);
		}

		// Pause on hover
		if (privates.setting.autoplay === true && privates.setting.pauseOnHover === true) {
			privates.sel.wrap.addEventListener('mouseenter', function () {
				privates.timer.pause();
			});

			privates.sel.wrap.addEventListener('mouseleave', function () {
				privates.timer.become();
			});
		}
	}

	function Timer(callback, delay) {
		var _this2 = this;

		/* privates properties */
		var timerId = undefined,
		    start = undefined,
		    remaining = delay;

		/* Public methods */
		this.resume = function () {
			start = new Date();
			timerId = setTimeout(function () {
				remaining = delay;
				_this2.resume();
				callback();
			}, remaining);
		};

		this.pause = function () {
			clearTimeout(timerId);
			remaining -= new Date() - start;
		};

		this.become = function () {
			clearTimeout(timerId);
			remaining = delay;

			_this2.resume();
		};

		/* Constructor */
		this.resume();
	}

	var a = new Carousel({
		"wrap": ".js-carousel__wrap",
		"prev": ".js-carousel__prev",
		"next": ".js-carousel__next",
		"touch": true,
		"autoplay": true,
		"autoplayDelay": 3000
	});
})();
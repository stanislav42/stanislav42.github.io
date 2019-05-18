function highlightta() {
    var cntr = null;
    var div = null;
    var ta = null;
    var re = null;
    var mark = null;
    var comp = null;
    var corners = null;
    var modTop = null;
    var modBttm = null;
    var boxSize = null;
    var width = null;
    var borderTop = null;
    var borderBttm = null;
    var borderRad = null;
    var padLeft = null;
    var padRight = null;
    var padTop = null;
    var padBttm = null;
    if (arguments) { setup(arguments); };

    function getText() { return ta.value; };

    function getComp() { return comp; };

    function setIndex(num) {
        num = fixNan(num);
        if (typeof num === 'number') { num = num.toString(); }
        if (parseFloat(num)) { cntr.style.zIndex = num; }
    };

    function setMarkClass(dclr) {
        if (typeof dclr === 'string') {
            mark = '<mark style="margin: 0px; padding: 0px;' +
                'border: 0px; color: transparent;" class="' +
                dclr + '">$&</mark>';
        }
        screen();
    };

    function setRegExp(regex) {
        if (regex instanceof RegExp) { re = regex; }
        screen();
    };

    function highlight(text) {
        if (re !== null) { text = text.replace(re, mark); }
        return text;
    };

    function newLines(text) { text = text.replace(/\n$/g, '\n\n'); return text; };

    function removeHTML(text) { text = text.replace(/&/g, '&amp');
        text = text.replace(/</g, '&lt');
        text = text.replace(/>/g, '&gt'); return text; };

    function cancelCorners() {
        if (modTop) { cntr.style.borderTopRightRadius = borderRad + "px"; }
        if (modBttm) { cntr.style.borderBottomRightRadius = borderRad + "px"; }
    };

    function styleCorners() {
        if (modTop) { cntr.style.borderTopRightRadius = "0px"; }
        if (modBttm) { cntr.style.borderBottomRightRadius = "0px"; }
    };

    function scrollbar() {
        if (ta.clientHeight !== ta.scrollHeight) {
            if (ta.style.overflowY !== 'scroll') {
                if (corners) { styleCorners(); }
                ta.style.overflowY = 'scroll';
                setDivWidth();
            }
        } else if (ta.style.overflowY === 'scroll') {
            ta.style.overflowY = 'hidden';
            if (corners) { cancelCorners(); }
            setDivWidth();
        }
    };

    function size() {
        scrollLeft = window.pageXOffset;
        scrollTop = window.pageYOffset;
        cntr.style.height = "auto";
        ta.style.height = "auto";
        if (cntr.clientHeight <= ta.scrollHeight) { cntr.style.height = (ta.scrollHeight + tare) + "px"; }
        setTaHeight();
        setTaWidth();
        setDivHeight();
        scrollbar();
        window.scrollTo(scrollLeft, scrollTop);
    };

    function screen() { var text = ta.value;
        text = removeHTML(text);
        text = highlight(text);
        text = newLines(text);
        div.innerHTML = text; };

    function onInput() { screen();
        size(); };

    function onScroll() { div.scrollTop = ta.scrollTop; };

    function onResize() {
        getTares();
        styleTa();
        styleDiv();
        if (corners && ta.style.overflowY !== 'scroll') { cancelCorners(); }
        size();
    };

    function removeEvents() { ta.removeEventListener('input', onInput, false);
        ta.removeEventListener('scroll', onScroll, false);
        window.removeEventListener('resize', onResize, false); };

    function addEvents() { ta.addEventListener('input', onInput, false);
        ta.addEventListener('scroll', onScroll, false);
        window.addEventListener('resize', onResize, false); };

    function styleFont(node) { node.style.fontFamily = comp.getPropertyValue('font-family');
        node.style.fontSize = comp.getPropertyValue('font-size');
        node.style.lineHeight = comp.getPropertyValue('line-height');
        node.style.letterSpacing = comp.getPropertyValue('letter-spacing');
        node.style.color = comp.getPropertyValue('color'); };

    function scratch(node) { node.style.position = "absolute";
        node.style.display = "block";
        node.style.top = "0px";
        node.style.left = "0px";
        node.style.boxStyling = "border-box";
        node.style.margin = "0px";
        node.style.padding = "0px";
        node.style.backgroundColor = "transparent";
        node.style.border = "0px solid #000000";
        node.style.borderRadius = "0px";
        node.style.wordWrap = "break-word";
        node.style.overflow = "hidden";
        node.style.overflowX = "hidden";
        node.style.overflowY = "hidden"; };

    function setDivLoc() { div.style.top = padTop + "px";
        div.style.left = padLeft + "px"; };

    function setDivHeight() { div.style.height = (ta.clientHeight - padTop - padBttm) + "px"; };

    function setDivWidth() { div.style.width = (ta.clientWidth - padLeft - padRight) + "px"; };

    function styleDiv() { styleFont(div);
        div.style.zIndex = "1";
        div.style.whiteSpace = "pre-wrap";
        div.style.color = "transparent";
        setDivHeight();
        setDivWidth();
        setDivLoc(); };

    function setupDiv() { div = document.createElement('DIV');
        scratch(div);
        cntr.appendChild(div);
        styleDiv(); };

    function setTaWidth() { ta.style.width = (cntr.clientWidth - padLeft - padRight) + "px"; };

    function setTaHeight() { ta.style.height = (cntr.clientHeight - padTop - padBttm) + "px"; };

    function setTaPad() { ta.style.paddingTop = padTop + "px";
        ta.style.paddingRight = padRight + "px";
        ta.style.paddingBottom = padBttm + "px";
        ta.style.paddingLeft = padLeft + "px"; };

    function styleTa() { styleFont(ta);
        ta.style.resize = "none";
        ta.style.zIndex = "2";
        setTaWidth();
        setTaHeight();
        setTaPad(); };

    function setupTa(node) { ta = node;
        scratch(ta);
        styleTa(); };

    function setupCntr(node) {
        cntr = node;
        if (cntr.style.position === "") { cntr.style.position = "relative"; }
        comp = window.getComputedStyle(cntr, null);
    };

    function fixNan(obj) {
        if (isNaN(obj)) { return 0; }
        return obj;
    };

    function setCorners() { borderRad = parseFloat(comp.getPropertyValue('border-top-left-radius'));
        borderRad = fixNan(borderRad);
        modTop = (borderTop < borderRad) ? true : false;
        modBttm = (borderBttm < borderRad) ? true : false; };

    function setTares() { boxSize = comp.getPropertyValue('box-sizing');
        borderTop = parseFloat(comp.getPropertyValue('border-top-width'));
        borderBttm = parseFloat(comp.getPropertyValue('border-bottom-width'));
        padLeft = parseFloat(comp.getPropertyValue('padding-left'));
        padRight = parseFloat(comp.getPropertyValue('padding-right'));
        padTop = parseFloat(comp.getPropertyValue('padding-top'));
        padBttm = parseFloat(comp.getPropertyValue('padding-bottom')); };

    function getTares() { setTares();
        setCorners(); if (boxSize !== 'border-box') { tare = (padTop + padBttm) * -1; } else { tare = borderTop + borderBttm; } };

    function modCorners(bool) {
        if (corners && !bool) { cancelCorners(); }
        if (typeof bool === 'boolean') { corners = bool; }
    };

    function cleanUp() {
        if (cntr !== null) { cntr = null;
            div = null; }
        if (ta !== null) { removeEvents();
            ta = null; }
    };

    function isTa(node) { return node.tagName === 'TEXTAREA'; };

    function isDiv(node) { return node.tagName === 'DIV'; };

    function setup(args) {
        if (!args.length) { return; }
        if (isDiv(args[0])) { cleanUp();
            setupCntr(args[0]); }
        if (isTa(args[1])) {
            getTares();
            if (args[4] === false) { modCorners(args[4]); } else { modCorners(true); }
            setupTa(args[1]);
            setupDiv();
            addEvents();
            size();
        }
        if (args[2] && args[3]) { setMarkClass(args[2]);
            setRegExp(args[3]); }
    };
    return { init: function() { setup(arguments); }, corners: function(bool) { modCorners(bool); }, remove: function() { cleanUp(); }, getText: function() { return getText(); }, getComp: function() { return getComp(); }, setZ: function(num) { setIndex(num); }, setRegex: function(re) { setRegExp(re); }, setMark: function(dclr) { setMarkClass(dclr); }, }
}
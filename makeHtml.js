function TAG(tagname, args) {
	var out = '<' + tagname;
	var firstTagIsClosed = false;

	for(var i = 0; i < args.length; i++) {
		if(args[i] instanceof Object) {
			var attrs = [];
			for(var k in args[i]) {
				attrs.push(k + ' ="' + args[i][k] + '"');
			}
			out += ' ' + attrs.join(' ');
		} else {
			if(!firstTagIsClosed) {
				out += '>';
				firstTagIsClosed = true;
			}
			out += args[i];
		}
	}
	if(!firstTagIsClosed) {
		out += '/>';
	} else {
		out += '</' + tagname + '>';
	}

	return out;
}

function DOCTYPE() { return TAG('DOCTYPE', arguments); }
function A() { return TAG('a', arguments); }
function ABBR() { return TAG('abbr', arguments); }
function ADDRESS() { return TAG('address', arguments); }
function AREA() { return TAG('area', arguments); }
function ARTICLE() { return TAG('article', arguments); }
function ASIDE() { return TAG('aside', arguments); }
function AUDIO() { return TAG('audio', arguments); }
function B() { return TAG('b', arguments); }
function BASE() { return TAG('base', arguments); }
function BDI() { return TAG('bdi', arguments); }
function BDO() { return TAG('bdo', arguments); }
function BLOCKQUOTE() { return TAG('blockquote', arguments); }
function BODY() { return TAG('body', arguments); }
function BR() { return TAG('br', arguments); }
function BUTTON() { return TAG('button', arguments); }
function CANVAS() { return TAG('canvas', arguments); }
function CAPTION() { return TAG('caption', arguments); }
function CITE() { return TAG('cite', arguments); }
function CODE() { return TAG('code', arguments); }
function COL() { return TAG('col', arguments); }
function COLGROUP() { return TAG('colgroup', arguments); }
function COMMAND() { return TAG('command', arguments); }
function DATALIST() { return TAG('datalist', arguments); }
function DD() { return TAG('dd', arguments); }
function DEL() { return TAG('del', arguments); }
function DETAILS() { return TAG('details', arguments); }
function DFN() { return TAG('dfn', arguments); }
function DIV() { return TAG('div', arguments); }
function DL() { return TAG('dl', arguments); }
function DT() { return TAG('dt', arguments); }
function EM() { return TAG('em', arguments); }
function EMBED() { return TAG('embed', arguments); }
function FIELDSET() { return TAG('fieldset', arguments); }
function FIGCAPTION() { return TAG('figcaption', arguments); }
function FIGURE() { return TAG('figure', arguments); }
function FOOTER() { return TAG('footer', arguments); }
function FORM() { return TAG('form', arguments); }
function H1() { return TAG('h1', arguments); }
function H2() { return TAG('h2', arguments); }
function H3() { return TAG('h3', arguments); }
function H4() { return TAG('h4', arguments); }
function H5() { return TAG('h5', arguments); }
function H6() { return TAG('h6', arguments); }
function HEAD() { return TAG('head', arguments); }
function HEADER() { return TAG('header', arguments); }
function HGROUP() { return TAG('hgroup', arguments); }
function HR() { return TAG('hr', arguments); }
function HTML() { return TAG('html', arguments); }
function I() { return TAG('i', arguments); }
function IFRAME() { return TAG('iframe', arguments); }
function IMG() { return TAG('img', arguments); }
function INPUT() { return TAG('input', arguments); }
function INS() { return TAG('ins', arguments); }
function KBD() { return TAG('kbd', arguments); }
function KEYGEN() { return TAG('keygen', arguments); }
function LABEL() { return TAG('label', arguments); }
function LEGEND() { return TAG('legend', arguments); }
function LI() { return TAG('li', arguments); }
function LINK() { return TAG('link', arguments); }
function MAP() { return TAG('map', arguments); }
function MARK() { return TAG('mark', arguments); }
function MENU() { return TAG('menu', arguments); }
function META() { return TAG('meta', arguments); }
function METER() { return TAG('meter', arguments); }
function NAV() { return TAG('nav', arguments); }
function NOSCRIPT() { return TAG('noscript', arguments); }
function OBJECT() { return TAG('object', arguments); }
function OL() { return TAG('ol', arguments); }
function OPTGROUP() { return TAG('optgroup', arguments); }
function OPTION() { return TAG('option', arguments); }
function OUTPUT() { return TAG('output', arguments); }
function P() { return TAG('p', arguments); }
function PARAM() { return TAG('param', arguments); }
function PRE() { return TAG('pre', arguments); }
function PROGRESS() { return TAG('progress', arguments); }
function Q() { return TAG('q', arguments); }
function RP() { return TAG('rp', arguments); }
function RT() { return TAG('rt', arguments); }
function RUBY() { return TAG('ruby', arguments); }
function S() { return TAG('s', arguments); }
function SAMP() { return TAG('samp', arguments); }
function SCRIPT() { return TAG('script', arguments); }
function SECTION() { return TAG('section', arguments); }
function SELECT() { return TAG('select', arguments); }
function SMALL() { return TAG('small', arguments); }
function SOURCE() { return TAG('source', arguments); }
function SPAN() { return TAG('span', arguments); }
function STRONG() { return TAG('strong', arguments); }
function STYLE() { return TAG('style', arguments); }
function SUB() { return TAG('sub', arguments); }
function SUMMARY() { return TAG('summary', arguments); }
function SUP() { return TAG('sup', arguments); }
function TABLE() { return TAG('table', arguments); }
function TBODY() { return TAG('tbody', arguments); }
function TD() { return TAG('td', arguments); }
function TEXTAREA() { return TAG('textarea', arguments); }
function TFOOT() { return TAG('tfoot', arguments); }
function TH() { return TAG('th', arguments); }
function THEAD() { return TAG('thead', arguments); }
function TIME() { return TAG('time', arguments); }
function TITLE() { return TAG('title', arguments); }
function TR() { return TAG('tr', arguments); }
function TRACK() { return TAG('track', arguments); }
function U() { return TAG('u', arguments); }
function UL() { return TAG('ul', arguments); }
function VAR() { return TAG('var', arguments); }
function VIDEO() { return TAG('video', arguments); }
function WBR() { return TAG('wbr', arguments); }
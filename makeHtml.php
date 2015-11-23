<?php
function is_assoc($array) {
	return is_array($array) && array_keys($arr) !== range(0, count($arr) - 1);
}

function TAG($tagname, $args) {
	$out = '<' . $tagname;
	$firstTagIsClosed = false;

	for($i = 0; $i < count($args); $i++) {
		if(is_assoc($args[$i])) {
			$attrs = [];
			foreach ($args[$i] as $k => $v) {
				$attrs[] = $k . ' ="' . $v . '"';
			}
			$out .= ' ' . implode(' ', $attrs);
		} else {
			if(!$firstTagIsClosed) {
				$out .= '>';
				$firstTagIsClosed = true;
			}
			$out .= $args[$i];
		}
	}
	if(!$firstTagIsClosed) {
		$out .= '/>';
	} else {
		$out .= '</' . $tagname . '>';
	}

	return $out;
}

function DOCTYPE() { return TAG('DOCTYPE', func_get_args()); }
function A() { return TAG('a', func_get_args()); }
function ABBR() { return TAG('abbr', func_get_args()); }
function ADDRESS() { return TAG('address', func_get_args()); }
function AREA() { return TAG('area', func_get_args()); }
function ARTICLE() { return TAG('article', func_get_args()); }
function ASIDE() { return TAG('aside', func_get_args()); }
function AUDIO() { return TAG('audio', func_get_args()); }
function B() { return TAG('b', func_get_args()); }
function BASE() { return TAG('base', func_get_args()); }
function BDI() { return TAG('bdi', func_get_args()); }
function BDO() { return TAG('bdo', func_get_args()); }
function BLOCKQUOTE() { return TAG('blockquote', func_get_args()); }
function BODY() { return TAG('body', func_get_args()); }
function BR() { return TAG('br', func_get_args()); }
function BUTTON() { return TAG('button', func_get_args()); }
function CANVAS() { return TAG('canvas', func_get_args()); }
function CAPTION() { return TAG('caption', func_get_args()); }
function CITE() { return TAG('cite', func_get_args()); }
function CODE() { return TAG('code', func_get_args()); }
function COL() { return TAG('col', func_get_args()); }
function COLGROUP() { return TAG('colgroup', func_get_args()); }
function COMMAND() { return TAG('command', func_get_args()); }
function DATALIST() { return TAG('datalist', func_get_args()); }
function DD() { return TAG('dd', func_get_args()); }
function DEL() { return TAG('del', func_get_args()); }
function DETAILS() { return TAG('details', func_get_args()); }
function DFN() { return TAG('dfn', func_get_args()); }
function DIV() { return TAG('div', func_get_args()); }
function DL_() { return TAG('dl', func_get_args()); }
function DT() { return TAG('dt', func_get_args()); }
function EM() { return TAG('em', func_get_args()); }
function EMBED() { return TAG('embed', func_get_args()); }
function FIELDSET() { return TAG('fieldset', func_get_args()); }
function FIGCAPTION() { return TAG('figcaption', func_get_args()); }
function FIGURE() { return TAG('figure', func_get_args()); }
function FOOTER() { return TAG('footer', func_get_args()); }
function FORM() { return TAG('form', func_get_args()); }
function H1() { return TAG('h1', func_get_args()); }
function H2() { return TAG('h2', func_get_args()); }
function H3() { return TAG('h3', func_get_args()); }
function H4() { return TAG('h4', func_get_args()); }
function H5() { return TAG('h5', func_get_args()); }
function H6() { return TAG('h6', func_get_args()); }
function HEAD() { return TAG('head', func_get_args()); }
function HEADER_() { return TAG('header', func_get_args()); }
function HGROUP() { return TAG('hgroup', func_get_args()); }
function HR() { return TAG('hr', func_get_args()); }
function HTML() { return TAG('html', func_get_args()); }
function I() { return TAG('i', func_get_args()); }
function IFRAME() { return TAG('iframe', func_get_args()); }
function IMG() { return TAG('img', func_get_args()); }
function INPUT() { return TAG('input', func_get_args()); }
function INS() { return TAG('ins', func_get_args()); }
function KBD() { return TAG('kbd', func_get_args()); }
function KEYGEN() { return TAG('keygen', func_get_args()); }
function LABEL() { return TAG('label', func_get_args()); }
function LEGEND() { return TAG('legend', func_get_args()); }
function LI_() { return TAG('li', func_get_args()); }
function LINK_() { return TAG('link', func_get_args()); }
function MAP() { return TAG('map', func_get_args()); }
function MARK() { return TAG('mark', func_get_args()); }
function MENU() { return TAG('menu', func_get_args()); }
function META() { return TAG('meta', func_get_args()); }
function METER() { return TAG('meter', func_get_args()); }
function NAV() { return TAG('nav', func_get_args()); }
function NOSCRIPT() { return TAG('noscript', func_get_args()); }
function OBJECT() { return TAG('object', func_get_args()); }
function OL() { return TAG('ol', func_get_args()); }
function OPTGROUP() { return TAG('optgroup', func_get_args()); }
function OPTION() { return TAG('option', func_get_args()); }
function OUTPUT() { return TAG('output', func_get_args()); }
function P() { return TAG('p', func_get_args()); }
function PARAM() { return TAG('param', func_get_args()); }
function PRE() { return TAG('pre', func_get_args()); }
function PROGRESS() { return TAG('progress', func_get_args()); }
function Q() { return TAG('q', func_get_args()); }
function RP() { return TAG('rp', func_get_args()); }
function RT() { return TAG('rt', func_get_args()); }
function RUBY() { return TAG('ruby', func_get_args()); }
function S() { return TAG('s', func_get_args()); }
function SAMP() { return TAG('samp', func_get_args()); }
function SCRIPT() { return TAG('script', func_get_args()); }
function SECTION() { return TAG('section', func_get_args()); }
function SELECT() { return TAG('select', func_get_args()); }
function SMALL() { return TAG('small', func_get_args()); }
function SOURCE() { return TAG('source', func_get_args()); }
function SPAN() { return TAG('span', func_get_args()); }
function STRONG() { return TAG('strong', func_get_args()); }
function STYLE() { return TAG('style', func_get_args()); }
function SUB() { return TAG('sub', func_get_args()); }
function SUMMARY() { return TAG('summary', func_get_args()); }
function SUP() { return TAG('sup', func_get_args()); }
function TABLE() { return TAG('table', func_get_args()); }
function TBODY() { return TAG('tbody', func_get_args()); }
function TD() { return TAG('td', func_get_args()); }
function TEXTAREA() { return TAG('textarea', func_get_args()); }
function TFOOT() { return TAG('tfoot', func_get_args()); }
function TH() { return TAG('th', func_get_args()); }
function THEAD() { return TAG('thead', func_get_args()); }
function TIME_() { return TAG('time', func_get_args()); }
function TITLE() { return TAG('title', func_get_args()); }
function TR() { return TAG('tr', func_get_args()); }
function TRACK() { return TAG('track', func_get_args()); }
function U() { return TAG('u', func_get_args()); }
function UL() { return TAG('ul', func_get_args()); }
function VAR_() { return TAG('var', func_get_args()); }
function VIDEO() { return TAG('video', func_get_args()); }
function WBR() { return TAG('wbr', func_get_args()); }
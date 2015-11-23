def TAG(tagname, args):
	out = '<' + tagname
	firstTagIsClosed = False

	for item in args:
		if isinstance(item, dict):
			attrs = [];
			for k in item:
				attrs.append(k + '="' + item[k] + '"')
			out += ' ' + ' '.join(attrs)
		else:
			if not firstTagIsClosed:
				out += '>'
				firstTagIsClosed = True
			out += item

	if not firstTagIsClosed:
		out += '/>'
	else:
		out += '</' + tagname + '>';

	return out

def DOCTYPE(*arguments): return TAG('DOCTYPE', arguments)
def A(*arguments): return TAG('a', arguments)
def ABBR(*arguments): return TAG('abbr', arguments)
def ADDRESS(*arguments): return TAG('address', arguments)
def AREA(*arguments): return TAG('area', arguments)
def ARTICLE(*arguments): return TAG('article', arguments)
def ASIDE(*arguments): return TAG('aside', arguments)
def AUDIO(*arguments): return TAG('audio', arguments)
def B(*arguments): return TAG('b', arguments)
def BASE(*arguments): return TAG('base', arguments)
def BDI(*arguments): return TAG('bdi', arguments)
def BDO(*arguments): return TAG('bdo', arguments)
def BLOCKQUOTE(*arguments): return TAG('blockquote', arguments)
def BODY(*arguments): return TAG('body', arguments)
def BR(*arguments): return TAG('br', arguments)
def BUTTON(*arguments): return TAG('button', arguments)
def CANVAS(*arguments): return TAG('canvas', arguments)
def CAPTION(*arguments): return TAG('caption', arguments)
def CITE(*arguments): return TAG('cite', arguments)
def CODE(*arguments): return TAG('code', arguments)
def COL(*arguments): return TAG('col', arguments)
def COLGROUP(*arguments): return TAG('colgroup', arguments)
def COMMAND(*arguments): return TAG('command', arguments)
def DATALIST(*arguments): return TAG('datalist', arguments)
def DD(*arguments): return TAG('dd', arguments)
def DEL(*arguments): return TAG('del', arguments)
def DETAILS(*arguments): return TAG('details', arguments)
def DFN(*arguments): return TAG('dfn', arguments)
def DIV(*arguments): return TAG('div', arguments)
def DL(*arguments): return TAG('dl', arguments)
def DT(*arguments): return TAG('dt', arguments)
def EM(*arguments): return TAG('em', arguments)
def EMBED(*arguments): return TAG('embed', arguments)
def FIELDSET(*arguments): return TAG('fieldset', arguments)
def FIGCAPTION(*arguments): return TAG('figcaption', arguments)
def FIGURE(*arguments): return TAG('figure', arguments)
def FOOTER(*arguments): return TAG('footer', arguments)
def FORM(*arguments): return TAG('form', arguments)
def H1(*arguments): return TAG('h1', arguments)
def H2(*arguments): return TAG('h2', arguments)
def H3(*arguments): return TAG('h3', arguments)
def H4(*arguments): return TAG('h4', arguments)
def H5(*arguments): return TAG('h5', arguments)
def H6(*arguments): return TAG('h6', arguments)
def HEAD(*arguments): return TAG('head', arguments)
def HEADER(*arguments): return TAG('header', arguments)
def HGROUP(*arguments): return TAG('hgroup', arguments)
def HR(*arguments): return TAG('hr', arguments)
def HTML(*arguments): return TAG('html', arguments)
def I(*arguments): return TAG('i', arguments)
def IFRAME(*arguments): return TAG('iframe', arguments)
def IMG(*arguments): return TAG('img', arguments)
def INPUT(*arguments): return TAG('input', arguments)
def INS(*arguments): return TAG('ins', arguments)
def KBD(*arguments): return TAG('kbd', arguments)
def KEYGEN(*arguments): return TAG('keygen', arguments)
def LABEL(*arguments): return TAG('label', arguments)
def LEGEND(*arguments): return TAG('legend', arguments)
def LI(*arguments): return TAG('li', arguments)
def LINK(*arguments): return TAG('link', arguments)
def MAP(*arguments): return TAG('map', arguments)
def MARK(*arguments): return TAG('mark', arguments)
def MENU(*arguments): return TAG('menu', arguments)
def META(*arguments): return TAG('meta', arguments)
def METER(*arguments): return TAG('meter', arguments)
def NAV(*arguments): return TAG('nav', arguments)
def NOSCRIPT(*arguments): return TAG('noscript', arguments)
def OBJECT(*arguments): return TAG('object', arguments)
def OL(*arguments): return TAG('ol', arguments)
def OPTGROUP(*arguments): return TAG('optgroup', arguments)
def OPTION(*arguments): return TAG('option', arguments)
def OUTPUT(*arguments): return TAG('output', arguments)
def P(*arguments): return TAG('p', arguments)
def PARAM(*arguments): return TAG('param', arguments)
def PRE(*arguments): return TAG('pre', arguments)
def PROGRESS(*arguments): return TAG('progress', arguments)
def Q(*arguments): return TAG('q', arguments)
def RP(*arguments): return TAG('rp', arguments)
def RT(*arguments): return TAG('rt', arguments)
def RUBY(*arguments): return TAG('ruby', arguments)
def S(*arguments): return TAG('s', arguments)
def SAMP(*arguments): return TAG('samp', arguments)
def SCRIPT(*arguments): return TAG('script', arguments)
def SECTION(*arguments): return TAG('section', arguments)
def SELECT(*arguments): return TAG('select', arguments)
def SMALL(*arguments): return TAG('small', arguments)
def SOURCE(*arguments): return TAG('source', arguments)
def SPAN(*arguments): return TAG('span', arguments)
def STRONG(*arguments): return TAG('strong', arguments)
def STYLE(*arguments): return TAG('style', arguments)
def SUB(*arguments): return TAG('sub', arguments)
def SUMMARY(*arguments): return TAG('summary', arguments)
def SUP(*arguments): return TAG('sup', arguments)
def TABLE(*arguments): return TAG('table', arguments)
def TBODY(*arguments): return TAG('tbody', arguments)
def TD(*arguments): return TAG('td', arguments)
def TEXTAREA(*arguments): return TAG('textarea', arguments)
def TFOOT(*arguments): return TAG('tfoot', arguments)
def TH(*arguments): return TAG('th', arguments)
def THEAD(*arguments): return TAG('thead', arguments)
def TIME(*arguments): return TAG('time', arguments)
def TITLE(*arguments): return TAG('title', arguments)
def TR(*arguments): return TAG('tr', arguments)
def TRACK(*arguments): return TAG('track', arguments)
def U(*arguments): return TAG('u', arguments)
def UL(*arguments): return TAG('ul', arguments)
def VAR(*arguments): return TAG('var', arguments)
def VIDEO(*arguments): return TAG('video', arguments)
def WBR(*arguments): return TAG('wbr', arguments)
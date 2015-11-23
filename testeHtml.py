# -*- coding: utf-8 -*-

from makeHtml import *

print(
HTML(
	HEAD(
		TITLE('Isto é um teste'),
		STYLE('div { backgound: #f0f; }')
	),
	BODY(
		H1('Uma página de teste'),
		DIV(
			'Texto de ',
			B('teste')
		)
	)
)
)
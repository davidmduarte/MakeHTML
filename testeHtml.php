<?php
require 'makeHtml.php';

print(
HTML(
	HEAD(
		META(['http-equiv' => "Content-Type", 'content' => "text/html; charset=utf-8"]),
		TITLE('página de teste')),
	BODY(
		DIV(
			H1(['onclick'=> "alert('E é um belo teste.');"], 'Isto é um teste'),
			H2('subtitalo ' . I('muita') . ' giro'),
			A(['href'=> 'http://www.google.com' ], ' e um link'),
			P('À meneira'),
			BR(),
			TABLE(['border'=> 1 ],
				TR(['bgcolor'=> '#f0f'],
					TH('Head1'),
					TH('Head2')),
				TR(
					TD('Cell11'),
					TD('Cell12')),
				TR(
					TD('Cell21'),
					TD('Cell22')))))));

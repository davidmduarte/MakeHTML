# MakeHTML

Sometime a just don't want do put html into a string just because it will be a pain to read in the future
```html
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>teste</title>
	<script type="text/javascript" src="makeHtml.js"></script>
</head>
<body>
	<script type="text/javascript">
	var html = 
	DIV(
		H1({onclick: "alert('E é um belo teste.');"}, 'Isto é um teste'),
		H2('subtitalo ' + I('muita') + ' giro'),
		A({ href: 'google.com' }, ' e um link'),
		P('À meneira'),
		BR(),
		TABLE({ border: 1 },
			TR({ bgcolor: '#f0f' },
				TH('Head1'),
				TH('Head2')),
			TR(
				TD('Cell11'),
				TD('Cell11')
			),
			TR(
				TD('Cell21'),
				TD('Cell21')
			)
		)
	);
	document.body.innerHTML = html;
	</script>
</body>
</html>
```

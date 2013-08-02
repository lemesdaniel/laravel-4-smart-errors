<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@lang('error.genericErrorTitle')</title>
	<style>
* {
	font-family: sans-serif;
	line-height: 1.4em;
}
body {
	background: #f4ede7;
}
h1 {
	text-align: center;
	font-size: 4em;
	text-shadow: -3px 3px 5px rgba(0, 0, 0, 0.2);
}
.error-message {
	padding: 30px;
	background: #e8cbae;
	color: black;
}
@media screen and (min-width: 800px) {
	h1 {
		margin-top: 75px;
	}
	.error-message {
		max-width: 700px;
		margin: 50px auto;
		border-radius: 10px;
		box-shadow: -1px 3px 10px rgba(0, 0, 0, 0.2);
		border: 1px solid #e8bf97;
	}
}
	</style>
</head>
<body>

<h1>@lang('error.genericErrorTitle')</h1>

<section class="error-message">
	<p>@lang('error.genericErrorParagraph1')</p>
	<p>@lang('error.genericErrorParagraph2')</p>
	<p style="text-align:center;">
		{{ HTML::link(Request::header('referer'), Lang::get('error.backLinkTitle')) }} - {{ HTML::link('/', Lang::get('frontpageLinkTitle')) }}
	</p>
</section>

</body>
</html>
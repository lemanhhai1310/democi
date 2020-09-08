<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Quylong - <?= /** @var TYPE_NAME  */
		isset($title) ? $title : ''; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<!--CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css">
	<!--JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
			integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
	<nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
		<div class="uk-navbar-left">
			<a class="uk-navbar-item uk-logo" href="/">Logo</a>
			<ul class="uk-navbar-nav">
				<li class="uk-active"><a href="#">Active</a></li>
				<li>
					<a href="#">Parent</a>
					<div class="uk-navbar-dropdown">
						<ul class="uk-nav uk-navbar-dropdown-nav">
							<li class="uk-active"><a href="#">Active</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#">Item</a></li>
			</ul>
		</div>
	</nav>

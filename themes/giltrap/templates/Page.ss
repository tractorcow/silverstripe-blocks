<!DOCTYPE html>
<html lang="$ContentLocale">
	<head>
		<% base_tag %>
		<title>$SiteConfig.Title / <% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %></title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		$MetaTags(false)
		<link rel="shortcut icon" href="favicon.ico" />
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<% require themedCSS('giltrap') %>
	</head>
	<body>
		<% include Header %>
		$Layout
		<% include Footer %>
	</body>
</html>

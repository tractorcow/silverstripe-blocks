<% if $Pages %>
	<% loop $Pages %>
		<% if HideFromBreadcrumb && Last %>
		<% else %>
			<% if not First %>/<% end_if %>
			<% if Last %>$MenuTitle.XML<% else %><a href="$Link" class="breadcrumb-$Pos">$MenuTitle.XML</a><% end_if %>
		<% end_if %>
	<% end_loop %>
<% end_if %>

<% if FooterModules %>
<div class="Container GridHolder" id="FooterModules">
	<div class="col grid <% if Last %>stacked<% end_if %>">
		<h3>What can we do for you?</h3>
	</div>
	<% loop FooterModules('', 'SortOrder') %>
		<div class="col grid">
			<h4><a href="#">$Description</a></h4>
			<p><a href="#"><small>&#10095;</small> $LinkText</a></p>
		</div>
	<% end_loop %>
</div>
<% end_if %>
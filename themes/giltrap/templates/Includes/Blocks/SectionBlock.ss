<section class="Widget SectionWidget" id="Block1">
	<h2>$SectionTitle</h2>
	<div class="Block">
		<% with Section %>
		<h3>$Content.NoHTML()</h3>
		<% end_with %>
		<% if LinkText %>
			<p><a href="<% with Section %>$SiteTreeURL.Link<% end_with %>"><small>&#10095;</small> $LinkText</a></p>
		<% end_if %>
	</div>
</div>
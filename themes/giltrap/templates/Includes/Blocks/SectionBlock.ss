<section class="Widget" id="Block1">
	<h2>$SectionTitle</h2>
	<div class="Block">
		<% with Section %>
		<h3>$Content</h3>
		<% end_with %>
		<% if LinkText %>
			<p><a href="<% with Section %>$SiteTreeURL.Link<% end_with %>">&gt; $LinkText</a></p>
		<% end_if %>
	</div>
</div>
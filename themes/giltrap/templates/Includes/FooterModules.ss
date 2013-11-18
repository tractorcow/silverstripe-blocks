<% if FooterModules %>
<div class="Container" id="FooterModules">
	<div class="col grid">
		<h3>What can we do for you?</h3>
	</div>
	<% loop FooterModules('', 'SortOrder') %>
		<div class="col grid-margined">
			<h4><a href="#">$Description</a></h4>
			<p><a href="#">&gt; $LinkText</a></p>
		</div>
	<% end_loop %>
</div>
<% end_if %>
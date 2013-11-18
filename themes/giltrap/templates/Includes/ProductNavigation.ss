<% if ChildrenOf(products) %>
<nav class="Menu">
	<ul>
		<% loop ChildrenOf(products) %>
		<li class="MenuItem NoChildren">
			<% include Link %>
		</li>
		<% end_loop %>
	</ul>
</nav>
<% end_if %>
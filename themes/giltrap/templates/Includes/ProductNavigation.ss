<% if ChildrenOf(products) %>
<nav class="Menu">
	<ul>
		<% loop ChildrenOf(products) %>
			<% if Children %>
			<li class="MenuItem">
				<% include Link %>
				<ul>
					<% loop Children %>
					<li>
						<a href="#">
							$PlaceholdIt(140,85,'Product Image')
							<span>Product Name</span>
						</a>
					</li>
					<% end_loop %>
				</ul>
			</li>
			<% else %>
			<li class="MenuItem NoChildren">
				<% include Link %>
			</li>
			<% end_if %>
		<% end_loop %>
	</ul>
</nav>
<% end_if %>
<div class="Container" id="ProductPushNavigation">
	<% if ChildrenOf(products) %>
		<% loop ChildrenOf(products) %>
			<% if Children %>
			<nav class="Menu">
				<ul id="nav-{$URLSegment}">
					<% loop Children %>
					<li>
						<a href="#">
							$PlaceholdIt(140,85,'Product Image')
							<span>Product Name</span>
						</a>
					</li>
					<% end_loop %>
				</ul>
			</nav>
			<% end_if %>
		<% end_loop %>
	<% end_if %>
</div>
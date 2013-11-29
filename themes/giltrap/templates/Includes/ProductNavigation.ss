<% if ChildrenOf(products) %>
<nav class="Menu">
	<ul id="ProductMenu">
		<% loop ChildrenOf(products) %>
			<% if Children %>
			<li class="MenuItem WithChildren" data-ref="nav-{$URLSegment}">
				<% include Link %>
				<ul>
					<li>
						<a href="$Link">
							$PlaceholdIt(140,85,'Product Image')
							<strong>View all $Title Range</strong>
						</a>
					</li>
					<% loop Children %>
						<% if Children %>
							<% loop Children %>
								<li>
									<a href="$Link">
										$PlaceholdIt(140,85,'Product Image')
										<strong>$Parent.Title.XML</strong>
										<span>$Title.XML</span>
									</a>
								</li>
							<% end_loop %>
						<% else %>
							<li>
								<a href="$Link">
									$PlaceholdIt(140,85,'Product Image')
									<strong>$Title.XML</strong>
								</a>
							</li>
						<% end_if %>
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
<div id="TopBar">
	<div class="Container">
		<% if Menu(1) %>
			<nav class="Menu" id="Navigation">
				<ul>
					<% loop Menu(1) %>
						<% if Children %>
						<li class="MenuItem WithChildren">
							<% include Link %>
							<ul>
							<% loop Children %>
								<li><% include Link %></li>
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
		<nav class="Secondary">
			<ul>
				<li><a href="#">My Giltrap</a></li>
				<li><a href="#">Dealer Login</a></li>
				<li><a href="#">Country</a></li>
			</ul>
		</nav>
		
	</div>
</div>
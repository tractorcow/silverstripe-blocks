<header id="Header">
	<button id="TouchMenu">Menu</button>
	<% if Menu(1) %>
		<nav class="Menu" id="Navigation">
			<ul>
				<% loop Menu(1) %>
					<li class="MenuItem NoChildren">
						<% include Link %>
					</li>
				<% end_loop %>
			</ul>
		</nav>
	<% end_if %>
	<% include LocaleMenu %>
</header>

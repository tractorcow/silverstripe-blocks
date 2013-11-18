<div id="TopBar">
	<div class="Container">
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
		<nav class="Secondary">
			<ul>
				<li><a href="#">My Giltrap</a></li>
				<li><a href="#">Dealer Login</a></li>
				<li><a href="#">Country</a></li>
			</ul>
		</nav>
		
	</div>
</div>
<header id="Header">
	<div class="Container">
		<div class="Logo">
			<a href="/"><img src="$ThemeDir/images/logo-giltrap.png" /></a>
		</div>
		<% include ProductNavigation %>	
		<div class="Search">
			hello
		</div>
	</div>
</header>

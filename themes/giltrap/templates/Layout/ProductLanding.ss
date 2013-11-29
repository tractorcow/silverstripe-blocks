<section id="hero">
	$PlaceholdIt(1270,200,'Hero Image and Calculator')
</section>

<section class="ProductListing">
	<ul class="main">
		<% loop Children %>
			<% if HasSubCat %>
				<% loop Children %>
				<li>
					<a href="#">$PlaceholdIt(230,115,'Product Image')</a>
					<p><a href="$Link">$Parent.Title<br />$Title</a></p>
					<% if Children %>
					<ul>
						<% loop Children %>
						<li><a href="$Link">$Title</a></li>
						<% end_loop %>
					</ul>
					<% end_if %>
				</li>
				<% end_loop %>
			<% else %>
			<li>
				<a href="#">$PlaceholdIt(230,115,'Product Image')</a>
				<p><a href="$Link">$Title</a></p>
				<% if Children %>
					<ul>
						<% loop Children %>
						<li><a href="$Link">$Title</a></li>
						<% end_loop %>
					</ul>
				<% end_if %>
			</li>
			<% end_if %>
		<% end_loop %>
	</ul>
</section>
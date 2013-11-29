<section id="hero">
	$PlaceholdIt(1270,200,'Hero Image and Calculator')
</section>

<section class="ProductListing">
	<ul class="main">
		<% loop Children %>
			<li>
				<a href="#">$PlaceholdIt(230,115,'Product Image')</a>
				<p><a href="$Link">$Title</a></p>
				<% if Children %>
					<p class="button range"><a href="$Link">View Range</a></p>
					<ul>
					<% loop Children %>
						<% if Children %>
						<li><h2>$Title</h2></li>
						<% loop Children %>
						<li><a href="#">$Title</a></li>
						<% end_loop %>
						<% else %>
						<li><a href="$Link">$Title</a></li>
						<% end_if %>
					<% end_loop %>
					</ul>
				<% else %>
				<p class="button"><a href="$Link">View Details</a></p>
				<% end_if %>	
			</li>
		<% end_loop %>
	</ul>
</section>
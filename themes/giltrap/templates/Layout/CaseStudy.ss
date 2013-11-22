<% include BreadCrumbs %>
<article class="Layout">
	<section>
		<div class="col grid double">
			<div id="Hero">
				<div class="Title">
					<h1>$Title</h1>
					<% if $Region || $Country %>
					<h2>
						<% if Region %><span>$Region</span><% end_if %>
						<% if Country %><span>$Country</span><% end_if %>
					</h2>
					<% end_if %>
				</div>
				$PlaceholdIt(630, 470,'Main Image')
			</div>
		</div>
		<div class="col grid">
			<div class="Widget">$PlaceholdIt(310,230,'Block Image')</div>
		</div>
		<div class="col grid stacked">
			<div class="Widget">$PlaceholdIt(310,230,'Block Image')</div>
		</div>
		<div class="col grid">
			<div class="Widget">$PlaceholdIt(310,230,'Block Image')</div>
		</div>
		<div class="col grid stacked">
			<div class="Widget">$PlaceholdIt(310,230,'Block Image')</div>
		</div>
	</section>

	<section class="ContentSection">
		<div class="col grid double">
			<div class="margined">
				<% if Intro %><h3>$Intro</h3><% end_if %>
				<% if Abstract %><p class="Abstract">$Abstract</p><% end_if %>
				$Content
			</div>
		</div>
		
		<!-- Tabbed Content -->
		<div class="col grid double">
		</div>
	</section>
</article>
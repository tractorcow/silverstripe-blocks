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
			<% if Intro %><h3>$Intro</h3><% end_if %>
			<% if Abstract %><p class="Abstract">$Abstract</p><% end_if %>
			$Content
		</div>

		<!-- Tabbed Content -->
		<div class="col grid double stacked">
			<ul class="tabs">
  				<li class="active" rel="tab1">Popular</li>
  				<li rel="tab2">Tag</li>
  				<li rel="tab3">Category</li>
			</ul>
			<div class="tab_container">
  				<h3 class="d_active tab_drawer_heading" rel="tab1">Date</h3>
  				<div id="tab1" class="tab_content">
    				<p>Veniam readymade meh, asymmetrical minim beard American Apparel organic authentic Neutra fingerstache post-ironic. Cosby sweater High Life laboris banh mi, cornhole Wes Anderson cillum master cleanse cardigan flexitarian fingerstache PBR&B drinking vinegar plaid lomo. Quis irony chia duis jean shorts. Photo booth vinyl cornhole tattooed, aesthetic actually Wes Anderson anim Austin cillum. Fugiat delectus lomo adipisicing Blue Bottle banjo. Eu cray craft beer letterpress veniam. Sartorial selfies Helvetica tousled put a bird on it, jean shorts distillery irony four loko Intelligentsia scenester ullamco church-key artisan.</p>
  				</div>
  				<h3 class="tab_drawer_heading" rel="tab2">Tag</h3>
  				<div id="tab2" class="tab_content">
    				<p>Veniam readymade meh, asymmetrical minim beard American Apparel organic authentic Neutra fingerstache post-ironic. Cosby sweater High Life laboris banh mi, cornhole Wes Anderson cillum master cleanse cardigan flexitarian fingerstache PBR&B drinking vinegar plaid lomo. Quis irony chia duis jean shorts. Photo booth vinyl cornhole tattooed, aesthetic actually Wes Anderson anim Austin cillum. Fugiat delectus lomo adipisicing Blue Bottle banjo. Eu cray craft beer letterpress veniam. Sartorial selfies Helvetica tousled put a bird on it, jean shorts distillery irony four loko Intelligentsia scenester ullamco church-key artisan.</p>
  				</div>
  				<h3 class="tab_drawer_heading" rel="tab3">Category</h3>
  				<div id="tab3" class="tab_content">
    				<p>Veniam readymade meh, asymmetrical minim beard American Apparel organic authentic Neutra fingerstache post-ironic. Cosby sweater High Life laboris banh mi, cornhole Wes Anderson cillum master cleanse cardigan flexitarian fingerstache PBR&B drinking vinegar plaid lomo. Quis irony chia duis jean shorts. Photo booth vinyl cornhole tattooed, aesthetic actually Wes Anderson anim Austin cillum. Fugiat delectus lomo adipisicing Blue Bottle banjo. Eu cray craft beer letterpress veniam. Sartorial selfies Helvetica tousled put a bird on it, jean shorts distillery irony four loko Intelligentsia scenester ullamco church-key artisan.</p>
  				</div>
  				<!-- Category --> 
			</div>
			<!-- .tab_container -->
		</div>
	</section>
	<section>
		<div class="col grid triple">
			<h2>$Possessive Current Equipment</h2>
		</div>
		<div class="col grid stacked">
			<h2>$Possessive Wishlist</h2>
		</div>
	</section>
</article>
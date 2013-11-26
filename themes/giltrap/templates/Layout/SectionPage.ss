<% include BreadCrumbs %>
<% loop Sections %>
	<!-- Content Section -->
	<article class="ContentSection">
		<h2>$Title</h2>
		<% if ContentImages %>
			<% if ImageAlign = 'Left' %>
				<section class="col grid rightspace">
					$Content
				</section>
				<section class="col grid double">
				<% include ImageGrid %>
				</section>
			<% else %>
				<section class="col grid double">
				<% include ImageGrid %>
				</section>
				<section class="col grid leftspace">
					$Content
				</section>
			<% end_if %>
		<% else %>
			<section class="col grid triple">
				$Content
			</section>
		<% end_if %>
		<section class="col grid stacked">
			<div class="PersonBlock">
			</div>
		</section>
	</article>
	<!-- end Content Section -->
<% end_loop %>
<% if CaseStudies %>
	<section>
		Pagination
	</section>
	<% loop CaseStudies %>
	<article class="ContentSection">
		<h2>$Title</h2>
		<section class="col grid rightspace">
			$Content
		</section>
		<section class="col grid double">
			<% loop MediaItems %>
				<% if Image %>
				$Image.CroppedImage(630, 470)
				<% end_if %>
			<% end_loop %>
		</section>
		<section class="col grid stacked">
			<div class="PersonBlock">
			</div>
		</section>
	</article>
	<% end_loop %>
<% end_if %>
<% include BreadCrumbs %>
<div class="col grid double">	
	<div class="blogEntry">
		<h2 class="postTitle">$Title</h2>
		<p>Abstract goes here</p>
		<% if MainImage %>
			$MainImage.CroppedImage(630,400)
		<% end_if %>
		<p>Entry Registration stuff goes here</p>
		$Content		
	</div>
</div>
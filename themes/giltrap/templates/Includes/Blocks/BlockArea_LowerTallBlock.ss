<% loop BlockArea %>
	<div class="Widget Stacked">
		<% include Block %>
	</div>
	<div class="Widget"><a href="$SiteTreeURL.Link">$Image.CroppedImage(310,230)</a></div>
<% end_loop %>
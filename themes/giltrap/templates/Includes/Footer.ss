<% include FooterModules %>

<footer id="Footer">
	<div class="Container Bar">
		<div class="col grid">
			<a href="/"><img src="$ThemeDir/images/logo-giltrap-inverted.png" alt="$SiteConfig.Title" /></a>
		</div>
		<div class="col grid">
			<!-- Contact Details: pull from Contact Page/Details -->
			<dl class="Contact">
				<dt>Free</dt>
					<dd>0800 804 458</dd>
				<dt>Int.</dt>
					<dd>+64 7 873 4199</dd>
				<dt>General</dt>
					<dd>info@giltrap.co.nz</dd>
				<dt>Parts</dt>
					<dd>parts@giltrap.co.nz</dd>
			</dl>
			<!-- end Contact Details -->
		</div>
	</div>
	<div class="Container">
		<p>&copy; $SiteConfig.Title
		<% if FooterLinks %>
			<% loop FooterLinks %>
				| <a href="$Link">$Title</a>
			<% end_loop %>
		<% end_if %>
	</p>  
	</div>
</footer>

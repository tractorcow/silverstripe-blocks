<div class="blogSummary $FirstLast $Parent.URLSegment">
	<h2 class="postTitle"><a href="$Link" title="<% _t('BlogSummary_ss.VIEWFULL', 'View full post titled -') %> '$Title'">$MenuTitle</a></h2>
	<p class="authorDate">$Parent.Title: $Date.Long</p>

	<% if BlogHolder.ShowFullEntry %>
		$Content
	<% else %> 
		<p>$Content.FirstParagraph(html)</p>
	<% end_if %>
	
	<p class="blogVitals">
		<a href="$Link" class="readmore" title="Read Full Post">
			&gt; <% _t('BlogSummary_ss.READFULLPOST','Read the full post') %>
		</a>
	</p>
</div>

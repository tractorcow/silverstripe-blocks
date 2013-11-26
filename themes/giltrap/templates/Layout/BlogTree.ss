<% include BreadCrumbs %>
<div class="col grid double">
	<% if SelectedTag %>
		<h3><% _t('BlogHolder_ss.VIEWINGTAGGED', 'Viewing entries tagged with') %> '$SelectedTag'</h3>
	<% else_if SelectedDate %>
		<h3><% _t('BlogHolder_ss.VIEWINGPOSTEDIN', 'Viewing entries posted in') %> $SelectedNiceDate</h3>
	<% else_if SelectedAuthor %>
		<h3><% _t('BlogHolder_ss.VIEWINGPOSTEDBY', 'Viewing entries posted by') %> $SelectedAuthor</h3>
	<% end_if %>
	
	<% if BlogEntries %>
		<% loop BlogEntries %>
			<% include BlogSummary %>
		<% end_loop %>
	<% else %>
		<h2><% _t('BlogHolder_ss.NOENTRIES', 'There are no blog entries') %></h2>
	<% end_if %>
	
	<% include BlogPagination %>
</div>
<div class="col grid stacked">
	<% if Children %>
	<h2>Categories</h2>
	<ul>
		<% loop Children %>
		<li><a href="$Link">$Title</a></li>
		<% end_loop %>
	</ul>
	<% end_if %>
	<h2>Archives</h2>
	<% include BlogSideBar %>
</div>

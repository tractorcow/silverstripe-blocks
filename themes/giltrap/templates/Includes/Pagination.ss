<%-- Usage: <% with List %><% include Pagination %><% end_with %> --%>

<% if MoreThanOnePage %>
	<div class="Pagination">
		<ul class="PageNumbers">
			<li class="Previous">
				<% if NotFirstPage %>
					<a rel="prev" class="PreviousLink" href="$PrevLink" title="View the previous page">&lt;</a>
				<% else %>	
					<a class="PreviousLink Disabled">&lt;</a>
				<% end_if %>
			</li>

			<% loop PaginationSummary(4) %>
				<% if Link %>
					<li class="Page <% if CurrentBool %>Current<% end_if %>"><a href="$Link">$PageNum</a></li>
				<% else %>
					<li class="Spacer"></li>
				<% end_if %>
			<% end_loop %>

			<li class="Next">
				<% if NotLastPage %>
					<a rel="next" class="NextLink" href="$NextLink" title="View the next page">&gt;</a>
				<% else %>
					<a class="NextLink Disabled">&gt;</a>
				<% end_if %>
			</li>
		</ul>
	</div>
<% end_if %>
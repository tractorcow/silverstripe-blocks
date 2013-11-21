<div class="ImageGrid Size{$GridSize}">
	<% loop ContentImages %>
		<div class="$FirstLast Image">
			<% if Top.GridSize = 4 %>
				$CroppedImage(310, 230)
			<% else_if Top.GridSize = 3 %>
				<% if First %>
					$CroppedImage(630, 230)
				<% else %>
					$CroppedImage(310, 230)
				<% end_if %>
			<% else_if Top.GridSize = 2 %>
				$CroppedImage(630, 230)
			<% else %>
				$CroppedImage(630, 630)
			<% end_if %>
		</div>
	<% end_loop %>
</div>
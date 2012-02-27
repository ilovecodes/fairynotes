{counter start = 0 skip = 1 assign = counter print=false}
<div id="content">
<table>
	
	<tr class="table_row_{$counter % 2 + 1}">
	{counter}
		<th></th>
		<th>Title</th>
		
		{if $is_admin}
			<th>Author</th>
		{/if}
		
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<!--<th>Actions</th>-->
	</tr>
	{$form}
	
		{foreach from=$form_elements item=form_element}
			<tr class="table_row_{$counter % 2 + 1}">
			{counter}
				<td>{$form_element['checkbox']}</td>
				<td>{$form_element['title']}</td>
				{if $is_admin}
					<td>{$form_element['author']} </td>
				{/if}
				<td>{$form_element['status']}</td>
				<td>{$form_element['date_created']}</td>
				<td>{$form_element['date_updated']}</td>
				<!--<td>{$form_element['view_link']}</td>-->
			</tr>
		{/foreach}
</table>
	{$approve}
	{$delete}
</div>
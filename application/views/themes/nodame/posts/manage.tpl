<!--  {counter start = 0 skip = 1 assign=count} -->
<div id="art-Post">
<table>
	<tr class="table_row_{$count%2 + 1}">
		<!---->
		<th></th>
		<th>Title</th>
		<th>Author</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
	</tr>
	{$form}
	
		{foreach from=$form_elements item=form_element}
			<!-- {counter} -->
			<tr class="table_row_{$count % 2 + 1}">
				<td>{$form_element['checkbox']}</td>
				<td>{$form_element['title']}</td>
				<td>{$form_element['author']} </td>
				<td>{$form_element['status']}</td>
				<td>{$form_element['date_created']}</td>
				<td>{$form_element['date_updated']}</td>
				
			</tr>
		{/foreach}
</table>
	<div id="action">
		{$approve}
		{$delete}
	</div>
</div>
{counter start=0 skip=1 print=false assign=count}
{counter start = 0 skip = 1 assign = counter print=false}
<div id="content">
<table>
	
	<tr class="table_row_{$counter % 2 + 1}">
	{counter}
		<th></th>
		<th>Title</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<th>Edit</th>
		<th>Actions</th>
	</tr>
	{$form}
	
		{foreach from=$posts item=post}
			<tr class="table_row_{$counter % 2 + 1}">
				{counter}
				<td>{$post['checkbox']}</td>
				<td>{$post['title']}</td>
				<td>{$post['status']}</td>
				<td>{$post['date_created']}</td>
				<td>{$post['date_updated']}</td>
				<td>{$post['edit_link']}</td>
				<td><a href="javascript:void(0);" class="delete" 
						rel="{$post['delete_link']}">Delete</a></td>
			</tr>
		{/foreach}
</table>
	{$approve}
	{$hide}
	{$delete}
</div>

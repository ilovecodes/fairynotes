{counter start=0 skip=1 print=false assign=count}
<div id="content">
<h2>Manage Users</h2>
<table>
	{counter}
	<tr class="table_row_{$count % 2 +1}">
		{foreach from=$table_headers item=table_header}
			<th>{$table_header}</th>
		{/foreach}
	</tr>
	
		{foreach from=$table_rows item=table_row}
			{counter}
			<tr class="table_row_{$count % 2 +1}">
				<td>{$table_row['username']}</td>
				<td>{$table_row['name']}</td>
				<td>{$table_row['email']}</td>
				<td>{$table_row['status']}</td>
				<td>{$table_row['make_admin']}</td>
				<td>{$table_row['edit']}</td>
				<td>{$table_row['disable']}</td>
				{if $table_row['delete_all']['link'] != ''}
				<td><a href="javascript:void(0);" class="delete" rel="{$table_row['delete_all']['link']}">{$table_row['delete_all']['label']}</a></td>
				{else}
				<td>{$table_row['delete_all']['label']}</td>
				{/if}
			</tr>
		{/foreach}
	
</table>
{$register_user}
</div>
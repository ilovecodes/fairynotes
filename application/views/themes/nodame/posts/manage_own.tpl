<br/>
	<h1>My Posts</h2>
	<span><a href="{$edit_profile['link']}">{$edit_profile['label']}</a></span>
	<br/>
	<span><a href="{$new_post['link']}">{$new_post['label']}</a></span>
	{if $empty_posts}
		{$no_post_message}
	{else}
		<table>
			{counter}
			<tr class="table_row_{$count%2+1}"><th>Title</th>
			<th>Date Created</th>
			<th>Status</th>
			<th></th>
			<th>Post Actions</th>
			<th></th></tr>
				{foreach from=$posts item=post}
					{counter}
					<tr class="table_row_{$count%2+1}">
						<td>{$post['title']}</td>
						<td>{$post['date_created']}</td>
						<td>{$post['status']}</td>
						<td>{$post['view_link']}</td>
						<td>{$post['edit_link']}</td>
						<td><a href="javascript:void(0);" class="delete" 
						       rel="{$post['delete_link']}">Delete</a></td>
					</tr>
				{/foreach}
		</table>
	<br/>
	{/if}
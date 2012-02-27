	<div id="pages">
		<ul>
			{if $logged_in}
				<li>Welcome {$username}!</li>
				<li>{$newpost}</li>
				<li>{$logout}</li>
				{if $is_admin}
					<li>{$manage_users}</li>
					<li>{$manage_posts}</li>
				{/if}
			{else}
				<li>{$login}</li>
			{/if}
		</ul>
	</div>

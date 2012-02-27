	<div id="pages">
		<ul>
			{if $logged_in}
                		<li>
                			<a href="{$username['link']}">{$username['label']}</a>
                		</li>
                		
						<li>
                			<a href="{$new_post['link']}">{$new_post['label']}</a>
                		</li>						
						{if $is_admin}
                		<li>
                			<a href="{$manage['link']}">{$manage['label']}</a>
                		</li>
						
						{/if}
						
						{if $fb_enabled == "disabled"}
							<li>
                			<a href="{$logout['link']}">{$logout['label']}</a>
      
                			</li>	
                		{/if}
                		
					{else}
						<li>
                			<a href="{$login['link']}">{$login['label']}</a>
                		</li>
					{/if}
		</ul>
	</div>


<div class="header_resize">
	<div id="menuwrap">		
	<ul>		
					{if $logged_in}
                		<li>
                			<a href="{$username['link']}" class=" active">{$username['label']}</a>
                		</li>
                		
						<li>
                			<a href="{$new_post['link']}">{$new_post['label']}</a>
                		</li>
                		
                		<li>
                			<a href="{$change_theme['link']}">{$change_theme['label']}</a>
                		</li>	
                		
                		<li>
                			<a href="{$dashboard['link']}">{$dashboard['label']}</a>
                		</li>
                								
						{if $is_admin && $fb_enabled == 'disabled'}
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
</div>
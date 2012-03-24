<div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
					{if $logged_in}
                		<li>
                			<a href="{$username['link']}" class=" active"><span class="l"></span><span class="r"></span><span class="t">{$username['label']}</span></a>
                		</li>
                		
						<li>
                			<a href="{$new_post['link']}"><span class="l"></span><span class="r"></span><span class="t">{$new_post['label']}</span></a>
                		</li>

						<li>
                			<a href="{$dashboard['link']}"><span class="l"></span><span class="r"></span><span class="t">{$dashboard['label']}</span></a>
                		</li>
						{if $is_admin}
                		<li>
                			<a href="{$manage['link']}"><span class="l"></span><span class="r"></span><span class="t">{$manage['label']}</span></a>
                		</li>
						
						{/if}
						
						{if $fb_enabled == "disabled"}
							<li>
                			<a href="{$logout['link']}"><span class="l"></span><span class="r"></span><span class="t">{$logout['label']}</span></a>
      
                			</li>	
                		{/if}
                		
					{else}
						<li>
                			<a href="{$login['link']}"><span class="l"></span><span class="r"></span><span class="t">{$login['label']}</span></a>
                		</li>
					{/if}
                	</ul>
</div>
<div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
					{if $logged_in}
                		<li>
                			<a href="index.php" class=" active"><span class="l"></span><span class="r"></span><span class="t">{$username}</span></a>
                		</li>
                		
                  			<li>
                				<a href="#"><span class="l"></span><span class="r"></span><span class="t">{$logout}</span></a>
      
                			</li>	
            						
						<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">{$new_post}</span></a>
                		</li>						
						{if $is_admin}
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">{$manage_users}</span></a>
                		</li>
						<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">{$manage_posts}</span></a>
                		</li>
						{/if}
					{else}
						<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
					{/if}
                	</ul>
</div>
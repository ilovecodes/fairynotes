		<div id = "content">
			{foreach from=$articles item=article}
					<div class="entry">
						<h3>{$article['title']}</h3>
						<div class="emeta"> 
							by {$article['author']}
							{$article['date_created']}
						</div>
					
						<div class="ebody">
							{$article['content']}
						</div>
					
						<div class="read"> 
							{$article['view_link']}
						</div>
					</div>
			{/foreach}
			<div class="posts">{$pagination}</div>	
		</div>
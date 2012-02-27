	<div id = "content">
		{foreach from=$articles item=article}
			<h3 class='etitle'> {$article['title']}</h3>
			
			<div class='emeta'>
				by {$article['author']} {$article['date_created']}							
			</div>
			
			{$article['content']}
			<div class="read">{$article['view_link']}</div>
		{/foreach}
		
		<div id = "posts">{$pagination}</div>
	</div>
			
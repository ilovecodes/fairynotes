
<div id="content">	
<!-- NEWPOST ---------------------------------------------------------------------------------------------------------- !-->	
				{foreach from=$articles item=article}	
					<div class="post text">
						 
						<div class="date">
							<p><span class="day"></span>{$article['date_created']}	</p>
						</div>
						
						<h6>{$article['title']}</h6>
						<div class="content">
							
							<h2>{$article['content']}</h2>
							
		
							<h5>Author: {$article['author']}</h5>
							<h3>{$article['view_link']}</h3>
						</div>
					</div>	
				{/foreach}
					
</div>	
<div id="olderpostswrap"><h5><{$pagination}</h5></div>		


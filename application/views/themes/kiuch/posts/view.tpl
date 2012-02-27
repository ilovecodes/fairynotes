
	<!--<div id="pages"></div>-->
		
	<div id = "content">
		
		<h3>{$post -> title}</h3><br/>
		Posted by {$post -> author_name}<br/>

		on {$post -> date_created}<br/>
		<!--Updated, {*$post -> date_updated*}<br/>-->
		<br/>
		<br/>
		<div id="post-content">
			{$post -> content}<br/>
		</div>
		<br><br><br>			
		<div id="back">{$back_to_posts}</div><br><br><br>
	
	</div>
<div id="content">
	<img src="{$profile_picture_link}"></img>
	<b><h1>{$author_name}</h1></b><br/>
	<b>About Me:</b></br>
	{$biography}</br>
	
	<b>Wrote:</b></br>
	{foreach from=$posts item=post}
		{$post['title']}</br>
	{/foreach}
</div>
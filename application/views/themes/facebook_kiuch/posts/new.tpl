<div class="content">
	<div class="form">
		{foreach from=$form_fields item=formfield}
			{if $formfield['label'] != ''}
				{$formfield['label']} :
    		{/if}
	
			{$formfield['field']}
			
			{if $formfield['label'] != ''}
				<br/>
			{/if}
			{if $formfield['error'] != ''}
    			{$formfield['error']}<br/>
    		{/if}
		{/foreach}
	</div>
</div>
<div class="content">
<div class="form">
{foreach from=$form_fields item=formfield}
	{if $formfield['label'] != ''}
		{$formfield['label']} :
    {/if}
	{$formfield['field']}<br/>
    {$formfield['error']}<br/>
{/foreach}
</div>
</div>
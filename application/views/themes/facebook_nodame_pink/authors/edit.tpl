<div id="content">	
<br/>
	{if $no_name}
		{$no_name_notice}
	{/if}
	
	{foreach from=$form_fields item=form_item}
	{if $form_item['label'] != ''}
		<b>{$form_item['label']}</b>:
	{/if}
		{$form_item['form_element']}
		<br/>
{/foreach}
</div>

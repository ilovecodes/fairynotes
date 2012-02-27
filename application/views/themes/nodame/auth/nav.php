<div id="navigation">
<ul>
<?php
	if(logged_in())
	{
	?>
		<li><?php echo anchor('welcome/viewdashboard', 'Dashboard'); ?></li>
		<?php if(user_group('admin')) {?> 
		        <li> <?php echo anchor('users/manage', 'Manage Users'); ?></li>
				<li><?php echo anchor('posts/manage', 'Manage Posts'); ?></li>
		<?php } ?>
		<li><?php echo anchor('logout', 'Logout'); ?></li>
	<?php
	}
	else
	{
	?>
		<li><?php echo anchor('login', 'Login'); ?></li>
		<li><?php echo anchor('register', 'Register'); ?></li>
	<?php
	}
	
?>
</ul>
</div>
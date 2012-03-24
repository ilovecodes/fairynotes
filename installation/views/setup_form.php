<html>
	<?php echo $form_open;
	      foreach($fields as $field) {
			echo $field['label'];
			echo $field['field'];
			echo '</br>';
		  }
		  echo $submit_form;
	?>
</html>
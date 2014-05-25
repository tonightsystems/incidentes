<div class="groups form">
	<?php
		echo $this->Form->create('Group', array(
			'inputDefaults' => array(
				'div' => 'form-group',
				'wrapInput' => false,
				'class' => 'form-control'
			),
			'novalidate'
		));
	?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
	<?php
		echo $this->Form->submit(__('Submit'), array(
			'class' => 'btn btn-primary'
		));
		echo $this->Form->end();
	?>
</div>

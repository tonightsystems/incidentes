<div class="people form">
	<?php
		echo $this->Form->create('Person', array(
			'inputDefaults' => array(
				'div' => 'form-group',
				'wrapInput' => false,
				'class' => 'form-control'
			),
			'novalidate'
		));
	?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
	<?php
		echo $this->Form->submit(__('Submit'), array(
			'class' => 'btn btn-primary'
		));
		echo $this->Form->end();
	?>
</div>

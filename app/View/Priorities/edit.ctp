<div class="priorities form">
	<?php
		echo $this->Form->create('Priority', array(
			'inputDefaults' => array(
				'div' => 'form-group',
				'wrapInput' => false,
				'class' => 'form-control'
			),
			'novalidate'
		));
	?>
	<fieldset>
		<legend><?php echo __('Edit Priority'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('ola_time');
	?>
	</fieldset>
	<?php
		echo $this->Form->submit(__('Submit'), array(
			'class' => 'btn btn-primary'
		));
		echo $this->Form->end();
	?>
</div>

<div class="incidents form">
	<?php
		echo $this->Form->create('Incident', array(
			'inputDefaults' => array(
				'div' => 'form-group',
				'wrapInput' => false,
				'class' => 'form-control'
			),
			'novalidate'
		));
	?>
	<fieldset>
		<legend><?php echo __('Add Incident'); ?></legend>
	<?php
		echo $this->Form->input('title', array(
			'autofocus'
		));
		echo $this->Form->input('description');
		echo $this->Form->input('requestor');
		echo $this->Form->input('Person', array(
			'type' => 'select',
		));
		echo $this->Form->input('Priority', array(
			'type' => 'select',
		));
		echo $this->Form->input('status', array(
			'type' => 'checkbox',
			'label' => __('Closed'),
			'class' => false,
		));
	?>
	</fieldset>
	<?php
		echo $this->Form->submit(__('Submit'), array(
			'class' => 'btn btn-primary'
		));
		echo $this->Form->end();
	?>
</div>

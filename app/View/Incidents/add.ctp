<div class="incidents form">
<?php echo $this->Form->create('Incident'); ?>
	<fieldset>
		<legend><?php echo __('Add Incident'); ?></legend>
	<?php
		echo $this->Form->input('uuid');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('priority_id');
		echo $this->Form->input('closed');
		echo $this->Form->input('Person');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incidents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>

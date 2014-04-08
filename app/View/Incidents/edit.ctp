<div class="incidents form">
<?php echo $this->Form->create('Incident'); ?>
	<fieldset>
		<legend><?php echo __('Edit Incident'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('uuid');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('requestor');
		echo $this->Form->input('closed');
		echo $this->Form->input('Person');
		echo $this->Form->input('Priority');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Incident.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Incident.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
	</ul>
</div>

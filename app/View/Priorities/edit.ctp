<div class="priorities form">
<?php echo $this->Form->create('Priority'); ?>
	<fieldset>
		<legend><?php echo __('Edit Priority'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('ola_time');
		echo $this->Form->input('Incident');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Priority.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Priority.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
	</ul>
</div>

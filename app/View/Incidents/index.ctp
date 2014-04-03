<div class="incidents index">
	<h2><?php echo __('Incidents'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('uuid'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('priority_id'); ?></th>
			<th><?php echo $this->Paginator->sort('closed'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($incidents as $incident): ?>
	<tr>
		<td><?php echo h($incident['Incident']['id']); ?>&nbsp;</td>
		<td><?php echo h($incident['Incident']['uuid']); ?>&nbsp;</td>
		<td><?php echo h($incident['Incident']['title']); ?>&nbsp;</td>
		<td><?php echo h($incident['Incident']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($incident['Priority']['name'], array('controller' => 'priorities', 'action' => 'view', $incident['Priority']['id'])); ?>
		</td>
		<td><?php echo h($incident['Incident']['closed']); ?>&nbsp;</td>
		<td><?php echo h($incident['Incident']['created']); ?>&nbsp;</td>
		<td><?php echo h($incident['Incident']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $incident['Incident']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incident['Incident']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incident['Incident']['id']), null, __('Are you sure you want to delete # %s?', $incident['Incident']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
	<?php echo $this->Paginator->pagination(array(
		'ul' => 'pagination'
	)); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Incident'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="priorities index">
	<h2><?php echo __('Priorities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('ola_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($priorities as $priority): ?>
	<tr>
		<td><?php echo h($priority['Priority']['id']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['name']); ?>&nbsp;</td>
		<td><?php echo h($priority['Priority']['ola_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $priority['Priority']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $priority['Priority']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $priority['Priority']['id']), null, __('Are you sure you want to delete # %s?', $priority['Priority']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Priority'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
	</ul>
</div>

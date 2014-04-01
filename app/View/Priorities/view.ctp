<div class="priorities view">
<h2><?php echo __('Priority'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ola Time'); ?></dt>
		<dd>
			<?php echo h($priority['Priority']['ola_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Priority'), array('action' => 'edit', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Priority'), array('action' => 'delete', $priority['Priority']['id']), null, __('Are you sure you want to delete # %s?', $priority['Priority']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Incidents'); ?></h3>
	<?php if (!empty($priority['Incident'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Uuid'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Priority Id'); ?></th>
		<th><?php echo __('Closed'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($priority['Incident'] as $incident): ?>
		<tr>
			<td><?php echo $incident['id']; ?></td>
			<td><?php echo $incident['uuid']; ?></td>
			<td><?php echo $incident['title']; ?></td>
			<td><?php echo $incident['description']; ?></td>
			<td><?php echo $incident['priority_id']; ?></td>
			<td><?php echo $incident['closed']; ?></td>
			<td><?php echo $incident['created']; ?></td>
			<td><?php echo $incident['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incidents', 'action' => 'view', $incident['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incidents', 'action' => 'edit', $incident['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incidents', 'action' => 'delete', $incident['id']), null, __('Are you sure you want to delete # %s?', $incident['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="incidents view">
<h2><?php echo __('Incident'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uuid'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['uuid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requestor'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['requestor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['closed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Incident'), array('action' => 'edit', $incident['Incident']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Incident'), array('action' => 'delete', $incident['Incident']['id']), null, __('Are you sure you want to delete # %s?', $incident['Incident']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Priorities'), array('controller' => 'priorities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<?php if (!empty($incident['Person'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($incident['Person'] as $person): ?>
		<tr>
			<td><?php echo $person['id']; ?></td>
			<td><?php echo $person['name']; ?></td>
			<td><?php echo $person['group_id']; ?></td>
			<td><?php echo $person['created']; ?></td>
			<td><?php echo $person['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), null, __('Are you sure you want to delete # %s?', $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Priorities'); ?></h3>
	<?php if (!empty($incident['Priority'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ola Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($incident['Priority'] as $priority): ?>
		<tr>
			<td><?php echo $priority['id']; ?></td>
			<td><?php echo $priority['name']; ?></td>
			<td><?php echo $priority['ola_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'priorities', 'action' => 'view', $priority['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'priorities', 'action' => 'edit', $priority['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'priorities', 'action' => 'delete', $priority['id']), null, __('Are you sure you want to delete # %s?', $priority['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Priority'), array('controller' => 'priorities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

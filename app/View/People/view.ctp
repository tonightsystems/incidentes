<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Group']['name'], array('controller' => 'groups', 'action' => 'view', $person['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($person['Person']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incidents'), array('controller' => 'incidents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incident'), array('controller' => 'incidents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Incidents'); ?></h3>
	<?php if (!empty($person['Incident'])): ?>
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
	<?php foreach ($person['Incident'] as $incident): ?>
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

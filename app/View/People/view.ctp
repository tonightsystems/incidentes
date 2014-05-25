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

<?php if (!empty($person['Incident'])): ?>
<div class="related">
	<h3><?php echo __('Related Incidents'); ?></h3>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th width="2%"><input type="checkbox" name="" id=""></th>
					<th><?php echo __('Title'); ?></th>
					<th width="10%"><?php echo __('Priority'); ?></th>
					<th width="10%"><?php echo __('Status'); ?></th>
					<th width="13%"><?php echo __('Created'); ?></th>
				</tr>
			</thead>
			<?php foreach ($person['Incident'] as $incident): ?>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>
					<?php echo $this->Html->link($incident['Incident']['title'], array('action' => 'view', $incident['Incident']['id'])); ?> <br>
					<small><em><?php echo $this->Text->truncate($incident['Incident']['description'], 100) ?>&nbsp;</em></small></td>
				<td><?php echo h($incident['IncidentsPriority'][0]['name']) ?>&nbsp;</td>
				<td><?php echo ($incident['Incident']['status']) ? __('Closed') : __('Open'); ?>&nbsp;</td>
				<td><?php echo $this->Time->format($incident['Incident']['created'], '%e de %B de %Y <br> as %H:%M %p'); ?>&nbsp;</td>
				<!-- <td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $incident['Incident']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $incident['Incident']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $incident['Incident']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $incident['Incident']['id'])); ?>
				</td> -->
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php endif; ?>

<div class="groups view">
<h2><?php echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php if (!empty($group['Person'])): ?>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
			<thead>
				<tr>
					<th><?php echo __('Name'); ?></th>
					<th width="13%" class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<?php foreach ($group['Person'] as $person): ?>
				<tr>
					<td><?php echo $this->Html->link($person['name'], array('controller' => 'people', 'action' => 'view', $person['id'])); ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'people', 'action' => 'view', $person['id']), array('class' => 'btn btn-xs btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'people', 'action' => 'edit', $person['id']), array('class' => 'btn btn-xs btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'people', 'action' => 'delete', $person['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $person['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php endif; ?>

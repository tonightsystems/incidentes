<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<?php echo $this->Html->link(__('New Person'), array('action' => 'add'), array('class' => 'btn btn-primary btn-sm')); ?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th width="20%"><?php echo $this->Paginator->sort('group_id'); ?></th>
					<th width="13%" class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<?php foreach ($people as $person): ?>
			<tr>
				<td><?php echo $this->Html->link($person['Person']['name'], array('action' => 'view', $person['Person']['id'])); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($person['Group']['name'], array('controller' => 'groups', 'action' => 'view', $person['Group']['id'])); ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<div class="paging">
		<?php echo $this->Paginator->pagination(array(
			'ul' => 'pagination'
		)); ?>
	</div>
</div>

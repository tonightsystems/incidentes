<div class="priorities index">
	<h2><?php echo __('Priorities'); ?></h2>
	<?php echo $this->Html->link(__('New Priority'), array('action' => 'add'), array('class' => 'btn btn-primary btn-sm')); ?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th width="30%"><?php echo $this->Paginator->sort('ola_time'); ?></th>
					<th width="13%" class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<?php foreach ($priorities as $priority): ?>
			<tr>
				<td><?php echo $this->Html->link($priority['Priority']['name'], array('action' => 'view', $priority['Priority']['id'])); ?>&nbsp;</td>
				<td><?php echo h($priority['Priority']['ola_time']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $priority['Priority']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $priority['Priority']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $priority['Priority']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $priority['Priority']['id'])); ?>
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

<div class="groups index">
	<h2><?php echo __('Groups'); ?></h2>
	<?php echo $this->Html->link(__('New Group'), array('action' => 'add'), array('class' => 'btn btn-primary btn-sm')); ?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th width="13%" class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<?php foreach ($groups as $group): ?>
			<tr>
				<td><?php echo $this->Html->link($group['Group']['name'], array('action' => 'view', $group['Group']['id'])); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class' => 'btn btn-xs btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-xs btn-danger'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
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

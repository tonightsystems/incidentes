<div class="incidents view">
	<h2><?php echo __('Incident'); ?></h2>
	<?php echo $this->Html->link(__('Edit Incident'), array('action' => 'edit', $incident['Incident']['id']), array('class' => 'btn btn-primary btn-sm')); ?>
	<?php echo $this->Html->link(__('Export Incident'), array('action' => 'view', $incident['Incident']['id'], 'ext' => 'json'), array('class' => 'btn btn-default btn-sm')); ?>
	<dl>
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
			<?php echo $this->Text->autoParagraph($incident['Incident']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requestor'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['requestor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo ($incident['Incident']['status']) ? __('Closed') : __('Open'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($incident['Incident']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<?php if (!empty($incident['IncidentPerson'])): ?>
<div class="related">
	<h3><?php echo __('Related People'); ?></h3>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
			<thead>
				<tr>
					<th><?php echo __('Person'); ?></th>
					<th width="14%"><?php echo __('Date'); ?></th>
				</tr>
			</thead>
			<?php foreach ($incident['IncidentPerson'] as $person): ?>
				<tr>
					<td><?php echo $person['Person']['name']; ?></td>
					<td><?php echo $this->Time->format($person['created'], '%e/%m/%Y <br> as %H:%M %p'); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php endif; ?>

<?php if (!empty($incident['IncidentPriority'])): ?>
<div class="related">
	<h3><?php echo __('Related Priorities'); ?></h3>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped table-condensed">
			<thead>
				<tr>
					<th><?php echo __('Priority'); ?></th>
					<th width="14%"><?php echo __('Date'); ?></th>
				</tr>
			</thead>
			<?php foreach ($incident['IncidentPriority'] as $priority): ?>
				<tr>
					<td><?php echo $priority['Priority']['name']; ?></td>
					<td><?php echo $this->Time->format($priority['created'], '%e/%m/%Y <br> as %H:%M %p'); ?>&nbsp;</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php endif; ?>

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

<?php if (!empty($priority['Incident'])): ?>
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
			<?php foreach ($priority['Incident'] as $incident): ?>
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>
					<?php echo $this->Html->link($incident['Incident']['title'], array('action' => 'view', $incident['Incident']['id'])); ?> <br>
					<small><em><?php echo $this->Text->truncate($incident['Incident']['description'], 100) ?>&nbsp;</em></small></td>
				<td><?php echo h($incident['IncidentsPriority'][0]['name']) ?>&nbsp;</td>
				<td><?php echo ($incident['Incident']['status']) ? __('Closed') : __('Open'); ?>&nbsp;</td>
				<td><?php echo $this->Time->format($incident['Incident']['created'], '%e de %B de %Y <br> as %H:%M %p'); ?>&nbsp;</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
<?php endif; ?>

<div class="incidents index">
	<h2><?php echo __('Incidents'); ?></h2>
	<?php echo $this->Html->link(__('New Incident'), array('action' => 'add'), array('class' => 'btn btn-primary btn-sm')); ?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<!-- <th width="2%"><input type="checkbox" name="" id=""></th> -->
					<th><?php echo $this->Paginator->sort('title'); ?></th>
					<th width="10%"><?php echo $this->Paginator->sort('Priority'); ?></th>
					<th width="10%"><?php echo $this->Paginator->sort('status'); ?></th>
					<th width="13%"><?php echo $this->Paginator->sort('created'); ?></th>
				</tr>
			</thead>
			<?php foreach ($incidents as $incident): ?>
			<tr>
				<!-- <td><input type="checkbox" name="" id=""></td> -->
				<td>
					<?php echo $this->Html->link($incident['Incident']['title'], array('action' => 'view', $incident['Incident']['id'])); ?> <br>
					<small><em><?php echo $this->Text->truncate($incident['Incident']['description'], 100) ?>&nbsp;</em></small></td>
				<td><?php echo h($incident['IncidentPriority'][0]['Priority']['name']) ?>&nbsp;</td>
				<td><?php echo ($incident['Incident']['status']) ? __('Closed') : __('Open'); ?>&nbsp;</td>
				<td><?php echo $this->Time->format($incident['Incident']['created'], '%e/%m/%Y <br> %H:%M %p'); ?>&nbsp;</td>
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

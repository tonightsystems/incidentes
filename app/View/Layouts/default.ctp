<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->css([
			'bootstrap.min',
			'custom',
		]);
	?>
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Incidentes</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><?php echo $this->Html->link(__('New Incident'), array('action' => 'add')); ?></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li><a href="<?php echo $this->Html->url(['controller' => 'incidents', 'action' => 'index']) ?>">Incidentes</a></li>
					<li><a href="<?php echo $this->Html->url(['controller' => 'priorities', 'action' => 'index']) ?>">Prioridades</a></li>
					<li><a href="<?php echo $this->Html->url(['controller' => 'people', 'action' => 'index']) ?>">Funcionários</a></li>
					<li><a href="<?php echo $this->Html->url(['controller' => 'groups', 'action' => 'index']) ?>">Grupos</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<?php
					echo $this->Session->flash();
					echo $this->fetch('content');
					echo $this->element('sql_dump');
				?>
			</div>
		</div>
	</div>

</body>
</html>

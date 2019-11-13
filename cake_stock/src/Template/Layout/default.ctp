<!doctype html>
<html lang="en">
	<head>
		

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<?= $this->Html->charset() ?>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>
	        <?= $cakeDescription ?>:
	        <?= $this->fetch('title') ?>
	    </title>
	    <?= $this->Html->meta('icon') ?>

	    <?= $this->Html->css('bootstrap.min') ?>

	    <?= $this->fetch('meta') ?>
	    <?= $this->fetch('css') ?>

	</head>
	<body>

    <header>
		  <div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
			  <div class="row">
				<div class="col-sm-3 col-md-4 py-4">
					<a href="#" class="text-white">
					  <h4 class="text-white"><i class="material-icons md-18">cloud_download</i>  Export</h4>
					  <p class="text-muted">Télécharger l'ensemble en un fichier</p>
					</a>
				</div>
				<div class="col-sm-4 col-md-4 py-4">
					<a href="#" class="text-white">
					  <h4 class="text-white"><i class="material-icons md-18">cloud_upload</i>  Import</h4>
					  <p class="text-muted">importer via un fichier</p>
					</a>
				</div>
				<div class="col-sm-4 col-md-4 py-4">
					<a href="#" class="text-white">
					  <h4 class="text-white"><i class="material-icons md-18">find_replace</i>  Stock Alert</h4>
					  <p class="text-muted">Vérifier les stocks alerts</p>
					</a>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
			  <a href="#" class="navbar-brand d-flex align-items-center">
				<i class="material-icons md-18">pets</i>
				<strong><?= $this->fetch('title') ?></strong>
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			</div>
		  </div>
		</header>

		<main role="main">
			<?= $this->fetch('content') ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-md-8 py-3">
						<input type="text" class="form-control" id="search" placeholder="Recherche">
					</div>
					<div class="col-sm-10 col-md-4 py-3">
						<button type="button" class="btn btn-secondary">
							+ Ajouter
						</button>
					</div>
				</div>
			</div>
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">First</th>
				  <th scope="col">Last</th>
				  <th scope="col">Handle</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Mark</td>
				  <td>Otto</td>
				  <td>@mdo</td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Jacob</td>
				  <td>Thornton</td>
				  <td>@fat</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Larry</td>
				  <td>the Bird</td>
				  <td>@twitter</td>
				</tr>
			  </tbody>
			</table>
		</main>

		<footer class="text-muted">
		  <div class="container">
			<p class="float-right">
			  <a href="#">Back to top</a>
			</p>
			<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
			<p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
		  </div>
		</footer>

	</body>
	<?= $this->Html->script('jquery.min');?>
	<?= $this->Html->script('popper.min');?>
	<?= $this->Html->script('bootstrap.min');?>
	<?= $this->fetch('script') ?>
</html>
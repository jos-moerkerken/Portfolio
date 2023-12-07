<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php ?><title><?= $page->title()->esc() ?></title><?php ?>
  <?php ?><link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
  <script src="https://kit.fontawesome.com/d3c80d56e2.js" crossorigin="anonymous"></script>

  <?= css([
  'assets/css/main.css',
  'assets/css/nav.css',
  'assets/css/project.css',
  'assets/css/projects.css'
]) ?>

  
</head>
<body data-barba="wrapper">
	<div class="load-container">
		<div class="loading-screen"></div>
	</div>

	<header>
		<div class="container big">
			<a href="<?= $site->url() ?>"><h2><span>Jos</span> Moerkerken</h2></a>
			<nav>
				<ul>
					<?php foreach ($site->children()->listed() as $item): ?>
						<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
					<?php endforeach ?>
					<div class="button primary">Contact</div>
				</ul>
			</nav>
			<button class="hamburger">
				<div class="bar"></div>
			</button>
		</div>
	</header>
	<nav class="mobile-nav">
		<ul>
		<?php foreach ($site->children()->listed() as $item): ?>
			<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
		<?php endforeach ?>
		</ul>
	</nav>

  

  
  

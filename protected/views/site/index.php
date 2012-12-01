<!-- Main Blog Content -->
<div class="six columns">
	<div class="panel welcome">
		<?php $this->widget('ArticleWidget', array('type' => 'single', 'article' => 'frontpage')); ?>
		<?php echo CHtml::link('Zapisz swoje dziecko do naszego Przedszkola', array('/site/page', 'view' => 'registration'), array('class' => 'large button regis')); ?>
		<img class="bear" src="css/images/bear.png" alt="Proszę. Zapisz dziecko... :)" />
	</div>
	<div class="panel">
		<h5>Aktualności</h5>
		<?php $this->widget('ArticleWidget', array('type' => 'news', 'query' => array('condition' => 'tags="news"', 'order' => 'creation_date DESC', 'limit' => 2))); ?>
	</div>
</div>
<!-- End Main Content -->

<!-- Sidebar -->
<aside class="six columns">
	<?php $this->widget('OrbitWidget', array(
	'images' => array(
		'http://placehold.it/1000x400&text=[orbit-1]',
		'http://placehold.it/1000x400&text=[orbit-2]',
		'http://placehold.it/1000x400&text=[orbit-3]',
		'http://placehold.it/1000x400&text=[orbit-4]'
	)
)); ?>

	<div class="panel">
		<h5>Dziękujemy za wsparcie:</h5>

		<div class="row">
			<div class="four columns">
				<img src="http://placehold.it/100x100&text=[sponsor-1]" />
			</div>
			<div class="four columns">
				<img src="http://placehold.it/100x100&text=[sponsor-2]" />
			</div>
			<div class="four columns">
				<img src="http://placehold.it/100x100&text=[sponsor-3]" />
			</div>
		</div>
	</div>
</aside>
<!-- End Sidebar -->

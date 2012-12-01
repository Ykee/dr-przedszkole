<div class="eight columns">
	<div class="panel">
		<div class="callout panel">
			<p>Galeria</p>
		</div>
		<ul class="link-list">
			<li><?php echo CHtml::link('<img src="http://placehold.it/32x32&text=[1]"/>Wszystkie grupy', array('/site/gallery', 'filter' => 0)); ?></li>
			<li><?php echo CHtml::link('<img src="http://placehold.it/32x32&text=[1]"/>Biedronki', array('/site/gallery', 'filter' => 1)); ?></li>
			<li><?php echo CHtml::link('<img src="http://placehold.it/32x32&text=[1]"/>Motylki', array('/site/gallery', 'filter' => 2)); ?></li>
			<li><?php echo CHtml::link('<img src="http://placehold.it/32x32&text=[1]"/>Pszczółki', array('/site/gallery', 'filter' => 3)); ?></li>
			<li><?php echo CHtml::link('<img src="http://placehold.it/32x32&text=[1]"/>Mrówki', array('/site/gallery', 'filter' => 4)); ?></li>
		</ul>
		<div class="row">
			<?php
			$total = 0;
			foreach($images as $val){
				$total++;
				?><div class="three columns">
                    <img src="<?php echo $val->path; ?>" />
                </div><?php
			}

			while($total % 4 != 0){
				$total++;
				echo '<div class="three columns"></div>';
			}?>
		</div>
		<?php $this->widget('CLinkPager', array(
		'pages' => $pages,
		'selectedPageCssClass' => 'current',
		'firstPageLabel' => '',
		'lastPageLabel' => '',
		'prevPageLabel' => '&laquo;',
		'previousPageCssClass' => 'arrow',
		'nextPageLabel' => '&raquo;',
		'nextPageCssClass' => 'arrow',
		'header' => '',
		'htmlOptions' => array('class' => 'pagination')
	)); ?>
	</div>
</div>
<div class="four columns">
	<img src="http://placehold.it/700x850&text=[side]" />
</div>

<div class="eight columns">
	<div class="panel">
		<?php $this->widget('ArticleWidget', array('type' => 'single', 'article' => $name)); ?>
	</div>
</div>
<div class="four columns">
	<div class="panel">
		<?php $this->widget('ArticleWidget', array('type' => 'title_list', 'article' => $name, 'query' => array('condition' => 'tags="about"'))); ?>
	</div>
</div>

<?php

class ArticleWidget extends CWidget {
	public $article;
	public $query;
	public $type;
	public $noTitleLink;

	public function run(){
		$model = new Articles;
		switch($this->type){
			case 'single':
				$item = $model->find('text_id="'.$this->article.'"');
				if($item == NULL) break;
				if($item->tags == 'news') echo '<h6>'.$item->creation_date.'</h6>';
				if($this->noTitleLink)
					echo '<h5>'.$item->title.'</h5>';
				else
					echo '<h5><a href="/index.php?r=site/article&name='.$item->text_id.'">'.$item->title.'</a></h5>';
				echo $item->content;
				break;
			case 'page':
				$item = $model->find('text_id="'.$this->article.'"');
				if($item == NULL) break;
				echo '<div class="callout panel"><h5>'.$item->title.'</h5></div>';
				echo $item->content;
				break;
				break;
			case 'news':
				$articles = $model->findAll($this->query);
				if($articles == NULL) break;
				$hr = 0;
				foreach($articles as $item){
					$hr == 0 ? $hr = 1 : print('<hr />');
					echo '<h6>'.$item->creation_date.'</h6>';
					echo '<h5><a href="/index.php?r=site/article&name='.$item->text_id.'">'.$item->title.'</a></h5>';
					echo $item->content;
				}
				break;
			case 'title_list':
				$articles = $model->findAll($this->query);
				if($articles == NULL) break;
				echo '<ul class="nav-bar vertical">';
				foreach($articles as $item){
					echo '<li'.($item->text_id==$this->article ? ' class="active"' : '').'><a href="'.Yii::app()->getRequest()->getScriptUrl().'?r='.Yii::app()->getRequest()->getParam('r').'&name='.$item->text_id.'">'.$item->title.'</a></li>';
				}
				echo '</ul>';
				break;
		}
	}
}

?>

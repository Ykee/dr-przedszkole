<?php

class SiteController extends Controller {

	/**
	 * Declares class-based actions.
	 */
	public function actions(){
		return array(
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}
	
	public function actionIndex(){
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError(){
		if($error = Yii::app()->errorHandler->error){
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionGallery($filter = 0){
		$filter = (int)$filter;
		if($filter < 0 || $filter > 4) $filter = 0;
		$filterString = '';
		switch($filter){
			case 1:
				$filterString = 'biedronki';
				break;
			case 2:
				$filterString = 'motylki';
				break;
			case 3:
				$filterString = 'pszczolki';
				break;
			case 4:
				$filterString = 'mrowki';
				break;
		}

		$model = new Images;
		$criteria = new CDbCriteria();
		if($filter != 0) $criteria->condition = "attributes LIKE '%" . $filterString . "%'";
		$count = $model->count($criteria);
		$pages = new CPagination($count);
		$pages->pageSize = 8;
		$pages->applyLimit($criteria);

		$images = $model->findAll($criteria);

		$this->render('gallery', array('images' => $images, 'pages' => $pages));
	}

	public function actionInfo($name = 'about1'){
		$this->render('info', array('name' => $name));
	}

	public function actionArticle($name = 'frontpage'){
		$this->render('article', array('name' => $name));
	}
}

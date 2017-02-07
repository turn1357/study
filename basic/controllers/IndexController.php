<?php
 
namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
	    //echo 233;
	return $this->render("index");
    }
}

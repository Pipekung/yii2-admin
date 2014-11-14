<?php

namespace mdm\admin\controllers;

/**
 * DefaultController
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class DefaultController extends \yii\web\Controller
{
	public $layout = '@app/themes/bootstrap/views/layouts/admin';
    /**
     * Action index
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

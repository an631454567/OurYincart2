<?php

namespace star\member;

use Yii;
use yii\web\ForbiddenHttpException;
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'star\member\controllers';
    public $layout = '/member';
    public function init()
    {
        parent::init();
        // custom initialization code goes here
    }
}

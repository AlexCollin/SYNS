<?php
/**
 * Date: 22.04.15
 * Time: 15:59
 * Project: TimeShift
 * Developer: Alex Collin <alex@collin.su>
 *
 * Copyright by "CleverTek LLC" 2014-2015
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ErrorController extends Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => '\yii\web\ErrorAction',
                'view' => 'index.php',
            ],
        ];
    }

}

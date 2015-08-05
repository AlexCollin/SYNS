<?php
/**
 * Date: 03.05.15
 * Time: 0:03
 * Project: TimeShift
 * Developer: Alex Collin <alex@collin.su>
 *
 * Copyright by "CleverTek LLC" 2014-2015
 */

namespace api\modules\user\controllers;

use api\components\controllers\AuthActiveController;
use Yii;

class ProfileController extends AuthActiveController {

    public $modelClass = 'api\models\AR\user\ProfileUser';

    public function actions() {
        $actions = parent::actions();
        $actions['view']['class'] = 'api\modules\user\controllers\profile\ViewAction';
        $actions['update']['class'] = 'api\modules\user\controllers\profile\UpdateProfileAction';
        return $actions;
    }


}
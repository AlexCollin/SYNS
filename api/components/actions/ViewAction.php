<?php
/**
 * Date: 21.06.15
 * Time: 4:12
 * Project: TimeShift
 * Developer: Alex Collin <alex@collin.su>
 *
 * Copyright by "CleverTek LLC" 2014-2015
 */

namespace api\components\actions;

use yii\rest\ViewAction as BaseViewAction;
use yii\base\Model;

class ViewAction extends BaseViewAction
{
    public $scenario = Model::SCENARIO_DEFAULT;

}
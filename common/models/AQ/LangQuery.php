<?php
/**
 * Date: 19.06.15
 * Time: 15:35
 * Project: TimeShift
 * Developer: Alex Collin <alex@collin.su>
 *
 * Copyright by "CleverTek LLC" 2014-2015
 */

namespace app\models\AQ;

/**
 * This is the ActiveQuery class for [[\app\models\AR\Lang]].
 *
 * @see \app\models\AR\Lang
 */

use app\components\ActiveQuery as BaseActiveQuery;

class LangQuery extends BaseActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \app\models\AR\Lang[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\AR\Lang|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
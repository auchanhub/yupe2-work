<?php

namespace omg\work\common\search\models;

/**
 * This is the ActiveQuery class for [[\plugins\omg\work\common\models\Work]].
 *
 * @see \plugins\omg\work\common\models\Work
 */
class WorkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \plugins\omg\work\common\models\Work[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \plugins\omg\work\common\models\Work|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

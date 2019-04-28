<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Disciplines]].
 *
 * @see \app\models\Disciplines
 */
class DisciplinesQuery extends \yii\db\ActiveQuery
{
    public function active()
    {
        return $this->andWhere(['isDeleted' => false]);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Disciplines[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Disciplines|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

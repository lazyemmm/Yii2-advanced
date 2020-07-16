<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    /**
     * @return string Active Record 类关联的数据库表名称【如果表明和当前models的类名不相同则利用下面的方法申明表明】
     */
    public static function tableName()
    {
        return '{{country}}';
    }
}
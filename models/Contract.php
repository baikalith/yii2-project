<?php
namespace app\models;

use yii\db\ActiveRecord;

class Contract extends ActiveRecord
{
    public static function tableName() { return 'contracts'; }

    public function getClient()
    {
        return $this->hasOne(Client::class, ['id' => 'client_id']);
    }
}
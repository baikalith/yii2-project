<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $name
 * @property string|null $activity_type
 * @property string|null $country
 * @property string|null $city
 * @property string|null $address
 * @property string|null $director_name
 *
 * @property Contracts[] $contracts
 */
class Clients extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_type', 'country', 'city', 'address', 'director_name'], 'default', 'value' => null],
            [['name'], 'required'],
            [['address'], 'string'],
            [['name', 'activity_type', 'director_name'], 'string', 'max' => 255],
            [['country', 'city'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'activity_type' => 'Activity Type',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'director_name' => 'Director Name',
        ];
    }

    /**
     * Gets query for [[Contracts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contracts::class, ['client_id' => 'id']);
    }

}

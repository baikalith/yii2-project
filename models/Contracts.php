<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property int $id
 * @property string $contract_number
 * @property string $sign_date
 * @property int $client_id
 * @property float $amount
 *
 * @property Clients $client
 * @property Projects[] $projects
 */
class Contracts extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contract_number', 'sign_date', 'client_id', 'amount'], 'required'],
            [['sign_date'], 'safe'],
            [['client_id'], 'integer'],
            [['amount'], 'number'],
            [['contract_number'], 'string', 'max' => 100],
            [['contract_number'], 'unique'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::class, 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contract_number' => 'Contract Number',
            'sign_date' => 'Sign Date',
            'client_id' => 'Client ID',
            'amount' => 'Amount',
        ];
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::class, ['id' => 'client_id']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::class, ['contract_id' => 'id']);
    }

}

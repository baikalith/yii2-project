<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $start_date
 * @property string|null $end_date
 * @property int $contract_id
 * @property int $department_id
 *
 * @property Contracts $contract
 * @property Departments $department
 */
class Projects extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['end_date'], 'default', 'value' => null],
            [['start_date', 'contract_id', 'department_id'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['contract_id', 'department_id'], 'integer'],
            [['contract_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contracts::class, 'targetAttribute' => ['contract_id' => 'id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::class, 'targetAttribute' => ['department_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'contract_id' => 'Contract ID',
            'department_id' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[Contract]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContract()
    {
        return $this->hasOne(Contracts::class, ['id' => 'contract_id']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::class, ['id' => 'department_id']);
    }

}

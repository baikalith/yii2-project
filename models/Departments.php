<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id
 * @property string $name
 * @property int $floor
 * @property string|null $phone
 * @property int|null $head_id
 *
 * @property Employees[] $employees
 * @property Employees $head
 * @property Projects[] $projects
 */
class Departments extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'head_id'], 'default', 'value' => null],
            [['name', 'floor'], 'required'],
            [['floor', 'head_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['name'], 'unique'],
            [['head_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::class, 'targetAttribute' => ['head_id' => 'id']],
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
            'floor' => 'Floor',
            'phone' => 'Phone',
            'head_id' => 'Head ID',
        ];
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employees::class, ['department_id' => 'id']);
    }

    /**
     * Gets query for [[Head]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHead()
    {
        return $this->hasOne(Employees::class, ['id' => 'head_id']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::class, ['department_id' => 'id']);
    }

}

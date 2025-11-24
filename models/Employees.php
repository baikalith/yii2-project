<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string $full_name
 * @property string $position
 * @property int $department_id
 * @property string|null $gender
 * @property string|null $address
 * @property string|null $birth_date
 *
 * @property Departments $department
 * @property Departments[] $departments
 */
class Employees extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const POSITION_KONSTRUKTOR = 'конструктор';
    const POSITION_INZENER = 'инженер';
    const POSITION_TEHNIK = 'техник';
    const POSITION_LABORANT = 'лаборант';
    const POSITION_OBSLUZIVAUSIJ_PERSONAL = 'обслуживающий персонал';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender', 'address', 'birth_date'], 'default', 'value' => null],
            [['full_name', 'position', 'department_id'], 'required'],
            [['position', 'address'], 'string'],
            [['department_id'], 'integer'],
            [['birth_date'], 'safe'],
            [['full_name'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 1],
            ['position', 'in', 'range' => array_keys(self::optsPosition())],
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
            'full_name' => 'Full Name',
            'position' => 'Position',
            'department_id' => 'Department ID',
            'gender' => 'Gender',
            'address' => 'Address',
            'birth_date' => 'Birth Date',
        ];
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

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::class, ['head_id' => 'id']);
    }


    /**
     * column position ENUM value labels
     * @return string[]
     */
    public static function optsPosition()
    {
        return [
            self::POSITION_KONSTRUKTOR => 'конструктор',
            self::POSITION_INZENER => 'инженер',
            self::POSITION_TEHNIK => 'техник',
            self::POSITION_LABORANT => 'лаборант',
            self::POSITION_OBSLUZIVAUSIJ_PERSONAL => 'обслуживающий персонал',
        ];
    }

    /**
     * @return string
     */
    public function displayPosition()
    {
        return self::optsPosition()[$this->position];
    }

    /**
     * @return bool
     */
    public function isPositionKonstruktor()
    {
        return $this->position === self::POSITION_KONSTRUKTOR;
    }

    public function setPositionToKonstruktor()
    {
        $this->position = self::POSITION_KONSTRUKTOR;
    }

    /**
     * @return bool
     */
    public function isPositionInzener()
    {
        return $this->position === self::POSITION_INZENER;
    }

    public function setPositionToInzener()
    {
        $this->position = self::POSITION_INZENER;
    }

    /**
     * @return bool
     */
    public function isPositionTehnik()
    {
        return $this->position === self::POSITION_TEHNIK;
    }

    public function setPositionToTehnik()
    {
        $this->position = self::POSITION_TEHNIK;
    }

    /**
     * @return bool
     */
    public function isPositionLaborant()
    {
        return $this->position === self::POSITION_LABORANT;
    }

    public function setPositionToLaborant()
    {
        $this->position = self::POSITION_LABORANT;
    }

    /**
     * @return bool
     */
    public function isPositionObsluzivausijPersonal()
    {
        return $this->position === self::POSITION_OBSLUZIVAUSIJ_PERSONAL;
    }

    public function setPositionToObsluzivausijPersonal()
    {
        $this->position = self::POSITION_OBSLUZIVAUSIJ_PERSONAL;
    }
}

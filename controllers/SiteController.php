<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Department;
use app\models\Employee;
use app\models\Client;
use app\models\Contract;
use app\models\Project;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function actionDepartments()
    {
        $departments = Department::find()->all();
        return $this->render('departments', ['departments' => $departments]);
    }

    public function actionEmployees()
    {
        $employees = Employee::find()->with('department')->all();
        return $this->render('employees', ['employees' => $employees]);
    }

    public function actionClients()
    {
        $clients = Client::find()->all();
        return $this->render('clients', ['clients' => $clients]);
    }

    public function actionContracts()
    {
        $contracts = Contract::find()->with('client')->all();
        return $this->render('contracts', ['contracts' => $contracts]);
    }

    public function actionProjects()
    {
        $projects = Project::find()
            ->with('contract.client', 'department')
            ->all();
        return $this->render('projects', ['projects' => $projects]);
    }
}
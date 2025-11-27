<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Department;
use app\models\Employee;
use app\models\Client;
use app\models\Contract;
use app\models\Project;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
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
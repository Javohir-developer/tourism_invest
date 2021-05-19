<?php

namespace console\controllers;
use Yii;
use yii\console\Controller;
use yii\helpers\Console;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        //---------- RULES ----------//

        // add the rule
        $rule = new \common\rbac\rules\AuthorRule;
        $auth->add($rule);

        //---------- PERMISSIONS ----------//

        $controler1 = $auth->createPermission('UserController');
        $controler1->description = 'Allows premium+ roles to use premium content';
        $auth->add($controler1);


        $member = $auth->createRole('User');
        $member->description = 'Registered users, members of this site';
        $auth->add($member);
        $auth->addChild($member, $controler1);

        $member2 = $auth->createRole('Drektor');
        $member2->description = 'Registered users, members of this site';
        $auth->add($member2);
        $auth->addChild($member2, $controler1);

        $member3 = $auth->createRole('Admin');
        $member3->description = 'Registered users, members of this site';
        $auth->add($member3);
        $auth->addChild($member3, $controler1);





        $theCreator = $auth->createRole('theCreator');
        $theCreator->description = 'You!';
        $auth->add($theCreator);

        $auth->addChild($theCreator, $member);
        $auth->addChild($theCreator, $member2);
        $auth->addChild($theCreator, $member3);



        if ($auth)
        {
            $this->stdout("\nRbac authorization data are installed successfully.\n", Console::FG_GREEN);
        }
    }

}

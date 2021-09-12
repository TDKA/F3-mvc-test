<?php

class UserController extends ParentController

{

    function render()
    {
        // $template =  new Template;
        // echo $template->render('login.htm');
        // Create new istance of template and render the template.htm
        echo \Template::instance()->render('login.htm');
    }

    function beforeroute()
    {
    }

    function auth()
    {
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');

        $user = new User($this->db);

        $user->getByName($username);


        if ($user->dry()) {
            echo 'User do not exists !';
            $this->f3->reroute('/login');
        }
        if ($password === $user->password) {
            $this->f3->set('SESSION.user', $user->username);
            echo 'Pass OK';
        } else {
            echo 'NOT OK';
        }
    }
}

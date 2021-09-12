<?php

class Controller extends ParentController

{

    // Global variables 
    protected $db;
    protected $f3;

    function render($f3)
    {
        ///// new msg object + adding new message in db ::: ////
        $msg = new Message($this->db);
        $msg->keyy = 'new key';
        $msg->message = "new msg";
        $msg->save();


        $messages = new Message($this->db);
        //show all() --->in this case the first 2nd result
        $message = $messages->getById(2)[0];


        $f3->set('msg', $message);

        $f3->set('name', 'Teo');
        // Create new istance of template and render the template.htm
        echo \Template::instance()->render('template.htm');
    }






    /// CONFIGURE DATABASE and protected variables $db, $f3
    function __construct()
    {
        $f3 = \Base::instance();
        $this->f3 = $f3;

        $db = new DB\SQL(
            $f3->get('db'),
            $f3->get('dbusername'),
            $f3->get('dbpassword'),
            array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
        );

        $this->db = $db;
    }
}

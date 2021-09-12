<?php

class User extends DB\SQL\Mapper
{



    public function __construct(DB\SQL $db)
    {
        parent::__construct($db, 'user');
    }

    public function getByName($username)
    {
        $this->load(array('username=?', $username));
    }

    public function all()
    {
        $this->load();
        return $this->query;
    }

    public function getById($id)
    {
        $this->load(array('id=?', $id));
        return $this->query;
    }

    public function add()
    {
        $this->copyForm('POST');
        $this->save();
    }
    public function edit($id)
    {
        $this->load(array('id=?', $id));
        $this->copyForm('POST');
        $this->update();
    }

    public function delete($id)
    {
        $this->load(array('id=?', $id));
        $this->erase();
    }
}

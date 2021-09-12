<?php

class Message extends DB\SQL\Mapper
{



    public function __construct(DB\SQL $db)
    {
        parent::__construct($db, 'messages');
    }

    // Find all ->return array
    public function all()
    {
        $this->load();
        return $this->query;
    }

    // find by ID
    public function getById($id)
    {
        $this->load(array('id=?', $id));
        return $this->query;
    }

    //ADD NEW
    public function add()
    {
        $this->copyForm('POST');
        $this->save();
    }

    //EDIT
    public function edit($id)
    {
        $this->load(array('id=?', $id));
        $this->copyForm('POST');
        $this->update();
    }

    //DELETE
    public function delete($id)
    {
        $this->load(array('id=?', $id));
        $this->erase();
    }
}

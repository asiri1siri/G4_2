<?php namespace App\Models;

use System\BaseModel;

class Item extends BaseModel
{
    public function getItems()
    {
        return $this->db->select("* from items");
    }

    public function getItemsWithParentID()
    {
        return $this->db->select("* from items where parent_id is not null");
    }

    public function execute($sql)
    {
        $this->db->raw($sql);
    }
}

?>
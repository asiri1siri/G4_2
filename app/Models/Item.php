<?php namespace App\Models;

use System\BaseModel;

class Item extends BaseModel
{
    public function getItems()
    {
        return $this->db->select("* from items");
    }
}

?>
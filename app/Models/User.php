<?php namespace App\Models;

use System\BaseModel;

class User extends BaseModel
{
    public function getUsers()
    {
        return $this->db->select("* from users");
    }
}

?>
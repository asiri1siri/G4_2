<?php namespace App\Controllers;

use System\BaseController;
use App\Helpers\Database;
use App\Helpers\Url;
use App\Config;

class Disable extends BaseController
{
    public function index($idToDisable)
    {
        $config = Config::get();

		$db = Database::get($config);

        $sql = "update users set enabled = 0 where id = " . $idToDisable;

        $db->raw($sql);

        Url::redirect("/mainpage");
    }
}

?>
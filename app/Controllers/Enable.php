<?php namespace App\Controllers;

use System\BaseController;
use App\Helpers\Database;
use App\Helpers\Url;
use App\Config;

class Enable extends BaseController
{
    public function index($idToEnable)
    {
        $config = Config::get();

		$db = Database::get($config);

        $sql = "update users set enabled = 1 where id = " . $idToEnable;

        $db->raw($sql);

        Url::redirect("/mainpage");
    }
}

?>
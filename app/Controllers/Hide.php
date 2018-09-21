<?php namespace App\Controllers;

use System\BaseController;
use App\Helpers\Database;
use App\Helpers\Url;
use App\Config;

class Hide extends BaseController
{
    public function index($idToRemove)
    {
        $config = Config::get();

		$db = Database::get($config);

        $sql = "update items set deleted=1 where id = " . $idToRemove;

        $db->raw($sql);

        Url::redirect("/mainpage");
    }
}

?>
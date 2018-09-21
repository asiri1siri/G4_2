<?php namespace App\Controllers;

use System\BaseController;
use App\Helpers\Database;
use App\Helpers\Url;
use App\Config;

class Unhide extends BaseController
{
    public function index($idToUnRemove)
    {
        $config = Config::get();

		$db = Database::get($config);

        $sql = "update items set deleted=0 where id = " . $idToUnRemove;

        $db->raw($sql);

        Url::redirect("/mainpage");
    }
}

?>
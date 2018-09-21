<?php namespace App\Controllers;

use System\BaseController;
use App\Models\Item;
use App\Helpers\Url;

class MoveItemsOut extends BaseController
{
    protected $items;

    public function __construct()
    {
        parent::__construct();
        $this->items = new Item();
    }

    public function index()
    {
        $records = $this->items->getItemsWithParentID();

        return $this->view->render('contacts/moveitemsout', compact('records'));
    }

    public function execute()
    {
        $dataArray = array();
        $whereArray = array();

        if (isset($_POST['submit']))
        {
            foreach ($_POST['check_list'] as $entry)
            {
                $sql = "update items set parent_id = null where id = " . $entry;
                $this->items->execute($sql);
            }
        }

        Url::redirect('/mainpage');
    }
}

?>
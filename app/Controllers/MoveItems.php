<?php namespace App\Controllers;

use System\BaseController;
use App\Models\Item;
use App\Helpers\Url;

class MoveItems extends BaseController
{
    protected $items;

    public function __construct()
    {
        parent::__construct();
        $this->items = new Item();
    }

    public function index()
    {
        $records = $this->items->getItems();

        return $this->view->render('contacts/moveitems', compact('records'));
    }

    public function execute()
    {
        $dataArray = array();
        $whereArray = array();

        if (isset($_POST['submit']))
        {
            foreach ($_POST['check_list'] as $entry)
            {
                $sql = "update items set parent_id = " . $_POST['select'] . " where id = " . $entry;
                // $conn->query($sql);
                // array_push($dataArray, $_POST['select']);
                // array_push($whereArray, $entry);
                $this->items->execute($sql);
            }
            // $this->items->move($dataArray, $whereArray);
        }

        Url::redirect('/mainpage');
    }
}

?>
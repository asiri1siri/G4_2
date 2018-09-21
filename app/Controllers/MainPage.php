<?php namespace App\Controllers;

use System\BaseController;
use App\Models\User;
use App\Models\Item;

class MainPage extends BaseController
{
    protected $users;
    protected $items;

    public function __construct()
    {
        parent::__construct();
        $this->users = new User();
        $this->items = new Item();
    }
    
    public function index()
    {
        $recordsUsers = $this->users->getUsers();
        $recordsItems = $this->items->getItems();

        // return $this->view->render('contacts/index', compact('records'));

        $filepath = "../app/views/contacts/mainpage.php";

        if (file_exists($filepath)) {
            require $filepath;
        } else {
            die("View: contacts/mainpage not found!");
        }
    }
}
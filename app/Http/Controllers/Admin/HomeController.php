<?php



namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Client;


class HomeController
{
    public function index()
{
    $employee = Employee::count();
    $client = Client::count();
    
    return view('home', compact('employee', 'client'));
}
}

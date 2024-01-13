<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support) { // ...index(Support $support) <==> $support = new Support();  Creat a instance of Class "Support".

        // Getting dates from database from our model "Support" that have conection with our migration "supports"
        $supports = $support->all();

        return view('admin/supports/index', compact('supports'));
    }
}

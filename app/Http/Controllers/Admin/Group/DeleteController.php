<?php

namespace App\Http\Controllers\Admin\Group;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Group $group)
    {

        return view("admin.group.delete", compact('group'));
    }
}

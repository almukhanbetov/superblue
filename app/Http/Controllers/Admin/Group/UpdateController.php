<?php

namespace App\Http\Controllers\Admin\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Group\StoreRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Group $group)
    {
        $data = $request->validated();
        $group->update($data);
        return redirect()->route('admin.$group.index')->with('success', "Категория обновлена");

    }
}

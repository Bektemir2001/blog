<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\Post\StoreRequest;
use Illuminate\Http\Request;

use Psy\ExecutionLoopClosure;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $date = $request->validated();
        $this->service->store($date);

        return redirect()->route('admin.posts.index');
    }
}

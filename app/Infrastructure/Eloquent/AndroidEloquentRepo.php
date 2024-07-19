<?php

namespace App\Infrastructure\Eloquent;

use App\Models\Android;
use App\Repositories\AndroidRepository;

class AndroidEloquentRepo implements AndroidRepository
{
    function GetAll(): array
    {
        return Android::all()->toArray();
    }

    public function store(Android $android)
    {
        return $android->save();
    }

    public function show(string $id): Android
    {
        return Android::find($id);
    }

    public function update(Android $android): Android
    {
        $current = Android::find($android->id);

        $current->save();
    }

    public function delete(string $id): Android
    {
        // TODO: Implement delete() method.
    }


}

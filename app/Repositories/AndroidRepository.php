<?php

namespace App\Repositories;

use App\Models\Android;

interface AndroidRepository
{
    /**
     * @return Android[]
     */
    public function GetAll(): array;

    public function store(Android $android);

    /**
     * @param string $id
     * @return Android
     */
    public function show(string $id): Android;

    /**
     * @param Android $android
     * @return Android Android Updated
     */
    public function update(Android $android): Android;

    public function delete(string $id): Android;

}

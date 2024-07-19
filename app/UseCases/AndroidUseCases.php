<?php

namespace App\UseCases;

use App\Models\Android;

interface AndroidUseCases
{
    /**
     * @return Android[]
     */
    public function all(): array;

    /**
     * @param Android $android
     */
    public function store(Android $android);

    /**
     * @param string $id
     * @return Android
     */
    public function show(string $id): Android;

    /**
     * @param string $id
     * @return Android
     */
    public function update(string $id): Android;

    /**
     * @param string $id
     */
    public function delete(string $id);
}

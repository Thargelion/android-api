<?php

namespace App\Services;

use App\Models\Android;
use App\Repositories\AndroidRepository;
use App\UseCases\AndroidUseCases;

class AndroidService implements AndroidUseCases
{
    private AndroidRepository $androidRepository;

    public function __construct(AndroidRepository $androidRepository)
    {
        $this->androidRepository = $androidRepository;
    }

    public function all(): array
    {
        return $this->androidRepository->GetAll();
    }

    public function store(Android $android)
    {
        return $this->androidRepository->store($android);
    }

    public function show(string $id): Android
    {
        // TODO: Implement show() method.
        return $this->androidRepository->show($id);
    }

    public function update(string $id): Android
    {
        return $this->androidRepository->update($id);
    }

    public function delete(string $id)
    {
        return $this->androidRepository->delete($id);
    }

}

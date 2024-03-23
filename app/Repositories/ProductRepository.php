<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }

    public function getById($id)
    {
        return Product::query()->findOrFail($id);
    }

    public function store(array $data)
    {
        return Product::query()->create($data);
    }

    public function update(array $data, $id)
    {
        return Product::query()->whereId($id)->update($data);
    }

    public function delete($id): int
    {
        return Product::destroy($id);
    }

}

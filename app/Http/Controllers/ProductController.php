<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Domain\Product\Models\Product;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Контроллер для управления товарами
 */
class ProductController extends Controller
{

    public $arr = [];

    public function init()
    {
        $this->arr = Product::query()->get();
    }

    /**
     * Список товаров.
     * @return array
     */
    public function list()
    {
        $this->init();
        return $this->arr;
    }

    /**
     * Информация о товаре
     * @param $id
     */
    public function info($id)
    {
        $product = Product::query()
            ->where(['id' => $id])
            ->first();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        return $product;
    }

    /**
     * Список из трех главных товаров
     * @return array
     */
    public function mainProducts()
    {
        $this->init();
        $local_arr = [];
        for ($i = 0; $i < 3; $i++) {
            array_push($local_arr, $this->arr[$i]);
        }
        return $local_arr;
    }

    /**
     * Список из товаров Coco Chanel
     * @return array
     */
    public function products1(): array
    {
       return $this->arr = Product::query()->where('title', 'like', '%Coco%')->get()->toArray();
    }

    /**
     * Список из товаров Gucci
     * @return array
     */
    public function products2(): array
    {
        return $this->arr = Product::query()->where('title', 'like', '%Gucci%')->get()->toArray();
    }

    /**
     * Список из товаров Hermes
     * @return array
     */
    public function products3(): array
    {
        return $this->arr = Product::query()->where('title', 'like', '%Hermes%')->get()->toArray();
    }
}

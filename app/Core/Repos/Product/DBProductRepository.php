<?php namespace Core\Repos\Product;

use Core\Repos\AbstractRepository;
use Product;

class DbProductRepository extends AbstractRepository implements ProductRepository {

    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Product $model
     */
    function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     *
     * @return type
     */
    public function category()
    {
        return $this->model->category();
    }

}
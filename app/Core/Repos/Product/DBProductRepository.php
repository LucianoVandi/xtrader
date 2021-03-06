<?php namespace Core\Repos\Product;

use Core\Repos\AbstractRepository;
use Illuminate\Database\Eloquent\Model;

class DbProductRepository extends AbstractRepository implements ProductRepository {

    /**
     * @var Product
     */
    protected $model;

    /**
     * @param Model $model
     */
    function __construct(Model $model)
    {
        $this->model = $model;
    }
    
    /**
     *
     * @param string $slug
     * @return  
     */
    public function getBySlug($slug)
    {
        return $this->model
                ->where('slug', '=', $slug)
                ->first();
        
    }

    /**
     * Get featured products
     * @return type 
     */
    public function getFeatured()
    {
        return $this->model
                ->where('featured', '=', 1)
                ->take(10)
                ->get();
    }


}
<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class BlogCategoryRepository
 * @package App\Repositories
 */
class BlogPostRepository extends CoreRepository
{
    /**
     * @return mixed|string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param $perPage
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate($perPage)
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id'
        ];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
//            ->with(['category', 'user'])
            ->with([
//                'category' => function($query)
//                {
//                    $query->select(['id', 'title']);
//                },
                'category:id,title',
                'user:id,name',
            ])

            ->paginate($perPage);

        return $result;
    }

    /**
     * Получить модель для редактированив админпанеле
     * @param $id
     * @return model
     */
    public function getEdit($id)
    {
        return$this->startConditions()->find($id);
    }
}

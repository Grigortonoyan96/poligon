<?php


namespace App\Repositories;
use App\Models\BlogPost as Model;

class BlogCategoryRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
        // TODO: Implement getModelClass() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function updateCategory($id, $request)
    {
        return $this->getEdit($id)->update(
            ['category_id' => $request->category_id,
                'title' => $request->title]);
    }

    /**
     * @param null $paginationLimit
     * @return mixed
     */
    public function getCategories($paginationLimit = null)
    {
        if ($paginationLimit) {
            return $this->startConditions()
               // ->with(['User','Category'])
                   ->with('category:title')
            ->paginate($paginationLimit);
        }

        return $this->startConditions()->all();
    }

    /**
     * @param $createData
     * @return mixed
     */
    public function createCategory($createData)
    {
        return $this->startConditions()->create($createData);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteCategory($id)
    {
        return $this->startConditions()->destroy($id);
    }


}

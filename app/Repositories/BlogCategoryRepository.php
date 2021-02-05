<?php


namespace App\Repositories;
use Illuminate\Database\Eloquent\Model as Model;

class BlogCategoryRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
        // TODO: Implement getModelClass() method.
    }


    public function getEdit($id){
        return $this->startConditions()->find($id);
    }
    public function getForComboBox(){
        return $this->startConditions()->all();
}

}

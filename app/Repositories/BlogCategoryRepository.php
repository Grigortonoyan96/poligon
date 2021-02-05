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
      //  return $this->startConditions()->all();

        $colums=implode(',',[
           'id', 'CONCAT (id.,'.'.,title) AS id_title'
        ]);

        $result[]=$this->startConditions()->all();
        $result[]=$this->startConditions()
            ->select('blog_categories.*',
            \DB::raw('CONCAT(id,".",title) As id_title'))
            ->toBase()
            ->get();
        $result[]=$this->startConditions()
            ->selectRaw($colums)
            ->toBase()
            ->get();

        dd($result);



}

}

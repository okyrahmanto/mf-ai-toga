<?php 

namespace App\Models;
use App\Models\GroceryCrudModel;

class DaytestModel extends GroceryCrudModel {

    public function extraWhereStatements($select)
    {
        $select->where("daytest.id_peserta= '5'");
        return $select;
    }

}

?>
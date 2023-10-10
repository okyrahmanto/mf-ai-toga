<?php 

namespace App\Models;
use CodeIgniter\Model;


class GambarModel extends Model {

    protected $table = 'gambar';
    protected $primaryKey = 'id';

    public function extraWhereStatements($select)
    {
        $select->where("daytest.id_peserta= '5'");
        return $select;
    }

    public function getToga($id) {
        $builder = $db->table('toga');
        $query = $builder->getWhere(['id' => $id], $limit, $offset);
        foreach ($query->getResult() as $row) {
            echo $row->title;
        }
        return $query->getResult();

    }

}

?>
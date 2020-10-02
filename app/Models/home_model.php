<?php namespace App\Models;

use CodeIgniter\Model;

class home_model extends Model{ 

        // protected $table      = 'banners';
        // protected $primaryKey = 'id';

        // protected $returnType     = 'array';
        // protected $useSoftDeletes = true;

        // protected $allowedFields = ['name', 'email'];

        // protected $useTimestamps = false;
        // protected $createdField  = 'created_at';
        // protected $updatedField  = 'updated_at';
        // protected $deletedField  = 'deleted_at';

        // protected $validationRules    = [];
        // protected $validationMessages = [];
        // protected $skipValidation     = false;
        public function get_banner(){
                $db = \Config\Database::connect();
                $builder = $db->table('banners');
                $query   = $builder->get(); 
                return $query->getResult();
        }
        public function get_myclients(){
                $db = \Config\Database::connect();
                $builder = $db->table('brand_icons');
                $query   = $builder->get(); 
                return $query->getResult();
        }
        public function get_mycomments(){
                $db = \Config\Database::connect();
                $builder = $db->table('my_comments');
                $query   = $builder->get(); 
                return $query->getResult();
        }
        
}

?>
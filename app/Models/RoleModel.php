<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = "auth_groups";

    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('auth_groups');
    }

    public function getRoleAll()
    {
        $query = $this->builder->get();
        return $this->db->get()->result_array();
    }
}

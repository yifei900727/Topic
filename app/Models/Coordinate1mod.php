<?php

namespace App\Models;

use CodeIgniter\Model;

class Coordinate1mod extends Model
{
    protected $table      = 'coordinate1';
    protected $primaryKey = 'C1_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['C1_name', 'C1_local', 'C1_number', 'C1_latitude','C1_longitude'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

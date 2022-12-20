<?php

namespace App\Models;

use CodeIgniter\Model;

class Coordinate2mod extends Model
{
    protected $table      = 'coordinate2';
    protected $primaryKey = 'C2_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['C2_name', 'C2_local', 'C2_number', 'C2_latitude','C2_longitude'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

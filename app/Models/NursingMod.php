<?php

namespace App\Models;

use CodeIgniter\Model;

class NursingMod extends Model
{
    protected $table      = 'NursingHome';
    protected $primaryKey = 'NH_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['NH_name', 'NH_number', 'NH_local','NH_img'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

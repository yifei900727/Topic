<?php

namespace App\Models;

use CodeIgniter\Model;

class HosMod extends Model
{
    protected $table      = 'hospital';
    protected $primaryKey = 'H_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['H_name', 'H_number', 'H_local','H_img'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

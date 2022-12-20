<?php

namespace App\Models;

use CodeIgniter\Model;

class FuneralMod extends Model
{
    protected $table      = 'FuneralSociety';
    protected $primaryKey = 'FS_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['FS_img', 'FS_local', 'FS_number'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

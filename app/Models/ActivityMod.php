<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityMod extends Model
{
    protected $table      = 'Activity';
    protected $primaryKey = 'A_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['A_name', 'A_img', 'A_date', 'A_local', 'A_organizer', 'A_introduction'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

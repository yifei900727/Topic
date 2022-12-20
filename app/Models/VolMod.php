<?php

namespace App\Models;

use CodeIgniter\Model;

class VolMod extends Model
{
    protected $table      = 'Volunteer';
    protected $primaryKey = 'V_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['V_img', 'V_local', 'V_organizer', 'V_Introduction'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class RegMod extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'u_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'account', 'password', 'telephone', 'E_MAIL'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}

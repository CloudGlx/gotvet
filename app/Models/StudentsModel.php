<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'students';
    protected $primaryKey       = 'GotvetId';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'FirstName', 'SecondName', 'LastName', 'Phone', 'Email', 'Citizenship', 'Gender', 'County', 'Town','Grd_Name','Grd_Phone','KcseYear', 'GotvetId',
        'Idnumber', 'KcseIndex', 'isvarified', 'isenrolled', 'isprofilecompleted', 'FormerSec', 'FormerPrimay', 'KcpeResults',
        'KcseResults', 'CollageSelected', 'StudentID', 'DateCreated', 'LastLogin', 'UpdateLevel','Token', 'Password'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

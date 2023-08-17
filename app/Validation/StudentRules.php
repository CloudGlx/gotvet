<?php
namespace App\Validation;

use App\Controllers\Student;
use App\Models\StudentsModel;


class StudentRules
{

    public function validateStudent(string $str, string $fields, array $data){

        $model= new StudentsModel();
        $student=$model-> where('GotvetId', $data['gotvetid'])
                        ->first();

        if(!$student)
        return false;

        return password_verify($data['password'], $student['Password']);
    }
}
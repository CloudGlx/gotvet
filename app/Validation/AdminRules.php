<?php
namespace App\Validation;
use App\Models\AdminModel;

class AdminRules
{

    public function validateAdmin(string $str, string $fields, array $data){

        $model= new AdminModel();
        $client=$model-> where('Email', $data['Email'])
                        ->first();

        if(!$client)
        return false;

        return password_verify($data['password'], $client['password']);
    }
}
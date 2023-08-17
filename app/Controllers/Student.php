<?php

namespace App\Controllers;

use App\Models\EducationModel;
use App\Models\StudentsModel;
use CodeIgniter\I18n\Time;

class Student extends BaseController

{

    public function __construct()
    {
        helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'filesystem']);
    }
    public function loginView()
    {
        return view('student/auth/login');
    }
    public function registerView()
    {
        return view('student/auth/register');
    }

    public function dashboard()
    {
        return view('student/dashboard');
    }



    public function personal_details_view($tid)
    {

        $details = new StudentsModel();
        $data['data'] = $details->find($tid);


        return view('student/personal_info', $data);
    }


    public function Update_Personal_Details()
    {
        $request = service('request');

        if ($request->getMethod() === 'post' && $request->getPost('submit') !== null) {
            //GET USER DATA

            $myTime = new Time('now', 'Africa/Nairobi', 'en_US');
            $updatelevel = 1;
            //$fname = $this->request->getPost('fname');
            //$sname = $this->request->getPost('sname');
            $lname = $this->request->getPost('lname');
            $town = $this->request->getPost('town');
            $gender = $this->request->getPost('gender');
            $idnumber = $this->request->getPost('id_number');
            //$email = $this->request->getPost('email');

            $citizen = $this->request->getPost('citizenship');
            $county = $this->request->getPost('county');
            $grdname = $this->request->getPost('grdname');
            $grdphone = $this->request->getPost('grdphone');
            $gotvetid = $this->request->getPost('gotvetid');

            $newdata = [
                'LastName'             => $lname,
                'Town'                 => $town,
                'Gender'               => $gender,
                'Idnumber'             => $idnumber,
                'Citizenship'          => $citizen,
                'County'               => $county,
                'UpdateLevel'          => $updatelevel,
                'Grd_Name'             => $grdname,
                'Grd_Phone'            => $grdphone,

            ];



            $details = new StudentsModel();

            $details->update($gotvetid, $newdata);
            return redirect()->to('stud_dashboard')->with(
                'success',
                'Your personal information has been successfully updated!. Kindly proceed to provide your education details.'
            );
        } else {
            //SUBMIT BUTTON NOT PRESSED
            return redirect()->to('stud_dashboard');
        }
    }

    public function Education_details_view($tid)
    {
        $details = new EducationModel();
        $data['data'] = $details->find($tid);
        return view('student/education_info', $data);
    }

    public function payments()
    {
        $level = 3;
    }

    public function Update_Education_Details()
    {
        $request = service('request');

        if ($request->getMethod() === 'post' && $request->getPost('submit') !== null) {
            $myTime = new Time('now', 'Africa/Nairobi', 'en_US');
            $updatelevel = 2;
            $fprimary = $this->request->getPost('formerpri');
            $fsec = $this->request->getPost('formersec');
            $kcsemean = $this->request->getPost('kcsegrade');
            $kcpemean = $this->request->getPost('kcpegrade');
            $index = $this->request->getPost('kcseindex');
            $year = $this->request->getPost('kcseyear');
            $gotvetid = $this->request->getPost('gotvet');

            //SUBJECTS
            $eng = $this->request->getPost('eng');
            $kis = $this->request->getPost('kis');
            $math = $this->request->getPost('math');
            $phyc = $this->request->getPost('phy');
            $chem = $this->request->getPost('chem');
            $bio = $this->request->getPost('bio');
            $histo = $this->request->getPost('his');
            $geo = $this->request->getPost('geo');
            $cre = $this->request->getPost('cre');
            $comp = $this->request->getPost('comp');
            $agri = $this->request->getPost('agri');
            $homescience = $this->request->getPost('hs');
            $bs = $this->request->getPost('bs');

            $updatedata = [
                'UpdateLevel' => $updatelevel,
            ];

            $newdata = [
                'KcseYear'      => $year,
                'KcseMeanGrade' => $kcsemean,
                'KcpeMeanGrade' => $kcpemean,
                'KcseIndex'     => $index,
                'FormerSec'     => $fsec,
                'FormerPrimay'  => $fprimary,
                'ENG'           => $eng,
                'KIS'           => $kis,
                'MATH'          => $math,
                'BIO'           => $bio,
                'PHY'           => $phyc,
                'CHEM'          => $chem,
                'HISTO'         => $histo,
                'GEO'           => $geo,
                'CRE'           => $cre,
                'HOMESCIENCE'   => $homescience,
                'AGRI'          => $agri,
                'COMP'          => $comp,
                'BUSINESS'      => $bs,
            ];


            $details = new EducationModel();
            $details->update($gotvetid, $newdata);

            $level = new StudentsModel();
            $level->update($gotvetid, $updatedata);

            return redirect()->to('stud_dashboard')->with(
                'success',
                'Your Education information has been successfully updated!. Kindly proceed with payments'
            );
        } else {
            return redirect()->to('stud_dashboard');
        }
    }

    public function ActivateAccount()
    {
        //ACTIVATE ACCOUNT

    }

    public function TestCode(){
        echo randomNum();
    }
}

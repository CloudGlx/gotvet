<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use APP\Models\ClientsModel;
use App\Models\CoursesModel;
use App\Models\StudentsModel;
use App\Models\EducationModel;

class Programmes extends BaseController
{
  public function __construct()
  {
    helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'filesystem']);
  }

  public function diplomaprog_view()
  {
    return view('student/programmes/programmes');
  }

  public function All_Programmes()
  {
    return view('student/programmes/allprogrammes');
  }

  public function ProgrammesView($tid)
  {
    $db = db_connect();
    $courseModel = new CoursesModel();

    if ($tid == 80) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 0)
        ->findAll();
    } elseif ($tid == 81) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 1)
        ->findAll();
    } elseif ($tid == 82) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 2)
        ->findAll();
    } //START
    elseif ($tid == 83) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 3)
        ->findAll();
    } elseif ($tid == 84) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 4)
        ->findAll();
    } elseif ($tid == 85) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 5)
        ->findAll();
    } elseif ($tid == 86) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 6)
        ->findAll();
    } elseif ($tid == 87) {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 7)
        ->findAll();
    } elseif ($tid == '88') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 8)
        ->findAll();
    } elseif ($tid == '89') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 9)
        ->findAll();
    } elseif ($tid == '810') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 10)
        ->findAll();
    }
    //START
    elseif ($tid == '811') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 11)
        ->findAll();
    } elseif ($tid == "812") {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 12)
        ->findAll();
    } elseif ($tid == '813') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 13)
        ->findAll();
    } elseif ($tid == '814') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 14)
        ->findAll();
    } elseif ($tid == '815') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 15)
        ->findAll();
    } elseif ($tid == '816') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 16)
        ->findAll();
    } elseif ($tid == '817') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 17)
        ->findAll();
    } elseif ($tid == '818') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 18)
        ->findAll();
    } elseif ($tid == '819') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 19)
        ->findAll();
    } elseif ($tid == '820') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 20)
        ->findAll();
    } elseif ($tid == '821') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 21)
        ->findAll();
    } elseif ($tid == '822') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 22)
        ->findAll();
    } elseif ($tid == '823') {

      $data['data'] = $courseModel
        ->where('Level', 0)
        ->where('Cluster', 23)
        ->findAll();
    }

    /*****************START CERTIFICATE************************ **/

    elseif ($tid == '10') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 0)
        ->findAll();
    } elseif ($tid == '11') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 1)
        ->findAll();
    } elseif ($tid == '12') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 2)
        ->findAll();
    } elseif ($tid == '13') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 3)
        ->findAll();
    } elseif ($tid == '14') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 4)
        ->findAll();
    } elseif ($tid == '15') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 5)
        ->findAll();
    } elseif ($tid == '16') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 6)
        ->findAll();
    } elseif ($tid == '17') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 7)
        ->findAll();
    } elseif ($tid == '18') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 8)
        ->findAll();
    } elseif ($tid == '19') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 9)
        ->findAll();
    } elseif ($tid == '110') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 10)
        ->findAll();
    } elseif ($tid == '111') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 11)
        ->findAll();
    } elseif ($tid == '112') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 12)
        ->findAll();
    } elseif ($tid == '10') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 0)
        ->findAll();
    } elseif ($tid == '113') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 13)
        ->findAll();
    } elseif ($tid == '114') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 14)
        ->findAll();
    } elseif ($tid == '115') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 15)
        ->findAll();
    } elseif ($tid == '116') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 16)
        ->findAll();
    } elseif ($tid == '117') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 17)
        ->findAll();
    } elseif ($tid == '118') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 18)
        ->findAll();
    } elseif ($tid == '119') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 19)
        ->findAll();
    } elseif ($tid == '120') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 20)
        ->findAll();
    } elseif ($tid == '121') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 21)
        ->findAll();
    } elseif ($tid == '122') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 22)
        ->findAll();
    } elseif ($tid == '123') {
      $data['data'] = $courseModel
        ->where('Level', 1)
        ->where('Cluster', 23)
        ->findAll();
    }


    /*****************START ARTISAN************************ **/

    elseif ($tid == '20') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 0)
        ->findAll();
    } elseif ($tid == '21') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 1)
        ->findAll();
    } elseif ($tid == '22') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 2)
        ->findAll();
    } elseif ($tid == '23') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 3)
        ->findAll();
    } elseif ($tid == '24') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 4)
        ->findAll();
    } elseif ($tid == '25') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 5)
        ->findAll();
    } elseif ($tid == '26') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 6)
        ->findAll();
    } elseif ($tid == '27') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 7)
        ->findAll();
    } elseif ($tid == '28') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 8)
        ->findAll();
    } elseif ($tid == '29') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 9)
        ->findAll();
    } elseif ($tid == '210') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 10)
        ->findAll();
    } elseif ($tid == '211') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 11)
        ->findAll();
    } elseif ($tid == '20') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 0)
        ->findAll();
    } elseif ($tid == '212') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 12)
        ->findAll();
    } elseif ($tid == '213') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 13)
        ->findAll();
    } elseif ($tid == '214') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 14)
        ->findAll();
    } elseif ($tid == '215') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 15)
        ->findAll();
    } elseif ($tid == '216') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 16)
        ->findAll();
    } elseif ($tid == '217') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 17)
        ->findAll();
    } elseif ($tid == '218') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 18)
        ->findAll();
    } elseif ($tid == '219') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 19)
        ->findAll();
    } elseif ($tid == '220') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 20)
        ->findAll();
    } elseif ($tid == '221') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 21)
        ->findAll();
    } elseif ($tid == '222') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 22)
        ->findAll();
    } elseif ($tid == '223') {
      $data['data'] = $courseModel
        ->where('Level', 2)
        ->where('Cluster', 23)
        ->findAll();
    } 


    return view('student/programmes/programmes', $data);
  }
}

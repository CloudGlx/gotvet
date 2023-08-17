<?php

namespace App\Controllers;

use App\Models\ClientsModel;
use App\Models\FilesModel;
use App\Models\InsitutesModel;
use App\Models\OrdersModel;
use App\Models\StudentsModel;
use PhpParser\Node\Expr\FuncCall;

class Admin extends BaseController
{
    public function __construct()
    {
        helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'filesystem']);
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }
    //VIEW ALL ORDERS
    public function all_insitutes()
    {
        return view('admin/insitutes/inst');
    }

    public function uni_insitutes()
    {
        return view('admin/insitutes/uni');
    }

    public function poly_insitutes()
    {
        return view('admin/insitutes/poly');
    }

    public function tt_insitutes()
    {
        return view('admin/insitutes/tt');
    }

 
//view
    public function inst_singleView($tid){
        $req = new InsitutesModel();
        $data['data'] = $req->find($tid);
        return view('admin/insitute/inst_singleview', $data);
    }
//edit
    public function uni_singleEdit(){
        
    }
    //VIEW SINGLE ORDERS
    //sigle studen
    public function OneStudentView($tid)
    {
        $req = new StudentsModel();
        $data['data'] = $req->find($tid);
        return view('admin/accounts/view_student', $data);
    }
    public function enrolled_students(){
        $students = new StudentsModel();
        $data['data'] = $students->where('isenrolled',1)->findAll();
        return view('admin/accounts/enrolled', $data);
    }

    public function approved_students(){

    }

    public function all_courses(){

    }

    public function admin_single_order($tid)
    {
        $sdata = [
            'orderid' => $tid,
        ];
        $session = session();
        $session->set($sdata);

        $request = new OrdersModel();
        $data['data'] = $request->find($tid);
        return view('admin/orders/vieworder', $data);
    }

   

    //UPDATE STUDENT STSUS
    public function student_status()
    {
        // return view('admin/orders/pending');
    }
    //send single sms
    public function SendSingle_sms()
    {
        $check=$this->request->getPost('submit');
        if(!isset($check)){
         echo "this";
           // return redirect()->to('order_new')->with('error', 'Wrong path!!');
            exit(0);
        }

        //GET USER DATA
        $phone = $this->request->getPost('phone');
        $senderid = $this->request->getPost('senderid');
        $smsbody = $this->request->getPost('smsbody');
        $stdid = $this->request->getPost('studentid');

    $data= sendsms($phone,$smsbody);
         //  $data = sendsms($phone, $MsgBody);
    $res = json_decode($data, true);

   $ReCode = $res['responses'][0]['response-code'];
   $ReDec = $res['responses'][0]['response-description'];
       if ($ReCode==200){
       return redirect()->to('view_student/'.$stdid)->with('success', 'Sms sent successfully');
       }
       else{
        return redirect()->to('view_student/'.$stdid)->with('error', 'Sms Not sent!! '.$ReDec.'');
       }
 

        //return redirect()->to('view_student/'.$stdid)->with('error', 'Wrong path!!');
    }


    //PENDING ORDERS
    public function pending_orders()
    {
        return view('admin/orders/pending');
    }
    //IN PROGRESS
    public function Inprogres_Orders()
    {
        return view('admin/orders/inprogress');
    }
    //VIEW ALL STUDENTS
    public function all_students()
    {
        $clients = new StudentsModel();
        $data['data'] = $clients->findAll();
        return view('admin/accounts/all_students', $data);
    }
    //SINGLE CLIENT
    public function admin_single_client($tid)
    {
        $clients = new ClientsModel();
        $data['data'] = $clients->find($tid);
        return view('admin/accounts/sigle_client', $data);
    }
    //COMPLETED ORDERS
    public function Completed_Orders()
    {
        return view('admin/orders/completed');
    }

    public function Inrevision_Orders()
    {
        return view('admin/orders/inrevision');
    }
    //REJECTED 
    public function Rejected_Orders()
    {
        return view('admin/orders/rejected');
    }

    public function Cancelled_Orders()
    {
        return view('admin/orders/cancelled');
    }





















    //FILE DOWNLOAD
    public function file_download($tid)
    {
        $del = new FilesModel();
        //get filename
        $db = db_connect();
        $query = $db->query('SELECT * FROM files WHERE FileId=' . $tid . '');
        $row = $query->getRow();
        $filename = $row->FileNewName;
        $orderid = session()->get('orderid');

        $path = './public/uploads/' . $filename;

        try {
            return $this->response->download($path, null);
        } catch (\Exception $e) {
            //  echo  die($e->getMessage());
            return redirect()->to('vieworder/' . $orderid)->with('error', 'Something Went Wrong, Try again later!!');
        }
    }

    public function update_status()
    {
        $orderid = session()->get('orderid');
        $update = new OrdersModel();
        //echo $orderid;
        $status = $this->request->getPost('status');
        $newdata = [
            'OrderStatus' => $status,
        ];
        $update->update($orderid, $newdata);
        return redirect()->to('vieworder/' . $orderid)->with('success', 'Status Update');
    }
    //UPDATE PAYMENTS STATUS
    public function payments_status()
    {
        $orderid = session()->get('orderid');
        $update = new OrdersModel();
        //echo $orderid;
        $status = '1';
        $newdata = [
            'PaymentStatus' => $status,
        ];
        $update->update($orderid, $newdata);
        return redirect()->to('vieworder/' . $orderid)->with('success', 'Payments Status Update');
    }
}

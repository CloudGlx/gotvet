<?php

namespace App\Controllers;

use function PHPSTORM_META\type;

use App\Models\FilesModel;
use CodeIgniter\I18n\Time;
use App\Models\OrdersModel;
use PhpParser\Node\Expr\FuncCall;

class Orders extends BaseController
{
    public function __construct()
    {
        helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'filesystem']);
    }
    /********************USER ORDERS**************************/
    public function user_allorders()
    {
        //$request = new OrdersModel();
        //$email = session()->get('email');
        //$data['data'] = $request->where('email', $email)->findAll();
        // $data['data']=$request->findAll();
        return view('client/orders/all');
    }
    public function user_inprogress()
    {

        return view('client/orders/in-progress');
    }

    public function user_completed()
    {
        return view('client/orders/completed');
    }

    public function user_inreview()
    {

        return view('client/orders/in-review');
    }

    public function user_rejected()
    {

        return view('client/orders/rejected');
    }

    public function user_inrevision()
    {
        return view('client/orders/revision');
    }

    //PENDING  ORDERS
    public function Pending_Orders()
    {
        
        return view('client/orders/pending');
    }

    public function new_order()
    {
        return view('client/orders/neworder');
    }

    //VIEW SINGLE ODER
    public function OrderView($tid)
    {
        $sdata=[
            'orderid'=>$tid,
        ];
        $session = session();
        $session->set($sdata);

        $request = new OrdersModel();
        $data['data'] = $request->find($tid);
        return view('client/orders/view_order', $data);
    }
    //CANCLE ORDER
    public function Order_Cancle($tid)
    {
        $req = new OrdersModel();
        $st = '5';
        //5  for cancelled orders
        $newdata = [
            'OrderStatus' => $st,
        ];
        $query = $req->update($tid, $newdata);
        return redirect()->to('orders_all')->with('success', 'Order Cancelled And Deleted!!');
    }
    public function FilesUploadView($tid)
    {
        $sdata=[
            'orderid'=>$tid,
        ];
        $session = session();
        $session->set($sdata);
        return view('client/orders/files_upload');
    }

    public function files_upload()
    {
      
        $database = db_connect();
        // $database = \Config\Database::connect();
        $db = $database->table('files');

        $msg = 'Please select a valid files';
        $myTime = new Time('now', 'Africa/Nairobi', 'en_US');
        $id = session()->get('regnum');
        $orderid=session()->get('orderid');
        

        if ($this->request->getFileMultiple('mydoc')) {
            

            foreach ($this->request->getFileMultiple('mydoc') as $file) {
              

                if($file->isValid()&& !$file->hasMoved()){
                $fileid = randomNum();
                $filename = $file->getClientName();
                $filetype = $file->getClientMimeType();
                $newname = str_replace(' ', '_', $filename);
                $newfilename = filecode() . '_' . $newname;
                // $file->move(WRITEPATH . 'files');
                
                $file->move('./public/uploads',$newfilename);

                $data = [
                    'FileName'     =>  $filename,
                    'FileType'     =>  $filetype,
                    'FileId'       =>  $fileid,
                    'ClientId'     =>  $id,
                    'FileNewName'  =>  $newfilename,
                    'UploadedDate' =>  $myTime,
                    'OrderId'      =>  $orderid,
                ];

                $save = $db->insert($data);
                $msg = 'Files have been successfully uploaded';
            }
        }
        }
        
        return redirect()->to(base_url('orderview/'.$orderid))->with('success', $msg);
    }

    //FILES DOWNLOAD
    public function files_download(){

    }

    //FILES DELETE
    public function files_delete($tid){
        $del=new FilesModel();
        //get filename
        $db = db_connect();
        $query = $db->query('SELECT * FROM files WHERE FileId='.$tid.'');
        $row = $query->getRow();
        $filename= $row->FileNewName;
        $path='./public/uploads/'.$filename;
       
        $orderid=session()->get('orderid');
        try{
        unlink($path);
        $query = $db->query('DELETE FROM files WHERE FileId='.$tid.'');
        return redirect()->to('orderview/'.$orderid)->with('success', 'File Deleted Successfully');
        }catch (\Exception $e){
          //echo  die($e->getMessage());
          return redirect()->to('orderview/'.$orderid)->with('error', 'Something went wrong, Try again later!!');
        }   
    }

    //NEW ORDER SUBMIT FUNCTION
    public function order_submit()
    {
        //GET USER DATA
        $level = $this->request->getPost('ops_aclevel');
        $type = $this->request->getPost('order_tpaper');
        $subject = $this->request->getPost('order_subject');
        $title = $this->request->getPost('order_title');

        $description = $this->request->getPost('order_instructions');
        $format = $this->request->getPost('order_citation');
        $pages = $this->request->getPost('order_pages');
        $words = $this->request->getPost('words');
        $currency = $this->request->getPost('order_currency');
        $sources = $this->request->getPost('order_sources');
        $spacing = $this->request->getPost('order_spacing');
        $ppslides = $this->request->getPost('order_pptslides');
        $lan = $this->request->getPost('lan');
        $time = $this->request->getPost('order_deadline');
        $writerq = $this->request->getPost('order_wquality');
        $cpn = $this->request->getPost('cpn_value');
        $amount = $this->request->getPost('order_amount');
        $email = $this->request->getPost('client_email');
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $cid = $this->request->getPost('regnum');
        //CUT STRING
        //$type =substr($type, 20, strpos($type, "#"));
        $subject = strval($subject);
        $type = strval($type);
        $time = strval($time);
        $currency = strval($currency);
        $writerq = strval($writerq);
        $spacing = strval($spacing);
        $level = strval($level);

        $subject = substr($subject, strrpos($subject, '#') + 1);
        $type = substr($type, strrpos($type, '#') + 1);
        $time = substr($time, strrpos($time, '#') + 1);
        $currency = substr($currency, strrpos($currency, '#') + 1);
        $writerq = substr($writerq, strrpos($writerq, '#') + 1);
        $spacing = substr($spacing, strrpos($spacing, '#') + 1);
        $level = substr($level, strrpos($level, '#') + 1);


        //function for random number generate
        $fnum = date('N');


        $orderid = intval($fnum . randomNum());
        $ordertatus = '0';
        $paystatus = '0';
        $myTime = new Time('now', 'Africa/Nairobi', 'en_US');


        //WORK ON DEADLINETIME

        if ($time == '6 Hours') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 6 * 3600);
        } elseif ($time == '24 Hours') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 24 * 3600);
        } elseif ($time == '48 Hours') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 48 * 3600);
        } elseif ($time == '3 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 72 * 3600);
        } elseif ($time == '4 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 96 * 3600);
        } elseif ($time == '5 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 120 * 3600);
        } elseif ($time == '6 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 144 * 3600);
        } elseif ($time == '7 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 168 * 3600);
        } elseif ($time == '8 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 192 * 3600);
        } elseif ($time == '14 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 336 * 3600);
        } elseif ($time == '24 Days') {
            $deadline = date("Y-M-d H:i:s", strtotime($myTime) + 576 * 3600);
        } else {
            $deadline = '0';
        }

        $newdata = [
            'OrderId'           => $orderid,
            'Email'             => $email,
            'FirstName'         => $fname,
            'ClientId'           => $cid,
            'LastName'          => $lname,
            'AcademicLevel'     => $level,
            'PaperType'         => $type,
            'Subject'           => $subject,
            'Description'       => $description,
            'Title'             => $title,
            'PaperFormat'       => $format,
            'Pages'             => $pages,
            'Words'             => $words,
            'Spacing'           => $spacing,
            'Sources'           => $sources,
            'Slides'            => $ppslides,
            'TimePeriod'        => $time,
            'Deadline'          => $deadline,
            'Language'          => $lan,
            'ApproximatePrice'  => $amount,
            'Currency'          => $currency,
            'WriterCategory'    => $writerq,
            'PaymentStatus'     => $paystatus,
            'OrderStatus'       => $ordertatus,
            'Date'              => $myTime,

        ];

        //SMS BODY
        function MsgBody($time, $deadline)
        {
            $MsgBody = "Hi Admin, You have a new Order. Check your dashborad for details" . "\n" .
                "Time:" . $time . "" . "\n" .
                "Deadline:" . $deadline . "";

            return $MsgBody;
        }
        $AdmPhone = ADMINPHONE;
        $SmsBody = MsgBody($time, $deadline);

        $OrderModel = new OrdersModel();
        $query = $OrderModel->insert($newdata);
        //$res=sendsms($AdmPhone, $SmsBody);
        MailOrderPlace($fname,$email);
        return redirect()->to('client')->with('success', 'Order Placed successfully');
    }
    /********************ADMIN ORDERS**************************/
}

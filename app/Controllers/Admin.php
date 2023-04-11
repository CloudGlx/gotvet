<?php

namespace App\Controllers;

use App\Models\ClientsModel;
use App\Models\FilesModel;
use App\Models\OrdersModel;
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
    public function admin_allorders()
    {
        return view('admin/orders/all_orders');
    }
    //VIEW SINGLE ORDERS
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
    //VIEW ALL CLINETS
    public function all_clients()
    {
        $clients = new ClientsModel();
        $data['data'] = $clients->findAll();
        return view('admin/accounts/all_clients', $data);
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

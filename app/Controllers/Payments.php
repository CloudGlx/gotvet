<?php

namespace App\Controllers;

class Payments extends BaseController
{
    public function __construct()
  {
    helper(['Code_helper', 'Email_helper', 'Sms_helper', 'text', 'url', 'Webhook_helper','file']);
  }

  public function Confirmation_Url(){
    try {
        $json = $this->request->getJSON(); // Get the JSON data sent to the endpoint

        // Replace empty values with null
        $json = $this->replaceEmptyWithNull($json);

        // Access the JSON data fields
        $transactionType = $json->TransactionType ?? null;
        $transID = $json->TransID ?? null;
        $transTime = $json->TransTime ?? null;
        $transAmount = $json->TransAmount ?? null;
        $businessShortCode = $json->BusinessShortCode ?? null;
        $billRefNumber = $json->BillRefNumber ?? null;
        $invoiceNumber = $json->InvoiceNumber ?? null;
        $orgAccountBalance = $json->OrgAccountBalance ?? null;
        $thirdPartyTransID = $json->ThirdPartyTransID ?? null;
        $msisdn = $json->MSISDN ?? null;
        $firstName = $json->FirstName ?? null;
        $middleName = $json->MiddleName ?? null;
        $lastName = $json->LastName ?? null;

        // Create a string with the formatted data
        $formattedData = "TransactionType: $transactionType\nTransID: $transID\nTransTime: $transTime\nTransAmount: $transAmount\nBusinessShortCode: $businessShortCode\nBillRefNumber: $billRefNumber\nInvoiceNumber: $invoiceNumber\nOrgAccountBalance: $orgAccountBalance\nThirdPartyTransID: $thirdPartyTransID\nMSISDN: $msisdn\nFirstName: $firstName\nMiddleName: $middleName\nLastName: $lastName\n\n";

        // Save the data to a file named data.txt
        $filePath = WRITEPATH . 'DataData.txt';
      
        file_put_contents($filePath, $formattedData, FILE_APPEND);

        // Return a response
        $response = [
            'status' => 'success',
            'message' => 'Data received and saved successfully',
        ];

        return $this->response->setJSON($response);
    } catch (\Exception $e) {
        // Return an error response
        $errorResponse = [
            'status' => 'error',
            'message' => $e->getMessage(),
        ];

        return $this->response->setJSON($errorResponse);
    }
}

private function replaceEmptyWithNull($data)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data->$key = $this->replaceEmptyWithNull($value);
        } elseif (empty($value)) {
            $data->$key = null;
        }
    }
    return $data;
  }

  public function Validation_Url(){
    
  }
}

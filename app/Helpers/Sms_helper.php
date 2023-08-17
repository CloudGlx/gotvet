<?php
        //SEND SMS FUNCTION
        function sendsms($phone,$body){
   
            $data= [
        
                "apikey"        => "119323ba4448f39ef6955e9c144ef496",
                "partnerID"    => "7797",  //6356
                "message"      => $body,
                "shortcode"    => "TextSMS",
                "mobile"       => $phone
               ];
            //endpoint
        $url='https://sms.textsms.co.ke/api/services/sendsms/';
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        
        return $response;
        }
        
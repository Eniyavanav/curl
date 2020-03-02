<?php 
function burst_send_sms($sms_to, $sms_msg) {
        // $ch = curl_init();
        $from_burst = $this->from_burst;
        $data = array('message' => $sms_msg, 'to' => $sms_to, "from" => $from_burst);
        $url = "https://api.transmitsms.com/send-sms.json";
        $handle = curl_init($url);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($handle, CURLOPT_USERPWD, $this->burst_pass);
        $check_return = curl_exec($handle);
        curl_close($handle);
        return $check_return;
    }
    ?>
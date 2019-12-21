 array_push($mms_imgs, getenv('BASE_URL') . '/' . $target_file);
            }
        }
    }


    $sid = getenv('TWILIO_ACCOUNT_SID'); // 'AC6f56a38a86229792e352701dfa5a8285'; 
    $token = getenv('TWILIO_AUTH_TOKEN');   // '8e081ce2889661f4ec94a44ec0cf608f'; 

    $twilio = new Client($sid, $token);
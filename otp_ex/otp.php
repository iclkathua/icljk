
echo !empty($statusMsg)?'.$statusMsg['status'].'">'.$statusMsg['msg'].'
':''; ?>


<form method="post">
    <label>Enter Mobile Nolabel>
    <input type="text" name="mobile_no" value="echo !empty($recipient_no)?$recipient_no:''; ?>" echo ($otpDisplay == 1)?'readonly':''; ?>/>
    
    if($otpDisplay == 1){ ?>
    <label>Enter OTPlabel>
    <input type="text" name="otp_code"/>
    <a href="javascript:void(0);" class="resend">Resend OTPa>
    } ?>
    <input type="submit" name="echo ($otpDisplay == 1)?'submit_otp':'submit_mobile'; ?>" value="VERIFY"/>
form>
function sendSMS($senderID, $recipient_no, $message){
    // Request parameters array
    $requestParams = array(
        'user' => 'abcd',
        'apiKey' => 'dssf645fddfgh565',
        'senderID' => $senderID,
        'recipient_no' => $recipient_no,
        'message' => $message
    );
    
    // Merge API url and parameters
    $apiUrl = "http://api.example.com/http/sendsms?";
    foreach($requestParams as $key => $val){
        $apiUrl .= $key.'='.urlencode($val).'&';
    }
    $apiUrl = rtrim($apiUrl, "&");
    
    // API call
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Return curl response
    return $response;
}

// Load and initialize database class
require_once 'DB.class.php';
$db = new DB();
        
$statusMsg = $receipient_no = '';
$otpDisplay = $verified = 0;

// If mobile number submitted by the user
if(isset($_POST['submit_mobile'])){
    if(!empty($_POST['mobile_no'])){
        // Recipient mobile number
        $recipient_no = $_POST['mobile_no'];
        
        // Generate random verification code
        $rand_no = rand(10000, 99999);
        
        // Check previous entry
        $conditions = array(
            'mobile_number' => $recipient_no,
        );
        $checkPrev = $db->checkRow($conditions);
        
        // Insert or update otp in the database
        if($checkPrev){
            $otpData = array(
                'verification_code' => $rand_no
            );
            $insert = $db->update($otpData, $conditions);
        }else{
            $otpData = array(
                'mobile_number' => $recipient_no,
                'verification_code' => $rand_no,
                'verified' => 0
            );
            $insert = $db->insert($otpData);
        }
        
        if($insert){
            // Send otp to user via SMS
            $message = 'Dear User, OTP for mobile number verification is '.$rand_no.'. Thanks SemicolonWorld';
            $send = sendSMS('SEMICOLONWORLD', $recipient_no, $message);
            
            if($send){
                $otpDisplay = 1;
            }else{
                $statusMsg = array(
                    'status' => 'error',
                    'msg' => "We're facing some issue on sending SMS, please try again."
                );
            }
        }else{
            $statusMsg = array(
                'status' => 'error',
                'msg' => 'Some problem occurred, please try again.'
            );
        }
    }else{
        $statusMsg = array(
            'status' => 'error',
            'msg' => 'Please enter your mobile number.'
        );
    }
    
// If verification code submitted by the user
}elseif(isset($_POST['submit_otp']) && !empty($_POST['otp_code'])){
    $otpDisplay = 1;
    $recipient_no = $_POST['mobile_no'];
    if(!empty($_POST['otp_code'])){
        $otp_code = $_POST['otp_code'];
        
        // Verify otp code
        $conditions = array(
            'mobile_number' => $recipient_no,
            'verification_code' => $otp_code
        );
        $check = $db->checkRow($conditions);
        
        if($check){
            $otpData = array(
                'verified' => 1
            );
            $update = $db->update($otpData, $conditions);
            
            $statusMsg = array(
                'status' => 'success',
                'msg' => 'Thank you! Your phone number has been verified.'
            );
            
            $verified = 1;
        }else{
            $statusMsg = array(
                'status' => 'error',
                'msg' => 'Verification code incorrect, please try again.'
            );
        }
    }else{
        $statusMsg = array(
            'status' => 'error',
            'msg' => 'Please enter the verification code.'
        );
    }
}
?>

echo !empty($statusMsg)?'.$statusMsg['status'].'">'.$statusMsg['msg'].'
':''; ?>

if($verified == 1){ ?>
    <p>Mobile No: echo $recipient_no; ?>p>
    <p>Verification Status: <b>Verifiedb>p>
} ?>

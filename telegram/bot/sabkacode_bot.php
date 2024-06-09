 <?php
    // $input = file_get_contents('php://input');
    // // $data = json_decode($input);
    // $data = $input;
    // echo var_dump($data);
    // $chat_id = $data->message->chat->id;
    // $text = $data->message->text;
    // $text = $text."SabkaCode";
    // $token = '6613717089:AAFgEjN5muSTHuEGgvbwkASnm1a1PLVsspw';
    // $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?text='.$text.'&chat_id='.$chat_id;
    // // file_get_contents($url);
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $result = curl_exec($ch);
    // curl_close($ch);


$token = '<api token>';

// Get the incoming update
$input = file_get_contents('php://input');
$data = json_decode($input, true);
echo $data;
echo var_dump($data);
print_r($data);
if ($data) {
    $chat_id = $data['message']['chat']['id'];
    $text = $data['message']['text'];

    // Your custom logic
    $response_text = "You said: " . $text . " SabkaCode";

    // Send response
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $post_fields = [
        'chat_id' => $chat_id,
        'text' => $response_text
    ];

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

    $output = curl_exec($ch);
    curl_close($ch);
}
?>

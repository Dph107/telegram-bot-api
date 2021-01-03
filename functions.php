<?php

/*
•| This code writed by : @Dph107
°| Channel : https://t.me/Tele_grambot_PHP 
•[ برای نشر این کد منبع را ذکر کنید ]•
*/

//---------------------------ارسال درخواست با کرل-----------------------------

function send_reply($method, $post)
{
    
    $url = "https://api.telegram.org/bot" . TOKEN . $method;
    $cu   = curl_init();
    curl_setopt($cu, CURLOPT_URL, $url);
    curl_setopt($cu, CURLOPT_POSTFIELDS, $post);
    curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);  // get result
    $result = curl_exec($cu);
    curl_close($cu);
    return json_decode($result, true);
    
}


//-------------------------------ارسال پیام------------------------------------

function sendMessage(array $sendMessage) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendMessage", [
        'chat_id'                      => $sendMessage['chat_id']                     ?? null, //Yes
        'text'                         => $sendMessage['text']                        ?? null, //Yes
        'parse_mode'                   => $sendMessage['parse_mode']                  ?? null, //Optional
        'entities'                     => $sendMessage['entities']                    ?? null, //Optional
        'disable_web_page_preview'     => $sendMessage['disable_web_page_preview']    ?? null, //Optional
        'disable_notification'         => $sendMessage['disable_notification']        ?? null, //Optional
        'reply_to_message_id'          => $sendMessage['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply'  => $sendMessage['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                 => $sendMessage['reply_markup']                ?? null, //Optional
    ]));

    unset($sendMessage);
    
}

//-------------------------------ارسال تصویر-----------------------------------

function sendPhoto(array $sendPhoto) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendPhoto", [ 
        'chat_id'                      => $sendPhoto['chat_id']                     ?? null, //Yes
        'photo'                        => $sendPhoto['photo']                       ?? null, //Yes
        'caption'                      => $sendPhoto['caption']                     ?? null, //Optional
        'parse_mode'                   => $sendPhoto['parse_mode']                  ?? null, //Optional
        'caption_entities'             => $sendPhoto['caption_entities']            ?? null, //Optional
        'disable_notification'         => $sendPhoto['disable_notification']        ?? null, //Optional
        'reply_to_message_id'          => $sendPhoto['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply'  => $sendPhoto['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                 => $sendPhoto['reply_markup']                ?? null, //Optional
    ]));   
    
    unset($sendPhoto);
}

//-------------------------------ارسال مستندات-----------------------------------

function sendDocument(array $sendDocument) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendDocument", [
        'chat_id'                         => $sendDocument['chat_id']                        ?? null, //Yes
        'document'                        => $sendDocument['document']                       ?? null, //Yes
        'thumb'                           => $sendDocument['thumb']                          ?? null, //Optional
        'caption'                         => $sendDocument['caption']                        ?? null, //Optional
        'parse_mode'                      => $sendDocument['parse_mode']                     ?? null, //Optional
        'caption_entities'                => $sendDocument['caption_entities']               ?? null, //Optional
        'disable_content_type_detection'  => $sendDocument['disable_content_type_detection'] ?? null, //Optional
        'disable_notification'            => $sendDocument['disable_notification']           ?? null, //Optional
        'reply_to_message_id'             => $sendDocument['reply_to_message_id']            ?? null, //Optional
        'allow_sending_without_reply'     => $sendDocument['allow_sending_without_reply']    ?? null, //Optional
        'reply_markup'                    => $sendDocument['reply_markup']                   ?? null, //Optional
    ]));  
    
    unset($sendAudio);
}

//------------------------------ارسال موسیقی-----------------------------------

function sendAudio(array $sendAudio) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendAudio", [
        'chat_id'              => $sendAudio['chat_id']              ?? null, //Yes
        'audio'                => $sendAudio['audio']                ?? null, //Yes
        'caption'              => $sendAudio['caption']              ?? null, //Optional
        'parse_mode'           => $sendAudio['parse_mode']           ?? null, //Optional
        'caption_entities'     => $sendAudio['caption_entities']     ?? null, //Optional
        'duration'             => $sendAudio['duration']             ?? null, //Optional
        'performer'            => $sendAudio['performer']            ?? null, //Optional
        'title'                => $sendAudio['title']                ?? null, //Optional
        'thumb'                => $sendAudio['thumb']                ?? null, //Optional
        'disable_notification' => $sendAudio['disable_notification'] ?? null, //Optional
        'reply_to_message_id'  => $sendAudio['reply_to_message_id']  ?? null, //Optional
        'reply_markup'         => $sendAudio['reply_markup']         ?? null, //Optional
    ])); 
    
    unset($sendAudio);
}

//-------------------------------ارسال ویدیو-----------------------------------

function sendVideo(array $sendVideo) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendVideo", [
        'chat_id'                     => $sendVideo['chat_id']                     ?? null, //Yes
        'video'                       => $sendVideo['video']                       ?? null, //Yes
        'duration'                    => $sendVideo['duration']                    ?? null, //Optional
        'width'                       => $sendVideo['width']                       ?? null, //Optional
        'height'                      => $sendVideo['height']                      ?? null, //Optional
        'thumb'                       => $sendVideo['thumb']                       ?? null, //Optional
        'caption'                     => $sendVideo['caption']                     ?? null, //Optional
        'parse_mode'                  => $sendVideo['parse_mode']                  ?? null, //Optional
        'caption_entities'            => $sendVideo['caption_entities']            ?? null, //Optional
        'supports_streaming'          => $sendVideo['supports_streaming']          ?? null, //Optional
        'disable_notification'        => $sendVideo['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendVideo['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendVideo['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendVideo['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendVideo);
}

//------------------------------ارسال استیکر-----------------------------------

function sendSticker(array $sendSticker) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sticker", [
        'chat_id'                     => $sendSticker['chat_id']                     ?? null, //Yes
        'sticker'                     => $sendSticker['sticker']                     ?? null, //Yes
        'disable_notification'        => $sendSticker['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendSticker['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendSticker['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendSticker['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendSticker);
}

//------------------------------ارسال انیمیشن-----------------------------------

function sendAnimation(array $sendAnimation) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendAnimation", [
        'chat_id'                     => $sendAnimation['chat_id']                     ?? null, //Yes
        'animation'                   => $sendAnimation['animation']                   ?? null, //Yes
        'duration'                    => $sendAnimation['duration']                    ?? null, //Optional
        'width'                       => $sendAnimation['width']                       ?? null, //Optional
        'height'                      => $sendAnimation['height']                      ?? null, //Optional
        'thumb'                       => $sendAnimation['thumb']                       ?? null, //Optional
        'caption'                     => $sendAnimation['caption']                     ?? null, //Optional
        'parse_mode'                  => $sendAnimation['parse_mode']                  ?? null, //Optional
        'caption_entities'            => $sendAnimation['caption_entities']            ?? null, //Optional
        'disable_notification'        => $sendAnimation['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendAnimation['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendAnimation['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendAnimation['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendAnimation);
}

//-------------------------------ارسال وویس------------------------------------

function sendVoice(array $sendVoice) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendVoice", [
        'chat_id'                     => $sendVoice['chat_id']                     ?? null, //Yes
        'voice'                       => $sendVoice['voice']                       ?? null, //Yes
        'caption'                     => $sendVoice['caption']                     ?? null, //Optional
        'parse_mode'                  => $sendVoice['parse_mode']                  ?? null, //Optional
        'caption_entities'            => $sendVoice['caption_entities']            ?? null, //Optional
        'duration'                    => $sendVoice['duration']                    ?? null, //Optional
        'disable_notification'        => $sendVoice['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendVoice['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendVoice['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendVoice['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendVoice);
}

//-------------------------ارسال یادداشت ویدیویی------------------------------

function sendVideoNote(array $sendVideoNote) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendVideoNote", [
        'chat_id'                     => $sendVideoNote['chat_id']                     ?? null, //Yes
        'video_note'                  => $sendVideoNote['video_note']                  ?? null, //Yes
        'duration'                    => $sendVideoNote['duration']                    ?? null, //Optional
        'length'                      => $sendVideoNote['length']                      ?? null, //Optional
        'thumb'                       => $sendVideoNote['thumb']                       ?? null, //Optional
        'disable_notification'        => $sendVideoNote['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendVideoNote['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendVideoNote['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendVideoNote['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendVideoNote);
}

//-----------------------------ارسال رسانه گروهی------------------------------

function sendMediaGroup(array $sendMediaGroup) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    
    توجه کنید پارامتر مدیا از شما نوع رسانه و ادرس رسانه را در یک ارایه دو بعدی میخواهد
    */
    
    return (send_reply("/sendMediaGroup", [
        'chat_id'                     => $sendMediaGroup['chat_id']                     ?? null, //Yes
        'media'                       => $sendMediaGroup['media']                       ?? null, //Yes
        'disable_notification'        => $sendMediaGroup['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendMediaGroup['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendMediaGroup['allow_sending_without_reply'] ?? null, //Optional
    ]));   

    unset($sendMediaGroup);
}

//-------------------------------ارسال نقشه------------------------------------

function sendLocation(array $sendLocation) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/sendLocation", [
        'chat_id'                     => $sendLocation['chat_id']                     ?? null, //Yes
        'latitude'                    => $sendLocation['latitude']                    ?? null, //Yes
        'longitude'                   => $sendLocation['longitude']                   ?? null, //Yes
        'horizontal_accuracy'         => $sendLocation['horizontal_accuracy']         ?? null, //Optional
        'live_period'                 => $sendLocation['live_period']                 ?? null, //Optional
        'heading'                     => $sendLocation['heading']                     ?? null, //Optional
        'proximity_alert_radius'      => $sendLocation['proximity_alert_radius']      ?? null, //Optional
        'disable_notification'        => $sendLocation['disable_notification']        ?? null, //Optional
        'reply_to_message_id'         => $sendLocation['reply_to_message_id']         ?? null, //Optional
        'allow_sending_without_reply' => $sendLocation['allow_sending_without_reply'] ?? null, //Optional
        'reply_markup'                => $sendLocation['reply_markup']                ?? null, //Optional
    ]));   

    unset($sendLocation);
}

//-------------------------------ویرایش پیام-----------------------------------

function editMessageText(array $editMessageText) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/editMessageText", [
        'chat_id'                  => $editMessageText['chat_id']             ?? null, //Optional
        'message_id'               => $editMessageText['message_id']          ?? null, //Optional
        'inline_message_id'        => $editMessageText['inline_message_id']   ?? null, //Optional
        'text'                     => $editMessageText['text']                ?? null, //Yes
        'parse_mode'               => $editMessageText['parse_mode']          ?? null, //Optional
        'entities'                 => $editMessageText['entities']            ?? null, //Optional
        'disable_web_page_preview' => $editMessageText['reply_to_message_id'] ?? null, //Optional
        'reply_markup'             => $editMessageText['reply_markup']        ?? null, //Optional
    ]));

    unset($editMessageText);
    
}

//--------------------------------حذف پیام-------------------------------------
function deleteMessage(array $deleteMessage) 
{
    /*
    برای صدا زدن این تابع به او یک آرایه بین علامت های
    []
    شامل پارامتر های اجباری یا اگر میخواهید اختیاری، تلگرام بدهید
    */
    
    return (send_reply("/deleteMessage", [
        'chat_id'    => $deleteMessage['chat_id']    ?? null, //Yes
        'message_id' => $deleteMessage['message_id'] ?? null, //Yes
    ]));

    unset($deleteMessage);
    
}

//----------------------------پیغام دکمه شیشه ای-------------------------------

function answerCallbackQuery(array $answerCallbackQuery) 
{

    return (send_reply("/answerCallbackQuery", [
        'callback_query_id' => $answerCallbackQuery['callback_query_id'] ?? null, //Yes
        'show_alert'        => $answerCallbackQuery['show_alert']        ?? null, //Optional
        'text'              => $answerCallbackQuery['text']              ?? null, //Optional
        'url'               => $answerCallbackQuery['url']               ?? null, //Optional
        'cache_time'        => $answerCallbackQuery['cache_time']        ?? null, //Optional
    ]));
    
    unset($answerCallbackQuery);
    
}

//--------------------------چک کردن ایپی تلگرام------------------------------

function checkRemoteIPisTelegram()
{
    /*
    این تابع ایپی تلگرام را برسی میکند و اگر کد زیر را در ابتدای فایل اصلی بگذاریذ
    اگر ایپی غیر از تلگرام سعی در کاری داشته باشد یک پیغام نشان داده میشود و اسکرپیت متوقف میشود

    if(!checkRemoteIPisTelegram())
        die('You are not Telegram');
        
    رفع باگ آپدیت های فیک در ربات در صورت لو رفتن ادرس دامنه شما!
    */

    $tg_ip_ranges = array(
        ['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
        ['lower' => '91.108.4.0', 'upper' => '91.108.7.255'],
    );
    
    $ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
    
    foreach ($tg_ip_ranges as $tg_ip_range) {
        $lower_dec = (float) sprintf("%u", ip2long($tg_ip_range['lower']));
        $upper_dec = (float) sprintf("%u", ip2long($tg_ip_range['upper']));
        if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) return true;
    }
    return false;
}

//-----------------------------------دامپ---------------------------------------

function dump($dumpedVar, $dumpInfo = "dumped Variable", $bool = true)
{
    /*
    این تابع اطلاعات چیزی که به عنوان پارامتر میدهید را به شما در فایلی به نام
    logs.txt
    برمگیرداند. نوشته شده توسط
    @TadavomnisT
    */
    
    ob_start();
    echo " $dumpInfo : ";
    var_dump($dumpedVar);
    echo PHP_EOL;
    $rtempy = ob_get_clean();
    
    if ($bool = false) 
        return $rtempy;
    
    $file = fopen("logs.txt", "a+") or die;
    fwrite($file, $rtempy);
    fclose($file);
}

//-----------------------------------استپ---------------------------------------


function step ($id, $step) {
  
  /* شما میتوانید از این تابع برای مرحله
  گذاری کار های کاربر با دیتابیس فایل 
  txt
  استفاده کنید، این فانکشن بهینه نیست صرفا برای تست مناسب است و شما باید داده خود را سمت دیتابیس خوبی ببرید
  */
  
	if(!is_dir("users"))
	    mkdir("users");
	file_put_contents("users/$id.txt", $step);
	
	// step ($chat_id, "main");
	
}

?>


<?php
ob_start();
define('API_KEY', 'token');
//tokenni yozing
$admin = "ttttt"; 
//ozingiz id raqamizni yozing
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.


// start
        if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}



$menu = [["aloqa"]];



// start
        if(stripos($mtext,"/start") !== false){
  $text = "Assalomu alaykum men endi gruppalarni qizdiraman!

😁 Kim gruppada yozsa birinchi javob qaytaraman!
@DJOFSH!!
👮‍♂ Meni gruppalarga qo'shing!";
  $a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'➕ Gruppaga qo`shing','url'=>'https://telegram.me/online_chati?startgroup=new']],

 [['text'=>'➕ yaratuvchi','url'=>'https://telegram.me/djofsh']],
          
          [['text'=>'🎩 Admin','url'=>'https://telegram.me/djofsh']]
          
]
    ])
  ])));
}
// chat
$cfname = $efede['message']['chat']['first_name'];
$cid = $efede["message"]["chat"]["id"];
$clast_name = $efede['message']['chat']['last_name'];
$turi = $efede["message"]["chat"]["type"];

 $url = 'https://coderlar/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {

    $line_rss =  ' '.$item->title.' ';
   $line_rss .= ' '.$item->link.' ';
    break;
} 
if ($text == 'Yangiliklar') {
        $keyfd = buildKeyBoard($menu, $onetime = false, $resize = false);
        $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "$line_rss \n
Batafsil o'qish uchun linkga bosing!\n \n
Manba: [#Hojiakbar](telegram.me/djofsh) [@djofsh]", 'parse_mode' => 'markdown'];
        xabarYubor($content); 
 
} 
if(stripos($mtext," sana") !== false){
    $keyfd = buildKeyBoard($menu3, $onetime = false, $resize = false);
        $text = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "* O'zbekistonda Bugun* `$bugun-yil` *soat* `$soat` *bo'ldi!*", 'parse_mode' => 'markdown'];
$a=json_encode(bot('sendmessage',[
'reply_to_message_id'=>$mesid,
'chat_id'=>$chat_id,
'text'=>$text,
]));
}
// start
        if(stripos($mtext,"soat") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "⌚️ Hozir soat: $soat";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"sana") !== false){
         $bugun = date('d-M Y',strtotime('5 hour')); 
  $text = "⌚️ bugun: $bugun";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
        if(stripos($mtext,"salom") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😁 Va alaykum assalom ukam baxtli bo'ling";
     if(stripos($mtext,"ok") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😁 ok";
 $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} 
if(stripos($mtext,"raxmat") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😁 sog' bo'ling";

   if(stripos($mtext,"kimsan") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😁 botDjofsh";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"oka") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "ho shevalarizdane oʻzi toshlimiz😊";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}

if(stripos($mtext,"nima qiliw ker") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "guruhdan siyqnish kere";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"nma qliw kere") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "gruppadan surish kerak";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim biladi") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "oʻziz bilmesmi";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"bizga qoʻshiling") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "qanaqa qilib";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"discuss") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "men yaxshi muhokama qilaman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"boshladik") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "aha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"online test") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "men ham testa qatnashamn😭";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"domla") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Domla yoʻq hozir";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"i") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "i too😂";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"hi") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "too";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Hello") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Hello. whats up";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"lichka") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "men hammi😂";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"lich") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "olob oʻtib ketib soʻkasizmi yoʻ oʻtmiman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"lic") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "men hammi😳";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"bilmadim") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Aldayapti bu xamma narsani biladi";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
    if(stripos($mtext,"nimaga aytilgan gapni topolmayapsan") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Uzur xojayin axtaryapman lekin chiqmayapti";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
    if(stripos($mtext,"xa") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "👅xm xa";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim qosh") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim qoʻsh") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"km quwti") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim quwti") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"km qowti") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim qoʻwti") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "burchakda 3ta nuqta bor oʻshani bosing chiqib ketish degan yozuv chiqadi oʻshani bosing siz uchun mahsus tugmamiz oʻsha";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"bilmapman") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "nimani bilgansiz🤦🏼‍♂️😁";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"insha allox") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "ha insha allah";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"insha alloh") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "toʻgʻri aytasiz insha allah";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Ollox") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Subhana va taolo";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Olloh") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Subhana va taolo";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Alloh") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Subhana va Taolo";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Allox") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Subhana va taolo";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Muhammad") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Sollollohu alayhi vasallam men shunaqa shu ismni eshitsam aytib qoʻyaman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"hojiakbar") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "shu guruhimizni adminiga yordamchi xalos u ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"qales") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "befarosatlikni boshlani🤦🏼‍♂️ va alaykum assalom";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Xayrli tong") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "ha yaxshi yotib turdim";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kimsan") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "mendurman oʻshaaaaaa";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"bot") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "Boʻldi aka sotmang kimligimi dushmanlarim bilib qoladi-ku";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"kim") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "men qayerdan bilay";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"🤦🏼‍♂️") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "boshingizni oʻgʻritishvordiya";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
 if(stripos($mtext,"") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
    if(stripos($mtext,"nima gap") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "bugun ob havo yaxshi shu gap";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
   
 if(stripos($mtext,"bovotmi") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "voʻ oʻzicha Tosh limi bu😁";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
    if(stripos($mtext,"sotaman") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "🙏iltimos xamma bot do'stlarimni sotsezam mani sotmang endi yaxshi bot bo'laman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
    if(stripos($mtext,"admin") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😝 Admin xozir mashxur ishlar bilan bandlar";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"savol") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😕Ufff savol berishorarkanda😁 juda zarur savollarga javobni https://savollar.islom.uz olasiz";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"ovozingni ochir") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😝 o'zingiz o'chiring $edname sizga gapirishga so'z bermadim 👅 ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} if(stripos($mtext,"kim bor") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😬 Tinchlimi meni eslab qolibsiz ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"ishlar") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😝 xojayinim xozir band edilar nima gapiz bo'sa menga qoldiravering";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"gruppa") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😶gruppa egasi guruhda👆🏻 meni  adminim @djofsh nazoratchisi @// ortiqcha gap qilmang";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"narmalni yoz") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "😬nima boʻladi";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"https://") !== false){
        $soat = date('H:i', strtotime('5 hour'));
  $text = "📣 Reklama";

$a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[

          [['text'=>'➕ Gruppaga qo`shing','url'=>'https://telegram.me/avtojavobbotofshbot?startgroup=new']],
    ]
    ])
  ])));
} $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
$file_o = __DIR__.'/users/'.$mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
// gapni o'zgartirgan
if (isset($update->edited_message)){
  //$chat_id1 = $editm->chat->id;
  $eid = $editm->message_id;
  $edname = $editm->from->first_name;
  $jsu = json_decode(file_get_contents(__DIR__.'/users/'.$eid.'.json'));
  $text = "😠 Hoy $edname nega gapingizni o'zgartirdingiz?  Siz oldin nima degan edingiz!";
  $id = $update->edited_message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$id,
    'reply_to_message_id'=>$eid,
    'text'=>$text,
    'parse_mode'=>'html'
  ]);
  $file_o = __DIR__.'/users/'.$eid.'.json';
  file_put_contents($file_o,json_encode($update->edited_message->text));
  //$up = file_get_contents(__DIR__.'/users/'.$eid.'.json');
  //str_replace("edited_message","message",$up);
}

// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"✋*Assalomu alaykum guruximizga xush kelibsiz yana joʻnavormeng a spam berib *�!

*!Siz Haqingizda :*
$name
$edname
$uname
$ufname
$user
$id

👮‍♂ _Men Bu Guruppaning Quyoshiman!_
✍ *ErKaToY*"
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"👣 $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaymiz😣"
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"👣 $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaydi😣"
    ]);
}



if ($mtext == '/pin' and $chat_ID < 0 and $admin and isset($update['message']['reply_to_message']['message_id'])) {
    pinChatMessage($chat_ID, $update['message']['reply_to_message']['message_id']);
    sm($chatID, 'Messaggio fissato!');
    exit;
}
if ($text == '/feedback' || $text == "aloqa"){
            $keyfd = buildForceReply($selective=false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "Xabar matnini kiriting", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        if ($sreply == 'Xabar matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "**Xabaringiz yaqin fursatda ko'rib chiqiladi!**", 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = [["javob#$chat_id"],["Bekor qilish"]];
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "*Sizga $ufname dan xabar keldi:*

*Xabar kelgan vaxti:*  `$bugun $soat`

*Xabar matni:*
$text \n \n \n \nℹ️*Ismi:*`$ufname` \n *Familiyasi:* `$uname` \n *Login:* @$ulogin \n * 🆔 ID:* $uid \n\n ", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$text);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob') {

            $keyfd = buildForceReply($selective=true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "javob matnini kiriting#$us_id", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$sreply);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $us_id, 'reply_markup' => $keyfd, 'text' => $text, 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "Xabar yetkazildi", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

    

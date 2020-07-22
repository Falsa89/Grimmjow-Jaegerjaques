a<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$senderId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="espada")
{
	$response = "......!";
}
elseif (strpos($text, "uccid") !== false)
{
	$response = "Non mi interessa chi sono, se mostrano anche un po 'di Reiatsu, li uccidiamo tutti ";
}
elseif (strpos($text, "sottovalutando") !== false)
{
	$response = " Mi stai sottovalutando, Shinigami? Ancora non ho ancora voglia di ucciderti. Dai! Mostrami il tuo Bankai. Se non lo fai, farò la stessa cosa Ho fatto quel piccolo Shinigami laggiù e ti farò un bel buco nel petto!";
}
elseif (strpos($text, "insett") !== false)
{
	$response = "È meglio schiacciare rapidamente gli insetti, giusto?";
}
elseif (strpos($text, "codard") !== false)
{
	$response = "Sono tutti codardi, ognuno di loro dannatamente. Qualunque cosa. Li consumerò e basta. Man mano che diventeranno la mia carne e il mio sangue, vedranno oltre. Io ... io sono il re!";
}
if (strpos($text, "picchio") !== false) 
{
	$response = "Quegli occhi. Sei sempre così. Non importa quanto ti picchio, hai la sensazione che mi batterai. Pensi che stai andando molto più forte di me! Non posso sopportarlo!";
}
elseif (strpos($text, "distrugg") !== false)
{
	$response = "Che tu sia un Umano, uno Shinigami o un Arrancar, chiunque mi guardi come se stesse sottovalutando il mio potere, distruggerò ognuno di loro nell'oblio!";

}
elseif (strpos($text, "storie") !== false)
{
	$response = " La prossima volta che fai storie, ti faccio saltare in aria! ";

}
elseif (strpos($text, "preda") !== false)
{
	$response = " Ti mostrerò cosa ottieni quando fai casino con la preda di qualcun altro.";

}
elseif (strpos($text, "gola") !== false)
{
	$response = "Ti taglierò la gola con le unghie, così finalmente capirai chi è il più forte tra noi due!";

}
elseif (strpos($text, "addio") !== false)
{
	$response = "il mio nome è Grimmjow Jaggerjack! Prega solo di non risentirlo.. Perchè la prossima volta che sentirai il mio nome.. sarà l'ultima!! ";
}
elseif (strpos($text, "grimmjow") !== false)
{
	$response = "6° espada al servizio di Aizen dell'esercito degli Arrancar, possiede una personalità brutale, impulsiva ed eccessivamente violenta. Possiede un'astuzia selvaggia ed ha un talento per sfruttare rapidamente qualsiasi apertura rivelata dal suo avversario. è schietto, sarcastico e sadico, rivela un sorriso psicotico ridendo maniacalmente ogni volta che si eccita.";
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);

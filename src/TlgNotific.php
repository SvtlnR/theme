<?php 
	class TlgNotific{
		public static function sendNotif($email,$comment,$filename){
			$botToken="688770078:AAGH8DsFZQcuibxYrSeOHXWvvweI-cigqKw";
			$website="https://api.telegram.org/bot".$botToken;
			$chatId= "-318840721";  //Receiver Chat Id 
				$params=[
                'chat_id' => $chatId,
                'parse_mode' => 'html',
                'text' => implode(PHP_EOL, array(
                    "<b>E-mail:</b> ". $email,
                    "<b>Comment:</b>  ".  $comment,
                    "<b>File:</b>"  .  $filename,
                  ) )
                
                ];

		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
		}

	}
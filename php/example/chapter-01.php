<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '12ac32778389db4066a4237fb66a247d';
$access_token  = 'CbTv7VdQFapQHopr9CHcZwsgc+mLHhyJWsZ2D6kQUED72fUlpEM8fwmgSsCr1i1groolVNS9MPcbq0/0STdJfQsSDm7eog9tclyge8zBxPLhudxUt5pl5eUARamJxlvMouf8qjCI64dhYEYBEqSvxAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}

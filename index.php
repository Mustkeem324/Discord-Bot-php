<?php

include __DIR__.'/vendor/autoload.php';

use RestCord\DiscordClient;

$discord = new DiscordClient(['token' => 'bot-token']); // Token is required

// Replace  with the actual channel ID
$channelId = 'Your Channel ID';

var_dump($discord->channel->createMessage(['channel.id' => $channelId, 'content' => 'hey i am online']));

?>

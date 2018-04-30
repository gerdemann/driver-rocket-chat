<?php


/**
 * For more information of incoming and outgoing webhooks see:
 * https://rocket.chat/docs/administrator-guides/integrations/
 */
return [

    /**
     * Outgoing Token
     */
    'outgoingToken' => '',

    /**
     * Incoming Web Hook Endpoint (with token)
     */
    'incomingEndpoint' => '',

    /**
     * Matching Keys
     *
     * The required keys in the payload to be a valid RocketChat request
     */
    'matchingKeys' => [
        'user_id', 'user_name', 'channel_id', 'channel_name', 'message_id', 'text', 'timestamp', 'bot',
    ],

];

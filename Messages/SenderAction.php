<?php

namespace pimax\Messages;

/**
 * Class SenderAction
 * @package pimax\Messages
 */
class MessageButton
{
    /**
     * Mark as seen
     */
    const TYPE_MARK_SEEN = "mark_seen";

    /**
     * Turn typing indicators on
     */
    const TYPE_TYPING_ON = "typing_on";

 /**
     * Turn typing indicators off
     */
    const TYPE_TYPING_OFF = "typing_off";

    /**
     * Button type
     *
     * @var null|string
     */
    protected $type = null;

   

    /**
     * Button url
     *
     * @var null|string
     */
    protected $recipient = null;

    /**
     * MessageButton constructor.
     *
     * @param string $type
     * @param string $recipient
     */
    public function __construct($recipient,$type)
    {
        $this->type = $type;
        $this->recipient = $recipient;

       
    }

    /**
     * Get Button data
     * 
     * @return array
     */
    public function getData()
    {
        
 return [
            'recipient' =>  [
                'id' => $this->recipient
            ],
            'sender_action' => $this->type
        ];
    }
}

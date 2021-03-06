<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 06/06/2018
 * Time: 13:41
 */

namespace CodeBot\Message;

class Text implements Message
{
    /**
     * @var string
     */
    private $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(String $messageText): array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'text' => $messageText,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}
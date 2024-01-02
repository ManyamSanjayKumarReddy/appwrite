<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

class Messages extends Base
{
    public const ALLOWED_ATTRIBUTES = [
        'providerId',
        'deliveredAt',
        'deliveredTo',
        'status',
        'description',
        'providerType',
        'message'
    ];

    /**
     * Expression constructor
     *
     */
    public function __construct()
    {
        parent::__construct('messages', self::ALLOWED_ATTRIBUTES);
    }
}

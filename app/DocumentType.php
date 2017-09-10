<?php

namespace Charis;

use \Eloquent;

class DocumentType extends Eloquent
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'document_type';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Table parameters
     */
    const TABLE_NAME = 'document_type';
    const ID = 'id';
    const NAME = 'name';
    const DESCRIPTION = 'description';

}
<?php
namespace Bread\Media\File;

use Bread\Configuration\Manager as Configuration;
use Bread\REST;

class Model extends REST\Model
{

    public $id;

    public $name;

    public $type;

    public $data;

    public $size;

    public function jsonSerialize()
    {
        return array(
            'name' => $this->name,
            'type' => $this->type,
            'size' => $this->size,
            'id' => $this->id
        );
    }
}

Configuration::defaults('Bread\Media\File\Model', array(
    'properties' => array(
        'id' => array(
            'type'=>'integer',
            'strategy' => 'autoincrement',
            'unique' => true
        ),
        'name' => array(
            'type' => 'string'
        ),
        'type' => array(
            'type' => 'string'
        ),
        'data' => array(
            'type' => 'resource'
        ),
        'size' => array(
            'type' => 'integer'
        )
    )
));
<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\Behavior\Translate\TranslateTrait;

class Article extends Entity
{
    use TranslateTrait;
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}

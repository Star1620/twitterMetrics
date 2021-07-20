<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Config;

use Nette\Utils\ArrayHash;

class Config extends ArrayHash
{
    public function __construct(array $arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $this->$key = ArrayHash::from($value, TRUE);
            } else {
                $this->$key = $value;
            }
        }
    }
}
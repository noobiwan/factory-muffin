<?php

namespace League\FactoryMuffin\Kind;

use League\FactoryMuffin\Kind;

/**
 * Class Date
 *
 * @package League\FactoryMuffin\Kind
 */
class Date extends Kind
{
    /**
     * @return mixed
     */
    public function generate()
    {
        $format = $this->getOption(0, 'r');

        return $this->faker->date($format);
    }
}

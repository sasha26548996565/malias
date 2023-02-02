<?php

if (! function_exists('price_replace'))
{
    function price_replace(string $price)
    {
        $filterParams['price_from'] = (int) substr(stristr($price, ' - ', true), 1);
        $filterParams['price_to'] = (int) substr(stristr($price, '-'), 3);
        return $filterParams;
    }
}

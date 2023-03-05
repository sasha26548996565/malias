<?php

if (! function_exists('price_replace'))
{
    function price_replace(string $price)
    {
        $priceFrom = (int) substr(stristr($price, ' - ', true), 1);
        $priceTo = (int) substr(stristr($price, '-'), 3);
        $filterParams['priceFrom'] = substr(currency($priceFrom / 100, 'USD', currency()->getUserCurrency()), 1);
        $filterParams['priceTo'] = currency($priceTo / 100, 'USD', currency()->getUserCurrency());
        return $filterParams;
    }
}

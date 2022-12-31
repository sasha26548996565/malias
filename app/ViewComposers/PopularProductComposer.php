<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Order;
use Illuminate\Contracts\View\View;

class PopularProductComposer implements ComposerContract
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function compose(View $view): View
    {
        return $view->with('popularProducts', $this->order->getPopularProducts());
    }
}

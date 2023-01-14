<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Review;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Main\ReviewRequest;

class ReviewController extends Controller
{
    public function addReview(ReviewRequest $request, Product $product): RedirectResponse
    {
        Review::create(array_merge($request->validated(), ['product_id' => $product->id]));
        return back();
    }
}

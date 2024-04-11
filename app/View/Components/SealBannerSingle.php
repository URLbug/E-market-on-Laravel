<?php

namespace App\View\Components;

use App\Models\shop\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SealBannerSingle extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = Product::query()
            ->where('sale', '=', 30, 'and')
            ->where('seller', '>', 3)
            ->limit(3)
            ->get();

        return view(
            'components.seal-banner-single',
            [
                'products' => $products,
            ]
        );
    }
}

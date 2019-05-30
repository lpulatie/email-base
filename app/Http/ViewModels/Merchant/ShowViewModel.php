<?php

namespace App\Http\ViewModels\Merchant;

use App\Models\Merchant;
use Spatie\ViewModels\ViewModel;

/**
 * Implements View Models
 * @see https://github.com/spatie/laravel-view-models
 */
class ShowViewModel extends ViewModel
{

    public $merchant;
    protected $view = 'templates.merchant.show';

    public function __construct(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }
}

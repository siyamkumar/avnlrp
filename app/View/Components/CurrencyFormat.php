<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use NumberFormatter;

class CurrencyFormat extends Component
{
    public $amount;
    public function __construct(int $amount)
    {
        $numberFormatter = new NumberFormatter("en_IN", NumberFormatter::CURRENCY);
        $numberFormatter->setPattern(str_replace('¤#', '¤ #', $numberFormatter->getPattern()));
        $inr = $numberFormatter->formatCurrency($amount, "INR");
        $inr = str_replace('.00', ' /-', $inr);
        $this->amount = $inr;
    }


    public function render(): View|Closure|string
    {
        return view('components.currency-format');
    }
}
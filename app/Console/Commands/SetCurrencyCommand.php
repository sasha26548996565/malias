<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Torann\Currency\Currency;
use Illuminate\Support\Facades\Artisan;

class SetCurrencyCommand extends Command
{
    protected $signature = 'currency:add {currency}';
    protected $description = 'Add currency in db (StaEL) and arguments "all" - create all currency';
    private array $currencies;

    public function __construct()
    {
        parent::__construct();
        $this->currencies = currency()->getCurrencies();
    }

    public function handle(): int
    {
        if ($this->issetCurrency($this->currencies, strtoupper($this->argument('currency'))) == true)
            return Command::INVALID;

        Artisan::call('currency:manage', ['action' => 'add', 'currency' => $this->argument('currency')]);
        $this->updateCurrencyRate();
        return Command::SUCCESS;
    }

    private function issetCurrency(array $currencies, string $currency): bool
    {
        foreach ($currencies as $currencyItem)
        {
            if (in_array($currency, $currencyItem))
                return true;
        }

        return false;
    }

    private function updateCurrencyRate(): void
    {
        Artisan::call('currency:update -o');
    }
}

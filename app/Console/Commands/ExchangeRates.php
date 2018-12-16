<?php

namespace App\Console\Commands;

use App\CurrencyExchangeRate;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;

class ExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bluesky:exchange-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get latest exchange rates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "https://api.exchangeratesapi.io/latest?base=USD";

        try {
            $handle = curl_init();

            // Check if initialization had gone wrong*
            if ($handle === false) {
                throw new Exception('failed to initialize');
            }

            curl_setopt($handle, CURLOPT_URL, $url);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);

            $content = curl_exec($handle);

            // Check the return value of curl_exec(), too
            if ($content === false) {
                throw new Exception(curl_error($handle), curl_errno($handle));
            }
            // Close curl handle
            curl_close($handle);
            CurrencyExchangeRate::query()
                ->create([
                    'rates_to' => $content,
                ]);
            CurrencyExchangeRate::query()
                ->where('created_at', '<', Carbon::now()->subDays(7))->delete();
        } catch (Exception $e) {
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);

        }
    }
}

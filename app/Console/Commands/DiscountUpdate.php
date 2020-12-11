<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Discount;
use App\User;
use App\Product;
class DiscountUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discount:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'discounts description';

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
     * @return int
     */
    public function handle()
    {
        $discounts = Discount::whereNotNull('ends_at')->get();
        $start = Carbon::now();

        foreach ($discounts as $discount) {
            if (Carbon::now() > $discount->ends_at) {
                $discount->deleted_at = 1;
                $discount->save();
            }
        }
      $this->info($time);
    } 

}

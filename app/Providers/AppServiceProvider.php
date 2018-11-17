<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        \Blade::directive('errorBlock', function ($input) {
            return
                '<?php if($errors->has(' . $input . ')):?>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class=\'help-block\'>
                            <strong><?php echo $errors->first(' . $input . ') ?></strong>
                    </span>
                 <?php endif;?>';
        });
        \Blade::directive('errorBlockImage', function ($input) {
            return
                '<?php if($errors->has(' . $input . ')):?>
                    <span class=\'help-block\'>
                            <strong><?php echo $errors->first(' . $input . ') ?></strong>
                    </span>
                 <?php endif;?>';
        });

        \Blade::directive('hasError', function ($input) {
            return
                '<?php if($errors->has(' . $input . ')):?>has-error has-feedback<?php endif;?>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

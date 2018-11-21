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
                      <?php if('.$input.' != "description"):?>
                     <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                 <?php endif;?>
                    
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
/*                '<?php if($errors->has(' . $input . ')):?>has-error has-feedback<?php endif;?>';*/
                '<?php if($errors->has(' . $input . ')):?>parsley-error<?php endif;?>';
        });
        \Blade::directive('image', function ($input) {
            return
                '<div class="form-group">
                {!! Form::label(\'file\', \'Upload New Image\') !!}
                <div class="input-group @hasError(\'image\')">
            <span class="input-group-btn">
                <span class="btn btn btn-success btn-file">
                    Browse…
                    {!! Form::input(\'file\',\'image\',\'\',[\'id\' => \'imgInp\']) !!}
                </span>
            </span>
                    {!! Form::input(\'text\',\'text\',null,[\'class\' => \'text form-control\', \'readonly\']) !!}
                </div>
                <div class="has-error">
                <?php if($errors->has(' . $input . ')):?>
                    <span class=\'help-block\'>
                            <strong><?php echo $errors->first(' . $input . ') ?></strong>
                    </span>
                 <?php endif;?></div>

                <div class="img-preview polaroid">
                    <img id=\'img-upload\' src=""/>
                    <div class="text-container">
                    </div>
                </div>
            </div>';
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

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services. 
     * 
     * @return void
     */

     public function boot(){
         Form::component('text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
     }
}
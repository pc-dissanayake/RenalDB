<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Laravel\Fortify\Fortify;
use App\Models\Keys_and_values;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);



        Fortify::registerView(function () {
            $hin = Keys_and_values::where('keysofthekeygroup', 'healthinstitutionsgroup')->get(['option as SelectOptionText', 'valuesofthekey as SelectOption' ]);

            $hjbt = Keys_and_values::where('keysofthekeygroup', 'jobTitle')->get(['option as SelectOptionText', 'valuesofthekey as SelectOption' ]);

            return view('auth.register')->with(['hin'=> $hin, 'hjbt'=> $hjbt]);
        });
        
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
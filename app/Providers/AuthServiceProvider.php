<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         /* define a admin user role */
         Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
         });

         /* define a guru user role */
         Gate::define('isGuru', function($user) {
             return $user->role == 'guru';
         });

         /* define a siswa user role */
         Gate::define('isSiswa', function($user) {
             return $user->role == 'siswa';
         });
    }
}

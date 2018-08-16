<?php
namespace Reptern\Application\Providers;

use Illuminate\Support\ServiceProvider;

class RepternServiceProvider extends ServiceProvider
{

    public function boot(){

    }
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(
            'Reptern\Application\Repository',
            'Reptern\Application\EloquentRepository'
        );
        $this->app->bind(
            'Reptern\Domain\Contact\ContactRepository',
            'Reptern\Infrastructure\Contact\EloquentContactRepository'
        );
        $this->app->bind(
            'Reptern\Domain\Group\GroupRepository',
            'Reptern\Infrastructure\Group\EloquentGroupRepository'
        );

        // Resolving the outbound classes
        // $this->app->make('Domain\Account\AccountValidator');

    }
}

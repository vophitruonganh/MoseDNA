<?php

namespace MoseDNA\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'MoseDNA\Http\Controllers';
    protected $namespaceBackend = 'MoseDNA\Http\Controllers\Backend';
    protected $namespaceFrontend = 'MoseDNA\Http\Controllers\Frontend';
    protected $namespaceAPI = 'MoseDNA\Http\Controllers\API';
    protected $namespaceAPIFrontend = 'MoseDNA\Http\Controllers\API\Frontend';
    protected $namespaceAPIBackend = 'MoseDNA\Http\Controllers\APBackend';
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapApiBackendRoutes();
        $this->mapApiFrontendRoutes();
        $this->mapBackendRoutes();
        $this->mapFrontendRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapBackendRoutes()
    {
        Route::middleware('auth')
            ->namespace($this->namespaceBackend)
            ->group(base_path('routes/backend.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFrontendRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespaceFrontend)
            ->group(base_path('routes/frontend.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiBackendRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespaceAPIBackend)
            ->group(base_path('routes/api_backend.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiFrontendRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespaceAPIFrontend)
            ->group(base_path('routes/api_frontend.php'));
    }
}

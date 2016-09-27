<?php

namespace Panel\Providers;

use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->BootViews('panel');
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->RegisterRoutes();
	}

	/**
	 * Register Routes Service Provider
	 *
	 * @return void
	 */
	public function RegisterRoutes()
	{
		$this->app->register(RouteServiceProvider::class);
	}

	/**
	 * Boot Views
	 *
     * @param  string  $namespace
     * @return void
	 */
	public function BootViews($namespace)
	{
		$this->loadTranslationsFrom( __DIR__ . '/../Resources/Lang', $namespace);
		$this->loadViewsFrom( __DIR__ . '/../Resources/Views', $namespace);
	}
}

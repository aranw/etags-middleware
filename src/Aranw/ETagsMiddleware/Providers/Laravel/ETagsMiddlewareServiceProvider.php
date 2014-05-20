<?php namespace Aranw\ETagsMiddleware\Providers\Laravel;

use Aranw\ETagsMiddleware\ETags;
use Illuminate\Support\ServiceProvider;

class ETagsMiddlewareServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('aranw/etags-middleware');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
        $this->app->middleware(new ETags($this->app));
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}

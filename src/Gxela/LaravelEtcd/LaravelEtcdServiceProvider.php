<?php namespace Gxela\LaravelEtcd;

use Illuminate\Support\ServiceProvider;
use LinkORB\Component\Etcd\Client;

class LaravelEtcdServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerClient();
	}

    private function registerClient()
    {
        $this->app->bindShared('laravel-etcd.client', function($app)
        {
            $server = \Config::get('laravel-etcd:config.server', 'http://127.0.0.1:4001');
            $version = \Config::get('laravel-etcd:config.version', 'v2');

            return new Client($server, $version);
        });
    }
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('laravel-etcd.client');
	}

}

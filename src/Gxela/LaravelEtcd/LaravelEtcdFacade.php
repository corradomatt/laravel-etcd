<?php namespace Gxela\LaravelEtcd;

class LaravelEtcdFacade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-etcd.client';
    }
}

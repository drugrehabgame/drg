<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Playlyfe\Sdk\Playlyfe;
use Playlyfe\Sdk\PlaylyfeException;

class AppServiceProvider extends ServiceProvider
{
	
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         
    }
	
	public static function createUser()
	{
		$pl = self::bootPlayLife();
		var_dump($pl->get("/admin/players", []));
		die('test');
	}
	
	public static function bootPlayLife() 
	{
		return $pl = new Playlyfe(
        		array(
          			'version' => 'v2',
          			'client_id' => "OTNkODhiOWItMDE1Mi00MWNjLWI4Y2MtZTU3YTBjNjVkNjBi",
          			'client_secret' => "ZmIzZWE1MDgtOTNkOS00ODA2LTg3NzEtMzQyN2JhOGRhMTMyNTM2ZDZiZjAtZDdjNC0xMWU1LTk5MDgtZWRhMTI3NmM5M2E5",
        	  		'type' => 'client'
        		)
    	);
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

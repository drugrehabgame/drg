<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Playlyfe\Sdk\Playlyfe;
use Playlyfe\Sdk\PlaylyfeException;
use Session;

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
	
	public static function getAvailableQuests($userId)
	{
		$pl = self::bootPlayLife();
		return $pl->get('/runtime/definitions/processes', array('player_id'=>$userId), array('player_id'=>$userId));
	}
	
	public static function getUserProfile($userId)
	{
		$pl = self::bootPlayLife();
		return $pl->get('/runtime/player', array('player_id'=>$userId), array('player_id'=>$userId));
	}
	
	public static function bootPlayLife() 
	{
		return $pl = new Playlyfe(
            array(
              'client_id' => "ZTEzMmVjYmEtMDk5NC00YzhmLTgyYzctNDBjNTg1Mzc5MjJi",
              'client_secret' => "M2RhOWU3NzAtYjlkYi00YjY2LWEwOTAtZTVmMTE3YWJiMzgzNDkwODM0NjAtZDgzYy0xMWU1LWEyYzEtZDNkY2EyMTBiMTBk",
              'type' => 'client',
              'store' => function($access_token) {
              	Session::put('access_token', $access_token);
              },
              'load' => function() {
                if(Session::has('access_token')){
                  return Session::get('access_token');
                  //return $_COOKIE['access_token'];
                }
                else {
                  return null;
                }
              }
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

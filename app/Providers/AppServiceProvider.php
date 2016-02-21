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
	
	public static function getFriends($userId)
	{
		$pl = self::bootPlayLife();
		try{
			$friends = $pl->get('/runtime/teams/'.$userId.'/members', array('player_id'=>$userId), array('player_id'=>$userId));
		}catch (\Exception $e){
			return false;
		}
		return $friends;
	}
	
	public static function getUserQuests($userId) 
	{
		$pl = self::bootPlayLife();
		return $pl->get('/admin/processes', ["player_id" =>$userId]);
	}
	
	public static function joinGame($userId, $gameId)
	{
		$pl = self::bootPlayLife();
		$request = array("id"=> $gameId,"access"=>"PUBLIC","definition"=> $gameId);
		return $pl->post("/runtime/processes", ["player_id" =>$userId], $request);
	}
	
	public static function getGameDetails($userId, $gameId)
	{
		$pl = self::bootPlayLife();
		$request = array();
		return $pl->get('/runtime/processes/'.$userId.'/'.$gameId, ["player_id" =>$userId], $request);
	}
	
	public static function getGameTasks($userId, $gameId) 
	{
		$pl = self::bootPlayLife();
		$request = array();
		return $pl->get('/runtime/processes/'.$userId.'/'.$gameId.'/triggers', ["player_id" =>$userId], $request);
	}
	
	public static function doTask($userId, $gameId, $trigger) 
	{
		$pl = self::bootPlayLife();
		$request = array('trigger'=>$trigger);
		return $pl->post('/runtime/processes/'.$userId.'/'.$gameId.'/play', ["player_id" =>$userId], $request);
	}
	
	public static function bootPlayLife() 
	{
		return $pl = new Playlyfe(
            array(
              'client_id' => "NTdlZTg2MWMtYTg1Mi00ZmQzLTljOGYtMTUzZDc0OGQ0OTU4",
              'client_secret' => "ZGM5NWI0ZWEtNGNlZC00MTJlLWE4OTgtZjAyYzg5Y2ViZWQ4NjEzZWY1ZjAtZDg2OS0xMWU1LWEyYzEtZDNkY2EyMTBiMTBk",
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

<?php

namespace App\Handlers;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    
    public function userField()
    {
  		if(auth('vendor')->check())
  		{      
        	return auth()->user()->id;
        }
        else
        {
        	return 'admin';
        }
    }


    /*public function userField()
    {

        return parent::userField();
    }*/
}

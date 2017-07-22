<?php

namespace VSF;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table ="eventos";

    /*protected function getDateFormat()
	{
	    return 'm/d/Y';
	}*/

	/*public function getDateFormat($date)
	{
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
	}*/
  
}

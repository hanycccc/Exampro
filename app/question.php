<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //

   public function  encodeURIComponent($str) {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        return strtr(rawurlencode($str), $revert);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class NewsItem extends Model
{
    use HasTranslations;
    
    public $translatable = [ 'p_o', 'body',  'p_p', 'val', 'phone', 'stat',];
    
}

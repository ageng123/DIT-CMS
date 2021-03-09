<?php

namespace Cms\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsModel extends Model
{
    const Cypher = 'sha256'; 
    function urlFriendlyEncode(String $text)
    {
        return strtr(base64_encode($text), '+/=', '._-');
    }
    function urlFriendlyDecode(String $text)
    {
        return base64_decode(strtr($text, '._-', '+/='));
    }
    
}

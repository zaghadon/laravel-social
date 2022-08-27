<?php

namespace Zaghadon\Social\Models;

use Illuminate\Database\Eloquent\Model;
use Zaghadon\Social\Traits\HasUUID;

class Follows extends Model
{
    use HasUUID;

    protected $table = 'follows';

    protected $guarded = [];

    public $timestamps = false;

    public function followable()
    {
        return $this->morphTo();
    }
}

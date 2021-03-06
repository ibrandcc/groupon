<?php

/*
 * This file is part of ibrand/groupon.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Groupon\Test;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table = 'el_goods';

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

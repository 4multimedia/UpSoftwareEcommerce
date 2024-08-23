<?php

namespace Upsoftware\Ecommerce\Models;

use Illuminate\Database\Eloquent\Model;
use Upsoftware\Core\Traits\UseMedia;
use Upsoftware\Ecommerce\Contracts\Product as ProductContract;

class Product extends Model implements ProductContract
{
    use UseMedia;
}

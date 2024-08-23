<?php

    namespace Upsoftware\Ecommerce\Providers;

    use Upsoftware\Core\Providers\CoreModuleServiceProvider;
    use Upsoftware\Ecommerce\Models\Product;

    class ModuleServiceProvider extends CoreModuleServiceProvider {
        protected $models = [
            Product::class
        ];
    }

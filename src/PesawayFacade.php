<?php

namespace SammyKariuki\Pesaway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SammyKariuki\Pesaway\Skeleton\SkeletonClass
 */
class PesawayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pesaway';
    }
}

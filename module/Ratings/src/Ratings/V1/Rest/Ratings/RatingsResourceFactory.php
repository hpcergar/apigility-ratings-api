<?php
namespace Ratings\V1\Rest\Ratings;

class RatingsResourceFactory
{
    public function __invoke($services)
    {
        return new RatingsResource();
    }
}

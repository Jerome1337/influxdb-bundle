<?php

namespace Algatux\InfluxDbBundle;

use Algatux\InfluxDbBundle\DependencyInjection\InfluxDbExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class InfluxDbBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new InfluxDbExtension();
    }
}

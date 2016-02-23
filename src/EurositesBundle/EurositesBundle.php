<?php

namespace EurositesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EurositesBundle extends Bundle
{
    public function getParent() {
        return 'ProjectBundle';
    }
}

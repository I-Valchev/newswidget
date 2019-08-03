<?php

declare(strict_types=1);

namespace Bolt\NewsWidget;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Dashboard Weather Widget';
    }

    public function initialize(): void
    {
        $this->widgets->registerWidget(new NewsWidget());
    }
}
<?php

return array(
    'service2' => \DI\factory(function () {
        $value = new \stdClass();
        $value->foo = 'bar';
        return $value;
    }),
    'DI\Test\IntegrationTest\Issues\Issue72\Class1' => \DI\object()
            ->constructor(\DI\link('service2')),
);

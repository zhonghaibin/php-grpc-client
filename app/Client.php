<?php

namespace App;

use Grpc\BaseStub;
use Services\Base\HelloWorld\HelloWorldRequest;
use Services\Base\HelloWorld\HelloWorldResponse;


class Client extends BaseStub
{
    function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    public function sayHello(HelloWorldRequest $argument, $metadata = [], $options = [])
    {
        return $this->_simpleRequest(
            '/Services.Base.HelloWorld.HelloWorldService/SayHello',
            $argument,
            [HelloWorldResponse::class, 'decode'],
            $metadata,
            $options
        );
    }
}

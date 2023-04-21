<?php

namespace App;

use Grpc\ChannelCredentials;
use Services\Base\HelloWorld\HelloWorldRequest;

/**
 * grpc请求案例
 */
class App
{
    public $client;

    public static function run()
    {
        (new self())->grpc()->sayHello();
    }

    public function grpc()
    {
        $this->client = $this->client();
        return $this;
    }

    public function client()
    {
        return new client('127.0.0.1:8000', [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }

    public function sayHello()
    {
        $request = new HelloWorldRequest();
        $request->setName("令狐冲");
        $get = $this->client->sayHello($request)->wait();
        list($reply, $status) = $get;
        dd($reply->getMessage(),$status->code);
    }

}
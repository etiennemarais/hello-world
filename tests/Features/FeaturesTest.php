<?php

/**
 * Generated by OutlineTestGenerator on 2016-07-07 at 17:03:59.
 */
class FeaturesTest extends TestCase
{

    public function testGet_Index_page_Returns_200()
    {
        $call = $this->get("/", array ( 'Content-Type' => 'application/json', 'Authorization' => 'Token TestApiKey1234', ));
        $call->seeJsonStructure(array ( 'status', 'message', ));
        $call->assertResponseStatus(200);
    }

}

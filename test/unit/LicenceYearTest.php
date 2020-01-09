<?php

namespace BrokeYourBike\Test;

class LicenceYearTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $rootDir = __DIR__ . '/../..';

        $license = explode("\n", file_get_contents("$rootDir/LICENSE"));
        $copyright = trim($license[2]);

        $year = date('Y');

        $expected = "Copyright (c) 2012-2019 Twilio SendGrid, Inc., {$year} Ivan Stasiuk.";

        $this->assertEquals($expected, $copyright);
    }
}

<?php

use Tests\TestCase;
use DTApi\Helpers\TeHelper; // Import the service containing your function

class TestHelper extends TestCase
{
    public function testWillExpireAt()
    {
        // Define some sample input data
        $dueTime = '2023-11-01 12:00:00';
        $createdAt = '2023-10-31 10:30:00';

        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        $expectedResult = '2023-10-31 12:00:00';

        // Assert that the result matches the expected result
        $this->assertEquals($expectedResult, $result);
    }
}

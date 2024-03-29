<?php

/**
 * Licensed to the Apache Software Foundation (ASF) under one or more
 * contributor license agreements.  See the NOTICE file distributed with
 * this work for additional information regarding copyright ownership.
 * The ASF licenses this file to You under the Apache License, Version 2.0
 * (the "License"); you may not use this file except in compliance with
 * the License.  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   tests
 * @package    log4php
 * @subpackage filters
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version    $Revision: 1374580 $
 * @link       http://logging.apache.org/log4php
 */
class MyFilter extends LoggerFilter
{
}

/**
 * @group filters
 */
class LoggerFilterTest extends PHPUnit_Framework_TestCase
{

    public function testDecide()
    {
        $filter = new MyFilter();
        // activateOptions is empty, but should at least throw no exeception
        $filter->activateOptions();
        $eventError = new LoggerLoggingEvent("LoggerAppenderEchoTest", new Logger("TEST"), LoggerLevel::getLevelError(), "testmessage");
        $eventDebug = new LoggerLoggingEvent("LoggerAppenderEchoTest", new Logger("TEST"), LoggerLevel::getLevelDebug(), "testmessage");
        $eventWarn = new LoggerLoggingEvent("LoggerAppenderEchoTest", new Logger("TEST"), LoggerLevel::getLevelWarn(), "testmessage");

        $result = $filter->decide($eventError);
        self::assertEquals($result, LoggerFilter::NEUTRAL);

        $result = $filter->decide($eventDebug);
        self::assertEquals($result, LoggerFilter::NEUTRAL);

        $result = $filter->decide($eventWarn);
        self::assertEquals($result, LoggerFilter::NEUTRAL);
    }
}

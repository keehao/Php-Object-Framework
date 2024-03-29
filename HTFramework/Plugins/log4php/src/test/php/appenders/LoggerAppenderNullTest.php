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
 * @subpackage appenders
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @version    $Revision: 1374580 $
 * @link       http://logging.apache.org/log4php
 */

/**
 * @group appenders
 */
class LoggerAppenderNullTest extends PHPUnit_Framework_TestCase
{
    /**
     * The Null appender does nothing - nothing to assert.
     * Just here for the sake of completness and a good testing ratio :-)
     */
    public function testActivateOptions()
    {
        $event = new LoggerLoggingEvent("LoggerAppenderNullTest", new Logger("TEST"), LoggerLevel::getLevelInfo(), "testmessage");

        $appender = new LoggerAppenderNull("TEST");
        $appender->activateOptions();
        $appender->append($event);
        $appender->close();
    }

    public function testRequiresLayout()
    {
        $appender = new LoggerAppenderNull();
        self::assertFalse($appender->requiresLayout());
    }
}

<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Privacy tests for dedicationtime availability.
 *
 * @package   availability_dedicationtime
 * @copyright   2024 Santosh N. <santosh.nag2217@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace availability_dedicationtime\privacy;

use core_privacy\tests\provider_testcase;
use core_privacy\local\metadata\collection;

/**
 * Privacy tests for dedicationtime availability.
 *
 * @package   availability_dedicationtime
 * @copyright   2024 Santosh N. <santosh.nag2217@gmail.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @coversDefaultClass \availability_dedicationtime\privacy\provider
 */
final class privacy_test extends provider_testcase {
    /**
     * Test returning metadata.
     * @covers \availability_dedicationtime\privacy\provider
     */
    public function test_get_metadata(): void {
        $collection = new collection('availability_dedicationtime');
        $reason = provider::get_reason($collection);
        $this->assertEquals($reason, 'privacy:metadata');
        $this->assertStringContainsString('does not store any personal data.', get_string($reason, 'availability_dedicationtime'));
    }
}

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
 * This file definies observers needed by the tool.
 *
 * @package    tool_trigger
 * @copyright  Matt Porritt <mattp@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$observers = array(
    
    array(
        'eventname' => '\core\event\course_module_updated',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::mod_updated',
    ),
    array(
        'eventname' => '\core\event\module_updated',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::mod_updated',
    ),
    array(
        'eventname' => '\mod_quiz\event\attempt_submitted',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::quiz_submitted',
    ),
    array(
        'eventname' => '\core\event\user_enrolment_created',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::user_enrolled',
    ),
    array(
        'eventname' => '\core\event\user_enrolment_updated',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::user_enrolled',
    ),
    array(
        'eventname' => '\mod_chat\event\message_sent',
        'includefile' => '/local/wstemplate/classes/observer.php',
        'callback' => 'atid_observer::message_sent',
    ),
);
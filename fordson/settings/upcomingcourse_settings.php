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
 * Heading and course images settings page file.
 *
 * @packagetheme_fordson
 * @copyright  2016 Chris Kenniburg
 * @creditstheme_boost - MoodleHQ
 * @licensehttp://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
	defined('MOODLE_INTERNAL') || die();
//Rachita: Creating setting page for upcoming courses slider.08/01/2021.
	$page = new admin_settingpage('theme_fordson_upcomingcourses', get_string('upcomingcourses', 'theme_fordson'));

	// heading for upcoming course One
    $name = 'theme_fordson/course1info';
    $heading = get_string('coursesectiontitle', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    //course section 01
    $name = 'theme_fordson/title1';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg1';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg1');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl1';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

    //course section 02

    $name = 'theme_fordson/course2info';
    $heading = get_string('coursesectiontitle2', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title2';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg2';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg2');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl2';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 03.
	$name = 'theme_fordson/course3info';
    $heading = get_string('coursesectiontitle3', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title3';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg3';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg3');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl3';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);


	//course section 04.
	$name = 'theme_fordson/course4info';
    $heading = get_string('coursesectiontitle4', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title4';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg4';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg4');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl4';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 05.
	$name = 'theme_fordson/course5info';
    $heading = get_string('coursesectiontitle5', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title5';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg5';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg5');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl5';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 06.
	$name = 'theme_fordson/course6info';
    $heading = get_string('coursesectiontitle6', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title6';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg6';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg6');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl6';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 07.
	$name = 'theme_fordson/course7info';
    $heading = get_string('coursesectiontitle7', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title7';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg7';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg7');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl7';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);


	//course section 08.
	$name = 'theme_fordson/course8info';
    $heading = get_string('coursesectiontitle8', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title8';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg8';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg8');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl8';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 09.
	$name = 'theme_fordson/course9info';
    $heading = get_string('coursesectiontitle9', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title9';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg9';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg9');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl9';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	//course section 10.
	$name = 'theme_fordson/course10info';
    $heading = get_string('coursesectiontitle10', 'theme_fordson');
    $information = get_string('upcomigcourse1desc', 'theme_fordson');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    $name = 'theme_fordson/title10';
	$title = get_string('coursetitle', 'theme_fordson');
	$description = get_string('enterupcomingcourse1', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/upcoimgcourseimg10';
	$title = get_string('upcomingcourseimage', 'theme_fordson');
	$description = get_string('upcomingcourseimage_desc', 'theme_fordson');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'upcoimgcourseimg10');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

	$name = 'theme_fordson/imgurl10';
	$title = get_string('url', 'theme_fordson');
	$description = get_string('courselink_desc', 'theme_fordson');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
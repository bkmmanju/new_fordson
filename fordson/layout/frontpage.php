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
 * A two column layout for the boost theme.
 *
 * @package   theme_boost
 * @copyright 2016 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');

if (isloggedin() && !behat_is_test_site()) {
    $navdraweropen = (get_user_preferences('drawer-open-nav', 'true') == 'true');
} else {
    $navdraweropen = false;
}
$extraclasses = [];
if ($navdraweropen) {
    $extraclasses[] = 'drawer-open-left';
}
$enrolform = '';
$plugin = enrol_get_plugin('easy');
            if ($plugin) {
                $enrolform = $plugin->get_form();
            }
$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;
$regionmainsettingsmenu = $OUTPUT->region_main_settings_menu();

//mihir for magzter slider 3
global $PAGE,$USER;  
$hasslide2 = (empty($PAGE->theme->settings->slide2title)) ? false : format_text($PAGE->theme->settings->slide2title);
//$slide3content = (empty($PAGE->theme->settings->slide3content)) ? false : format_text($PAGE->theme->settings->slide3content);
$slide2content = '<a class="btn btn-warning magzter" href="https://library.magzter.com/thirdparty_login/hpcl_login?email='.$USER->email.'" target="_blank">Click here to read</a>';
$magzterlink = 'https://library.magzter.com/thirdparty_login/hpcl_login?email='.$USER->email;

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
    'navdraweropen' => $navdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'enrolform' => $enrolform,
	'hasslide2' => $hasslide2,
    'slide2content' => $slide2content,
	'magzterlink' => $magzterlink,
];

if ($PAGE->theme->settings->toggledrawermenu==1) {
fordson_boostnavigation_extend_navigation($PAGE->navigation);
fordson_local_navigation_extend_navigation($PAGE->navigation);
} else if($PAGE->theme->settings->toggledrawermenu==2) {
fordson_boostnavigation_extend_navigation($PAGE->navigation);
fordson_local_navigation_extend_navigation($PAGE->navigation);
}

//Mihir for magzter counter April 2019
$PAGE->requires->jquery();
$PAGE->requires->js('/theme/fordson/javascript/custom.js');

$templatecontext['flatnavigation'] = $PAGE->flatnav;
echo $OUTPUT->render_from_template('theme_fordson/frontpage', $templatecontext);

global $CFG, $USER;
$userid = $USER->id;
$ajaxlink = $CFG->wwwroot.'/theme/fordson/ajax.php?userid='.$userid;
?>
<script>
  $(".magzter").click(function(){
    $.ajax({
            url: '<?php echo $ajaxlink ?>',
            type: "POST",
            data: {"userid":'<?php echo $userid ?>'},
            contentType: false,
            cache: false,
            processData:false,
             success:  function(data) 
              {
                
              },
            error: function() 
            {
            }           
       });

  });
 </script> 
  <?php
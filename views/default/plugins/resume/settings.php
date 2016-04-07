<?php
global $CONFIG;
$yesno_opt = array('no' => elgg_echo('resume:settings:no'), 'yes' => elgg_echo('resume:settings:yes'));
$site_url = elgg_get_site_url();

echo "<blockquote>";
echo '<br>&nbsp;&nbsp;&nbsp;<label style="clear:left;">'.elgg_echo("Install/Delete tables related to this plugin").'</label><hr>';
// Delete Table and Install Structure
echo '<br />&nbsp;&nbsp;&nbsp;<label style="clear:left;">' . elgg_echo('<a href="'.$site_url.'mod/resume/sql/install_cvranking_structure.php" target="_blank">Click here to install the database table for this plugin</a>') . '</label> ';
echo '<p>&nbsp;&nbsp;&nbsp;' . elgg_echo('The above link will delete the tables and their data related to this plugin and install a fresh copy of the table structure.') . '</p>';

//
echo '<br />&nbsp;&nbsp;&nbsp;<label style="clear:left;">' . elgg_echo('<a href="'.$site_url.'mod/resume/sql/drop_table.php" target="_blank">Click here to delete the database table for this plugin</a>') . '</label> ';
echo '<p>&nbsp;&nbsp;&nbsp;' . elgg_echo('The above link will delete the tables and their data related to this plugin.') . '</p><br>';

echo "</blockquote>";

// cvranking
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:cvranking') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[cvranking]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->cvranking));
echo '<p>' . elgg_echo('resume:settings:cvranking:help') . '</p>';

// education
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:education') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[education]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->education));
echo '<p>' . elgg_echo('resume:settings:education:help') . '</p>';

// workexperience
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:workexperience') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[workexperience]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->workexperience));
echo '<p>' . elgg_echo('resume:settings:workexperience:help') . '</p>';

// language
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:language') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[language]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->language));
echo '<p>' . elgg_echo('resume:settings:language:help') . '</p>';

// research 
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:research') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[research]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->research));
echo '<p>' . elgg_echo('resume:settings:research:help') . '</p>';

// publication
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:publication') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[publication]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->publication));
echo '<p>' . elgg_echo('resume:settings:publication:help') . '</p>';

// skill
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:skill') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[skill]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->skill));
echo '<p>' . elgg_echo('resume:settings:skill:help') . '</p>';

// CVR
echo '<br /><label style="clear:left;">' . elgg_echo('resume:settings:CVR') . '</label> ';
echo elgg_view('input/dropdown', array('name' => 'params[CVR]', 'options_values' => $yesno_opt, 'value' => $vars['entity']->CVR));
echo '<p>' . elgg_echo('resume:settings:CVR:help') . '</p>';

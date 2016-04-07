<?php

 $page_owner = $vars['owner'];
 
  //echo '<p><a href="' . elgg_get_site_url() . 'resumesprintversion/' . $page_owner->username . '" target="_blank">' . elgg_echo("resume:profile:gotoprint") . '</a></p>';
  //echo '<p><a href="' . elgg_get_site_url() . 'profile/' . $page_owner->username . '?view=xml-europass" target="_blank">' . elgg_echo("resume:profile:xml-europass") . '</a></p>';
 
  $printmenu = new ElggMenuItem('10',elgg_echo('resume:profile:gotoprint'),elgg_get_site_url() . 'resumesprintversion/' . $page_owner->username);
  
  $xmlmenu = new ElggMenuItem('12',elgg_echo('resume:profile:xml-europass'),elgg_get_site_url() . 'profile/' . $page_owner->username . '?view=xml-europass');

  $sidebarmenu = new ElggMenuItem('12',elgg_echo('resume:profile:print'),"#");
  $sidebarmenu->addChild($printmenu);
  $sidebarmenu->addChild($xmlmenu);
  
  elgg_register_menu_item('page', $sidebarmenu);

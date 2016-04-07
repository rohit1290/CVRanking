<?php

$performed_by = get_entity($vars['item']->subject_guid); // $statement->getSubject();
$object = get_entity($vars['item']->object_guid);
$action_type = $vars['item']->action_type;


// Facyla : easier to handle more subtype, if ever
$subtype = $object->getSubtype();
switch($subtype) {
  case "education" :
    $itemType = elgg_echo("resume:river:education");
    break;
  case "workexperience" :
    $itemType = elgg_echo("resume:river:workexperience");
    break;
  case "language" :
    $itemType = elgg_echo("resume:river:language");
    break;
  case "research" :
    $itemType = elgg_echo("resume:river:research");
    break;
  case "publication" :
    $itemType = elgg_echo("resume:river:publication");
    break;
  case "skill" :
    $itemType = elgg_echo("resume:river:skill");
    break;
  default:
    $itemType = elgg_echo("resume:river:$subtype");
}

if ($action_type == "update") $action = "updated";
else $action = "created";

$string = elgg_echo("resume:river:$action", array("{$performed_by->name}", $itemType)) ." ". elgg_echo('resume:menu:item'). "</a>";

$subject_link = elgg_view('output/url', array(
	'href' => "{$performed_by->getURL()}",
	'text' => "{$performed_by->name}",
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$object_link = elgg_view('output/url', array(
	'href' => "{$vars['url']}resumes/{$performed_by->username}",
	'text' => elgg_echo('resume:menu:item'),
	'class' => 'elgg-river-object',
	'is_trusted' => true,
));

$summary = elgg_echo("river:create:object:resume", array($subject_link, $object_link));

$item = $vars['item'];
$excerpt = $string;
$excerpt = strip_tags($excerpt);
$excerpt = elgg_get_excerpt($excerpt);
echo elgg_view('river/elements/layout', array(
	'item' => $vars['item'],
	'message' => $excerpt,
	'summary' => $summary,
));

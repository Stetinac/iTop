<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('SK SK', 'Slovak', 'Slovenčina', [
	'Class:Change' => 'Zmena',
	'Class:Change+' => '~~',
	'Class:Change/Attribute:approval_date' => 'Dátum schválenia',
	'Class:Change/Attribute:approval_date+' => '~~',
	'Class:Change/Attribute:category' => 'Kategória',
	'Class:Change/Attribute:category+' => '~~',
	'Class:Change/Attribute:category/Value:application' => 'Aplikácia',
	'Class:Change/Attribute:category/Value:application+' => 'application~~',
	'Class:Change/Attribute:category/Value:hardware' => 'Hardvér',
	'Class:Change/Attribute:category/Value:hardware+' => 'hardware~~',
	'Class:Change/Attribute:category/Value:network' => 'Sieť',
	'Class:Change/Attribute:category/Value:network+' => 'network~~',
	'Class:Change/Attribute:category/Value:other' => 'Iné',
	'Class:Change/Attribute:category/Value:other+' => 'other~~',
	'Class:Change/Attribute:category/Value:software' => 'Softvér',
	'Class:Change/Attribute:category/Value:software+' => 'software~~',
	'Class:Change/Attribute:category/Value:system' => 'Systém',
	'Class:Change/Attribute:category/Value:system+' => 'system~~',
	'Class:Change/Attribute:changemanager_email' => 'Email manažéra zmien',
	'Class:Change/Attribute:changemanager_email+' => '~~',
	'Class:Change/Attribute:changemanager_id' => 'Change manager~~',
	'Class:Change/Attribute:changemanager_id+' => '~~',
	'Class:Change/Attribute:child_changes_list' => 'Podriadené zmeny',
	'Class:Change/Attribute:child_changes_list+' => 'All the sub changes linked to this change~~',
	'Class:Change/Attribute:creation_date' => 'Dátum vytvorenia',
	'Class:Change/Attribute:creation_date+' => '~~',
	'Class:Change/Attribute:fallback_plan' => 'Návratový plán',
	'Class:Change/Attribute:fallback_plan+' => '~~',
	'Class:Change/Attribute:outage' => 'Outage~~',
	'Class:Change/Attribute:outage+' => '~~',
	'Class:Change/Attribute:outage/Value:no' => 'No~~',
	'Class:Change/Attribute:outage/Value:no+' => '~~',
	'Class:Change/Attribute:outage/Value:yes' => 'Yes~~',
	'Class:Change/Attribute:outage/Value:yes+' => '~~',
	'Class:Change/Attribute:parent_id' => 'Nadradená zmena',
	'Class:Change/Attribute:parent_id+' => '~~',
	'Class:Change/Attribute:parent_id_friendlyname' => 'Priateľské meno rodičovskej zmeny',
	'Class:Change/Attribute:parent_id_friendlyname+' => '~~',
	'Class:Change/Attribute:parent_name' => 'Referencia na rodičovskú zmenu',
	'Class:Change/Attribute:parent_name+' => '~~',
	'Class:Change/Attribute:reject_reason' => 'Dôvod zamietnutia',
	'Class:Change/Attribute:reject_reason+' => '~~',
	'Class:Change/Attribute:related_incident_list' => 'Súvisiace incidenty',
	'Class:Change/Attribute:related_incident_list+' => 'All the incidents linked to this change~~',
	'Class:Change/Attribute:related_problems_list' => 'Súvisiace problémy',
	'Class:Change/Attribute:related_problems_list+' => 'All the problems linked to this change~~',
	'Class:Change/Attribute:related_request_list' => 'Súvisiace požiadavky',
	'Class:Change/Attribute:related_request_list+' => 'All the user requests linked to this change~~',
	'Class:Change/Attribute:status' => 'Stav',
	'Class:Change/Attribute:status+' => '~~',
	'Class:Change/Attribute:status/Value:approved' => 'Schválená',
	'Class:Change/Attribute:status/Value:approved+' => '~~',
	'Class:Change/Attribute:status/Value:assigned' => 'Pridelená',
	'Class:Change/Attribute:status/Value:assigned+' => '~~',
	'Class:Change/Attribute:status/Value:closed' => 'Zatvorená',
	'Class:Change/Attribute:status/Value:closed+' => '~~',
	'Class:Change/Attribute:status/Value:new' => 'Nová',
	'Class:Change/Attribute:status/Value:new+' => '~~',
	'Class:Change/Attribute:status/Value:planned' => 'Plánovaná',
	'Class:Change/Attribute:status/Value:planned+' => '~~',
	'Class:Change/Attribute:status/Value:rejected' => 'Zamietnutá',
	'Class:Change/Attribute:status/Value:rejected+' => '~~',
	'Class:Change/Stimulus:ev_approve' => 'Schváliť',
	'Class:Change/Stimulus:ev_approve+' => '~~',
	'Class:Change/Stimulus:ev_assign' => 'Prideiť',
	'Class:Change/Stimulus:ev_assign+' => '~~',
	'Class:Change/Stimulus:ev_finish' => 'Zatvoriť',
	'Class:Change/Stimulus:ev_finish+' => '~~',
	'Class:Change/Stimulus:ev_plan' => 'Naplánuj',
	'Class:Change/Stimulus:ev_plan+' => '~~',
	'Class:Change/Stimulus:ev_reject' => 'Zamietnúť',
	'Class:Change/Stimulus:ev_reject+' => '~~',
	'Class:Change/Stimulus:ev_reopen' => 'Znova otvoriť',
	'Class:Change/Stimulus:ev_reopen+' => '~~',
	'Menu:Change:Overview' => 'Prehľad',
	'Menu:Change:Overview+' => '~~',
	'Menu:Change:Shortcuts' => 'Skratky',
	'Menu:Change:Shortcuts+' => '~~',
	'Menu:ChangeManagement' => 'Manažment zmien',
	'Menu:Changes' => 'Otvorené zmeny',
	'Menu:Changes+' => 'All open changes~~',
	'Menu:MyChanges' => 'Zmeny pridelené mne',
	'Menu:MyChanges+' => 'Changes assigned to me (as Agent)~~',
	'Menu:NewChange' => 'Nová zmena',
	'Menu:NewChange+' => 'Create a new change ticket~~',
	'Menu:SearchChanges' => 'Vyhľadať zmeny',
	'Menu:SearchChanges+' => 'Search for change tickets~~',
	'Menu:WaitingAcceptance' => 'Zmeny očakávajúce prijatie',
	'Menu:WaitingAcceptance+' => '~~',
	'Menu:WaitingApproval' => 'Zmeny očakávajúce schválenie',
	'Menu:WaitingApproval+' => '~~',
	'Tickets:Related:OpenChanges' => 'Open changes~~',
	'Tickets:Related:RecentChanges' => 'Recent changes (72h)~~',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => 'Zmeny podľa kategórie za posledných 7 dní',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => 'Zmeny podľa domény za posledných 7 dní',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => 'Zmeny podľa stavu za posledných 7 dní',
	'UI-ChangeManagementOverview-Last-7-days' => 'Počet zmien za posledných 7 dní',
]);

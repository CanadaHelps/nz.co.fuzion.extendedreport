<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return [
  0 => [
    'name' => 'Extended Report - Activities',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Activities (Extended)',
      'description' => 'All Activities with extra fields',
      'class_name' => 'CRM_Extendedreport_Form_Report_ActivityExtended',
      'report_url' => 'activityextended',
      'component' => '',
    ],
  ],
];

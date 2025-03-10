<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return [
  0 => [
    'name' => 'Extended Report - Editable Activities',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Activities (Detailed)',
      'description' => 'All Activities with detailed information',
      'class_name' => 'CRM_Extendedreport_Form_Report_ActivityEditable',
      'report_url' => 'activityeditable',
      'component' => '',
    ],
  ],
];

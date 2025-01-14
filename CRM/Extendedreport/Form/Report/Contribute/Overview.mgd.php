<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return [
  0 => [
    'name' => 'Extended Report - Contribution Overview',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Contributions (Extended, Summary)',
      'description' => 'Total amounts raised in summaries',
      'class_name' => 'CRM_Extendedreport_Form_Report_Contribute_Overview',
      'report_url' => 'contribution/overview',
      'component' => 'CiviContribute',
    ],
  ],
];

<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return [
  0 => [
    'name' => 'Extended Report - Recurring Contribution Pivot Chart',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Recurring Contributions (Extended, Pivot Chart)',
      'description' => 'Total amounts raised for Recurring Contributions with extra fields, in a pivot chart',
      'class_name' => 'CRM_Extendedreport_Form_Report_Contribute_ContributionRecurPivot',
      'report_url' => 'contribution/recur-pivot',
      'component' => 'CiviContribute',
    ],
  ],
];

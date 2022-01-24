<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return [
  0 => [
    'name' => 'Extended Report - Recurring Contributions',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Recurring Contributions (Detailed)',
      'description' => 'Total amounts raised from Recurring Contributions with individual Contribution information',
      'class_name' => 'CRM_Extendedreport_Form_Report_Contribute_RecurringContributions',
      'report_url' => 'contribution/recurring_contributions',
      'component' => 'CiviContribute',
    ],
  ],
];

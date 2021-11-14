<?php 

class Contract {
    public $employeeName;
    public $mangerName;
    public $startDate;
    public $endDate;
    public $salary;
    public $position;
    public $companyName = 'NTI';
}

$contract = new Contract;
$contract->employeeName = 'Esraa';
$contract->mangerName = 'Ahmed';
$contract->startDate = '14-11-2021';
$contract->endDate = '14-11-2022';
$contract->salary = '5000';
$contract->position = 'Back-end Developer';
print_r($contract);


$contract2 = new Contract;
$contract2->employeeName = 'Eslam';
$contract2->mangerName = 'Ahmed';
$contract2->startDate = '14-11-2021';
$contract2->endDate = '14-11-2024';
$contract2->salary = '9000';
$contract2->bonus = TRUE;
$contract2->position = 'FullStack Developer';
print_r($contract2);

$contract3 = new Contract;
print_r($contract3);
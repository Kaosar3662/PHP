<?php
$employees = [
    ["Name" => "Aiden", "Department" => "Design", "SalaryPerMonth" => 6200],
    ["Name" => "Sophia", "Department" => "Development", "SalaryPerMonth" => 9500],
    ["Name" => "Liam", "Department" => "Marketing", "SalaryPerMonth" => 7200],
    ["Name" => "Noah", "Department" => "Finance", "SalaryPerMonth" => 8100],
    ["Name" => "Emma", "Department" => "Support", "SalaryPerMonth" => 5400],
    ["Name" => "Olivia", "Department" => "HR", "SalaryPerMonth" => 6700],
    ["Name" => "Mason", "Department" => "Development", "SalaryPerMonth" => 8800],
    ["Name" => "Isabella", "Department" => "Marketing", "SalaryPerMonth" => 7600],
    ["Name" => "Ethan", "Department" => "Design", "SalaryPerMonth" => 7000],
    ["Name" => "Lucas", "Department" => "Finance", "SalaryPerMonth" => 8300],
    ["Name" => "Amelia", "Department" => "Support", "SalaryPerMonth" => 6000],
    ["Name" => "James", "Department" => "HR", "SalaryPerMonth" => 5800],
    ["Name" => "Mia", "Department" => "Development", "SalaryPerMonth" => 9100],
    ["Name" => "Benjamin", "Department" => "Design", "SalaryPerMonth" => 7600],
    ["Name" => "Charlotte", "Department" => "Marketing", "SalaryPerMonth" => 6900],
    ["Name" => "Evelyn", "Department" => "Support", "SalaryPerMonth" => 5500],
    ["Name" => "Alexander", "Department" => "Finance", "SalaryPerMonth" => 8500],
    ["Name" => "Harper", "Department" => "Design", "SalaryPerMonth" => 7400],
    ["Name" => "Henry", "Department" => "Development", "SalaryPerMonth" => 9300],
    ["Name" => "Ella", "Department" => "Marketing", "SalaryPerMonth" => 7100]
];


$grandTotal = 0;


foreach ($employees as $employee) {

    global $grandTotal;
    echo $employee["Name"] . ":\n  Daily salary is: $" . floor($employee["SalaryPerMonth"] / 30) . "\n" . "  Monthly salary is: $" . $employee["SalaryPerMonth"] . "\n" . "  Yearly salary is: $" . $employee["SalaryPerMonth"] * 12 . "\n\n";
    $grandTotal = $grandTotal + $employee["SalaryPerMonth"];
}
echo "Daily Grand Total salary is: $" . $grandTotal / 30 . "\n";
echo "Monthly Grand Total salary is: $" . $grandTotal . "\n";
echo "Yearly Grand Total salary is: $" . $grandTotal * 12;
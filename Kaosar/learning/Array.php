<?php
$employees = [
  ["Name" => "Alex", "Department" => "Design", "SalaryPerMonth" => 500],
  ["Name" => "Maria", "Department" => "Development", "SalaryPerMonth" => 850],
  ["Name" => "John", "Department" => "Marketing", "SalaryPerMonth" => 600],
  ["Name" => "Sophia", "Department" => "Design", "SalaryPerMonth" => 700],
  ["Name" => "Liam", "Department" => "Development", "SalaryPerMonth" => 900],
  ["Name" => "Olivia", "Department" => "HR", "SalaryPerMonth" => 550],
  ["Name" => "Noah", "Department" => "Support", "SalaryPerMonth" => 500],
  ["Name" => "Emma", "Department" => "Finance", "SalaryPerMonth" => 750],
  ["Name" => "James", "Department" => "Design", "SalaryPerMonth" => 650],
  ["Name" => "Ava", "Department" => "Development", "SalaryPerMonth" => 950],
  ["Name" => "William", "Department" => "Support", "SalaryPerMonth" => 600],
  ["Name" => "Isabella", "Department" => "Marketing", "SalaryPerMonth" => 700],
  ["Name" => "Ethan", "Department" => "Development", "SalaryPerMonth" => 800],
  ["Name" => "Mia", "Department" => "Finance", "SalaryPerMonth" => 720],
  ["Name" => "Lucas", "Department" => "Design", "SalaryPerMonth" => 680],
  ["Name" => "Amelia", "Department" => "HR", "SalaryPerMonth" => 560],
  ["Name" => "Benjamin", "Department" => "Development", "SalaryPerMonth" => 880],
  ["Name" => "Charlotte", "Department" => "Marketing", "SalaryPerMonth" => 640],
  ["Name" => "Henry", "Department" => "Finance", "SalaryPerMonth" => 780],
  ["Name" => "Ella", "Department" => "Support", "SalaryPerMonth" => 520]
];

$grandTotal = 0;

foreach ($employees as $employee) {

  global $grandTotal;
  echo $employee["Name"] . ":\n  Daily salary is: $" . floor($employee["SalaryPerMonth"] / 30) . "\n" . "  Monthly salary is: $" . $employee["SalaryPerMonth"] . "\n" . "  Yearly salary is: $" . $employee["SalaryPerMonth"] * 12 . "\n\n";
  $grandTotal += $employee["SalaryPerMonth"];
}
echo "Daily Grand Total salary is: $" . $grandTotal / 30 . "\n";
echo "Monthly Grand Total salary is: $" . $grandTotal . "\n";
echo "Yearly Grand Total salary is: $" . $grandTotal * 12;

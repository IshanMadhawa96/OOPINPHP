<?php

class Student{
  public  $names = 'Ishan';
  public   $attandance = true;
  public $totalMarks = 89;


}

// instance
echo'<br>';
echo'<br>';
echo 'Student 1';
echo'<br>';
echo'<br>';
$student = new Student();
echo $student->names;
echo'<br>';
echo $student->attandance;
echo'<br>';
echo $student->totalMarks=100;
// reusable single class in diffrent student
echo'<br>';
echo'<br>';
echo 'Student 2';
echo'<br>';
echo'<br>';

$student = new Student();
echo $student->names = "Dane";
echo'<br>';
echo $student->attandance;
echo'<br>';
echo $student->totalMarks=50;
?>
<?php

class Student{
  public  $names ;
  public   $attandance ;
  public $totalMarks ;

  public function studentDetails($names,$attandance,$totalMarks){
      $this->names = $names;
      $this->attandance = $attandance;
      $this->totalMarks = $totalMarks;
  }
}

//instanse of the student
$student = new Student();
$student->studentDetails("Ishan",false,100);

echo'<br>';
echo'<br>';
echo 'Student 1';
echo'<br>';
echo'<br>';
echo $student->names;
echo'<br>';
echo $student->attandance;
echo'<br>';
echo $student->totalMarks;

?>
<?php

//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";

$tableName = "";

if (isset($_GET['getRecordsFor'])) {
    $tableName = $_GET['getRecordsFor'];
}

// Begin output
print '<article>';
print '<h2>Database: ' . DATABASE_NAME . '</h2>';

//get four year plan
print '<h1>Four Year Plan</h1>';
print '<a href="https://jrdyke.w3.uvm.edu/cs148develop/advising/form.php">Create Your 4 Year Plan<a>';

$columns = 2;
    //now print out each record
    $query = 'SELECT tblAdvisor.pmkNetId, tblStudent.pmkNetId ' .
             'FROM tblAdvisor, tblStudent';

//    $topResults = $thisDatabaseReader->testQuery($query, "", 0, 0, 0, 0, false, false);
    $topResults = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    foreach ($topResults as $rec) {
        for ($i = 0; $i < $columns; $i++) {
            print '<p>' . $rec[$i] . '</td>';
        }
    }

// print out a list of all the tables and their description
// make each table name a link to display the record
print '<section id="tables2" class="float_left">';
    
$columns = 4;
    //now print out each record
    $query = 'SELECT tblSemester.fnkTerm, tblSemester.fnkYear, fldDept, fldCourseNum, fldCredits ' . 
             'FROM tblCourses ' . 
             'JOIN tblSemester ON  tblSemester.fnkCourseId=tblCourses.pmkCourseId ' .
             'JOIN tblSemesterPlan ON tblSemesterPlan.fnkPlanId=tblSemester.fnkPlanId ' .
             'JOIN tbl4YP ON tbl4YP.pmkPlanId=tblSemesterPlan.fnkPlanId ' . 
             'JOIN tblStudent ON tblStudent.pmkNetId=tbl4YP.pmkStudentId ' .
             'WHERE tbl4YP.pmkPlanId= "1" AND tblSemesterPlan.fnkTerm="Fall" AND tblSemesterPlan.fnkYear="1"';

//    $results = $thisDatabaseReader->testQuery($query, "", 1, 2, 6, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 2, 6, 0, false, false);
    
    $totalCredits = 0;
    $semCredits = 0;
    $semester = "";
    $year = "";
    
    if (is_array($results)){
        foreach ($results as $row) {
            if($semester == ""){
                print '<div>';
                $semester = $row["fnkTerm"] . ' ' . $row["fnkYear"];
                print '<h1>' . $semester . '</h1>';
                print '<ol>';
            } elseif ($semester != "" && $semester != $row["fnkTerm"] . ' ' . $row["fnkYear"]){
                print '</ol>';
                print 'Semester Credits: ' . $semCredits;
                $semCredits = 0;
                print '</div>';
                
                //create new container box, reassign semester, print heading and restart the ol
                print '<div>';
                $semester = $row["fnkTerm"] . ' ' . $row["fnkYear"];
                print '<h1>' . $semester . '</h1>';
                print '<ol>';
            }
            if($semester == $row["fnkTerm"] . ' ' . $row["fnkYear"]){
                print '<li>' . $row["fldDept"] . ' ' . $row["fldCourseNum"] . '</li>';
                $semCredits = $semCredits + $row["fldCredits"];
                $totalCredits = $totalCredits + $row["fldCredits"];
            }

        }
        print 'Total Credits: ' . $totalCredits;
    }
 

print '</article>';
include "footer.php";
?>
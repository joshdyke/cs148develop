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

$columns = 1;
    //now print out each record
    $query = 'SELECT DISTINCT fldCourseName FROM tblCourses JOIN tblEnrolls ON tblEnrolls.fnkCourseId = tblCourses.pmkCourseId JOIN tblStudents ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentId WHERE tblEnrolls.fldGrade = "100" ORDER BY fldCourseName';
    
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);

    
    print '<h1>SELECT DISTINCT fldCourseName FROM tblCourses JOIN tblEnrolls ON tblEnrolls.fnkCourseId = tblCourses.pmkCourseId JOIN tblStudents ON tblStudents.pmkStudentId = tblEnrolls.fnkStudentId WHERE tblEnrolls.fldGrade = "100" ORDER BY fldCourseName;<h1>';
    
    print '<table class ="assignment3">';
    print '<tr><th>Course Name</th></tr>';
    foreach ($results as $rec) {
        
        print '<tr class="">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

print '</article>';
include "footer.php";
?>
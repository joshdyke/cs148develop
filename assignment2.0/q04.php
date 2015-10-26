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
$columns = 6;
    //now print out each record

//*****    Display all course data for our class (1) *****//

    $query = 'SELECT pmkCourseId, fldCourseNumber, fldCourseName, fldDepartment, fldCredits, fldCRN FROM tblCourses, tblSections WHERE pmkCourseId = "392" AND fldCRN = "95470"';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 4, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

    print '<h1>SELECT pmkCourseId, fldCourseNumber, fldCourseName, fldDepartment, fldCredits, fldCRN FROM tblCourses, tblSections WHERE pmkCourseId = "392" AND fldCRN = "95470";<h1>';
    print '<table>';
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
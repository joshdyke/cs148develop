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

$columns = 3;
    //now print out each record
    $query = 'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers JOIN tblSections ON tblSections.fnkTeacherNetId = tblTeachers.pmkNetId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblCourses.fldDepartment = "CS" AND tblSections.fldType NOT LIKE "lab" AND fldNumStudents NOT LIKE 0 GROUP BY tblTeachers.fldLastName ORDER BY total desc';

//    $results = $thisDatabaseReader->testQuery($query, "", 1, 5, 4, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 5, 4, 0, false, false);

    
    print '<h1>SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers JOIN tblSections ON tblSections.fnkTeacherNetId = tblTeachers.pmkNetId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblCourses.fldDepartment = "CS" AND tblSections.fldType NOT LIKE "lab" AND fldNumStudents NOT LIKE 0 GROUP BY tblTeachers.fldLastName ORDER BY total desc;<h1>';
    print '<table class ="assignment3">';
    print '<tr><th>First Name</th><th>Last Name</th><th>Total Students</th></tr>';
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
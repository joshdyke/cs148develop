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
$columns = 12;
    //now print out each record
    
//*****    Display all section data for classes that start at 1:10PM in Kalkin (10) *****//
    $query = 'SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart,fldStop, fldDays, fldBuilding, fldRoom FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin"';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 4, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

    print '<h1>SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart,fldStop, fldDays, fldBuilding, fldRoom FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin";<h1>';
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
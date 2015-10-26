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

$columns = 4;
    //now print out each record
    $query = 'SELECT fldFirstName, fldLastName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers) ORDER BY fldSalary DESC';

//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 0, 1, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 0, 1, false, false);

    
    print '<h1>SELECT fldFirstName, fldLastName, fldPhone, fldSalary FROM tblTeachers WHERE fldSalary < (SELECT AVG(fldSalary) FROM tblTeachers) ORDER BY fldSalary DESC;<h1>';
    print '<table class ="assignment3">';
    print '<tr><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Salary</th></tr>';
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
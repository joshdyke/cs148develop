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
$columns = 2;
    //now print out each record

//*****    Display the first and last name of teachers whose Net ID begins with the letter 'r' and ends in the letter "o". (4) *****//
    
    $query = 'SELECT fldFirstName, fldLastName, pmkNetId FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o"';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 4, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);

    print '<h1>SELECT fldFirstName, fldLastName, pmkNetId FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o";<h1>';
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
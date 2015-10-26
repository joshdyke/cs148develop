<?php

//##############################################################################
//
// main home page for the site 
// 
//##############################################################################
include "top.php";
?>
<body>
    <ul>
        <li>q01. <a href="q01.php">SQL:</a> SELECT pmkNetId FROM tblTeachers;</li>
        <li>q02. <a href="q02.php">SQL:</a> SELECT fldDepartment, fldCourseName FROM tblCourses WHERE fldCourseName LIKE "Introduction%";</li>
        <li>q03. <a href="q03.php">SQL:</a> SELECT fnkCourseId, fldCRN, fnkTeacherNetId, fldMaxStudents, fldNumStudents, fldSection, fldType, fldStart,fldStop, fldDays, fldBuilding, fldRoom FROM tblSections WHERE fldStart = "13:10:00" AND fldBuilding = "Kalkin";</li>
        <li>q04. <a href="q04.php">SQL:</a> SELECT pmkCourseId, fldCourseNumber, fldCourseName, fldDepartment, fldCredits, fldCRN FROM tblCourses, tblSections WHERE pmkCourseId = "392" AND fldCRN = "95470";</li>
        <li>q05. <a href="q05.php">SQL:</a> SELECT fldFirstName, fldLastName, pmkNetId FROM tblTeachers WHERE pmkNetId LIKE "r%" AND pmkNetId LIKE "%o";</li>
        <li>q06. <a href="q06.php">SQL:</a> SELECT fldCourseName, fldDepartment FROM tblCourses WHERE fldCourseName LIKE "%data%" AND fldDepartment != "CS";</li>
        <li>q07. <a href="q07.php">SQL:</a> SELECT COUNT(DISTINCT fldDepartment) FROM tblCourses;</li>
        <li>q08. <a href="q08.php">SQL:</a> SELECT fldBuilding, COUNT(fldSection) FROM tblSections GROUP BY fldBuilding;</li>
        <li>q09. <a href="q09.php">SQL:</a> SELECT fldBuilding, SUM(fldNumStudents) AS totalStudents , fldDays FROM tblSections WHERE fldDays LIKE "%W%" GROUP BY fldBuilding ORDER BY totalStudents DESC;</li>
        <li>q10. <a href="q10.php">SQL:</a> SELECT fldBuilding, SUM(fldNumStudents) AS totalSudents, fldDays FROM tblSections WHERE fldDays LIKE "%F%" GROUP BY fldBuilding ORDER BY fldBuilding;</li>
    </ul>
</body>
<?php
include "footer.php";
?>
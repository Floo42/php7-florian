<?php
function paginationClassement($page){

//Page 1
if ($page==1){
print "
<li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type'] . ">&laquo;</a></li>
<li class=\"page-item active\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". $page .">". "1" . "</a></li>
<li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". ($page+1) .">". "2" . "</a></li>
<li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type']. "&page=". ($page+2) .">". "3" . "</a></li>
<li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type']. "&page=". ($page+(100-$page)) .">". "&raquo" . "</a></li>
";
}

//Page 100
elseif ($page==100){
    print "
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type'] . ">&laquo;</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". ($page-1) .">". "99" . "</a></li>
    <li class=\"page-item active\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". ($page) .">". "100" . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type']. "&page=". ($page+(100-$page)) .">". "&raquo" . "</a></li>
    ";
}

//Page 3 et +
else{
    print "
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type'] . ">&laquo;</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". ($page-1) .">". ($page-1) . "</a></li>
    <li class=\"page-item active\"><a class=\"page-link\" href=" . "classement.php".'?type='.$_GET['type']. "&page=". ($page) .">". ($page) . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type']. "&page=". ($page+1) .">". ($page+1) . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "classement.php" .'?type='.$_GET['type']. "&page=". ($page+(100-$page)) .">". "&raquo" . "</a></li>
    ";
}

}
 ?>

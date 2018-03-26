<?php

function paginationResults($page, $nbresults){


    if ($page<1){
        $page=1;
    }
    if ($page>100){
        $page=100;
    }

$pagesMax=ceil($nbresults/10);

    if ($page==1 && $pagesMax >= 3){
    print "
    <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search'] . "&page=1" . ">&laquo;</a></li>
    <li class=\"page-item active\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". $page .">". "1" . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page+1) .">". "2" . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+2) .">". "3" . "</a></li>
    <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+($pagesMax-$page)) .">". "&raquo" . "</a></li>
    ";
    }

    elseif ($page==1 && $pagesMax == 2){
        print "
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search'] . "&page=1" . ">&laquo;</a></li>
        <li class=\"page-item active\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". $page .">". "1" . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page+1) .">". "2" . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+($pagesMax-$page)) .">". "&raquo" . "</a></li>
        ";
    }

    elseif ($page==1 && $pagesMax == 1){
        print "
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search'] . "&page=1" . ">&laquo;</a></li>
        <li class=\"page-item active\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". $page .">". "1" . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+($pagesMax-$page)) .">". "&raquo" . "</a></li>
        ";
    }

    //Page max
    elseif ($page==$pagesMax){
        print "
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search'] . "&page=1" . ">&laquo;</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page-1) .">". ($pagesMax-1) . "</a></li>
        <li class=\"page-item active\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page) .">". $pagesMax . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+($pagesMax-$page)) .">". "&raquo" . "</a></li>
        ";
    }
    elseif($page==-1){

        }

    //Page 3 et +
    else {
        print "
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search'] . "&page=1" . ">&laquo;</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page-1) .">". ($page-1) . "</a></li>
        <li class=\"page-item active\"><a class=\"page-link\" href=" . "recherche.php".'?search='.$_GET['search']. "&page=". ($page) .">". ($page) . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+1) .">". ($page+1) . "</a></li>
        <li class=\"page-item\"><a class=\"page-link\" href=" . "recherche.php" .'?search='.$_GET['search']. "&page=". ($page+($pagesMax-$page)) .">". "&raquo" . "</a></li>
        ";
    }

}

 ?>

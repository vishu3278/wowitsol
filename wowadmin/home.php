<?php  include_once "header.php"; ?>
<?php 

  switch ($_GET['page']){
    case "careeradd":
      include "career-add.php";
      break;  

    case "careeredit":
      include "career-edit.php";
      break;

    case "career":
        include "career.php";
        break;

    case "careerdelete":
            include "career-delete.php";
          break;

    case "culture":
        include "culture.php";
        break;

    case "cultureedit":
        include "culture-edit.php";
        break;

    case "cultureadd":
        include "culture-add.php";
        break;

    case "culturedelete":
        include "culture-delete.php";
        break;

    case "news":
        include "news.php";
        break;

    case "addnews":
        include "news-add.php";
        break;

    case "newsdelete":
        include "news-delete.php";
        break;

    default:
      include "dashboard.php" ;
      break;

    }

  ?>
<?php include ('footer.php'); ?>
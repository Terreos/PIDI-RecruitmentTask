<?php
    $class_db_file = 'db.php';
    if (file_exists($class_db_file)):
      require_once($class_db_file);
    else:
      echo 'Klasa db() nie została odnaleziona';
      exit;
    endif;
    
    $db = new db();

    function insert_employee($database, $firstname, $surname, $branch, $station, $salary, $img){
        if ($database->connect()):
            $sql = "INSERT INTO employees VALUES ('$firstname', '$surname', '$branch', '$station', '$salary', '$img');";
            if ($database->query($sql)):
              return true;
            else:
              echo 'Błąd zapisu bazy danych: ' . $database->error;
               return false;
            endif;
            $database->close();
          else:
            echo 'Błąd połączenia z bazą danych: ' . $database->error;
            return false;
          endif;
        }

    function select_all($db){
      if ($db->connect()):
        $sql = "SELECT * FROM `employees`;";
        if ($results = $db->select($sql)):
          $returned = array();
          while ($row = mysql_fetch_array($results)):
            $returned[] = array(
              'firstname'  =>  $row['firstname'],
              'surname'  =>  $row['surname'],
              'branch'  =>  $row['branch'],
              'station'  =>  $row['station'],
              'salary'  =>  $row['salary'],
              'img'  =>  $row['img']
             );
          endwhile;         
          return $returned;
        else:
          echo 'Błąd pobrania danych mysql: ' . $db->error;
          return false;
        endif; 
        $db->close();     
      else:
        echo 'Błąd połączenia mysql: ' . $db->error;
        return false;
      endif;
    }
    
    function display($db){
        $selected_all = select_all($db);
        echo '<ul>';
            foreach ($selected_all[0] as $key => $value) {
                echo '<li><h3>'.$key.'</h3></li>';
            }
        echo '</ul>';
        for ($i = 0; $i < (count($selected_all)); $i++) {
            echo '<ul>';
                foreach ($selected_all[$i] as $key => $value) {
                    if ($key != 'img'){
                        echo '<li>'.$value.'</li>';
                    } else {
                        echo '<li width=auto height=auto><img src=../'.$selected_all[$i]['img'].'></li>';                        
                    }
                }
            echo '</ul>';
            }
    }
?>
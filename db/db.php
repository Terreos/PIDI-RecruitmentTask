<?php
class db {
 
  // deklarujemy zmienne naszej klasy
  // na początek zmienny prywatne, niedostępne poza naszą klasą
  private $db_host = 'localhost:3306/'; // podstawiamy host bazy danych
  private $db_name = 'company'; // podajemy nazwę bazy danych
  private $db_user = 'root'; // nazwa użytkownika z uprawnieniami odczytu i zapisu
  private $db_passw = ''; // podajemy hasło dla użytkownika;
 
  // zmienne publiczne - dostępne poza klasą 
  public $connection; // połączenie
  public $error; // ew. błąd zwrócony przez bazę danych
 
  public function connect(){
 
    if ($connection = mysql_connect($this->db_host, $this->db_user, $this->db_passw)) {
      if(mysql_select_db($this->db_name, $connection)) {
        $this->connection = $connection;
        return true;
      } else {
        $this->error = mysql_error();
        return false;
      }
    } else {
      $this->error = mysql_error();
      return false;
    }
 
  } // eof connect()
 
  public function select($sql) {
 
    if ($this->connection) {
      mysql_set_charset('utf8', $this->connection);
      if (isset($sql) && $sql != '') {
        if($result = mysql_query($sql)) {
          return $result;
        } else {
          $this->error = mysql_error();
          return false;  
        } 
      } else {
        $this->error = 'Błąd zapytania SQL'; 
        return false;
      }
    } else {
      $this->error = 'Brak połączenia z bazą danych';
      return false;  
    }
 
  } // eof select()
 
  public function query($sql){
 
    if (isset($sql) && $sql != '') {
      if ($this->connection) {
        mysql_set_charset('utf8', $this->connection);
        if (mysql_query($sql)){
          return true;
        } else {
          $this->error = mysql_error();
          return false;
        }    
      } else {
        $this->error = 'Brak połączenia z bazą danych';
        return false;
      } 
    } else {
      $this->error = 'Błąd zapytania SQL';
      return false;
    } 
 
  } // eof query()
 
  public function close(){
    if ($this->connection){
      if (mysql_close($this->connection)){
        return true;
      } else {
        $this->error = mysql_error();
        return false;
      }
    } else {
      $this->error = 'Brak aktywnego połączenia';
      return false;
    }
 
  } // eof close()
 
}
?>
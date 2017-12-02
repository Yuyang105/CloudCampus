 <?php
 /*
  * filename：Mysql.Class.php
  */
  class mysql {
  	private $db_host;				// database host
    private $db_user;				// database user
    private $db_pwd;				// user password
    private $db_database;			// database name
    private $conn; 					// database connector
    private $result;				// flag for query execution
    private $sql; 					// SQL query
    private $row; 					// return rows
    private $coding; 				// database encoding
    private $bulletin = true; 		// whether use error log
    private $show_error = false;	// testing phase, show all errors; may cause instability, default close
    private $is_error = false;		// immediate exit once error occurs; default close for a better user experience

    // Constructor
    public function __construct($db_host, $db_user, $db_pwd, $db_database, $conn) {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pwd = $db_pwd;
        $this->db_database = $db_database;
        $this->conn = $conn;
        $this->connect();
    }

    // Database connection
    public function connect() {
        if ($this->conn == "pconn") {
            // persistent connection
            $this->conn = mysql_pconnect($this->db_host, $this->db_user, $this->db_pwd);
        } else {
            // non-persistent connection
            $this->conn = mysql_connect($this->db_host, $this->db_user, $this->db_pwd);
        }

        if (!mysql_select_db($this->db_database, $this->conn)) {
            if ($this->show_error) {
                $this->show_error("Database is not available:", $this->db_database);
            }
        }
    }
     
    // Execute queries, such as search, insert, update, delete 
    public function query($sql) {
        if ($sql == "") {
            $this->show_error("Wrong SQL query: ", "The SQL query is empty");
        }
        $this->sql = $sql;

        $result = mysql_query($this->sql, $this->conn);

        if (!$result) {
            // Using in debug phase, print out details when query is wrong
            if ($this->show_error) {
                $this->show_error("Wrong SQL query: ", $this->sql);
            }
        } else {
            $this->result = $result;
        }
        return $this->result;
    }

    // Pop up dialog box displays prompts
	public function show_msg($url,$show="Succeed"){
		$msg='<script>alert("'.$show.'");window.location="'.$url.'"</script>;
	If not automatically redirecting. <a href="'.$url.'">Please click here</a>';
	echo $msg;
	exit();
	}
	
	// Create new database
	public function create_database($database_name) {
        $database = $database_name;
        $sqlDatabase = 'create database ' . $database;
        $this->query($sqlDatabase);
    }

    
    // Show database
    public function show_databases() {
        $this->query("show databases");
        echo "Now we have " . $amount = $this->db_num_rows($rs) . " databases";
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            echo "$i $row[Database]";
            echo "<br />";
            $i++;
        }
    }

    // Return all databases' name in a array
    public function databases() {
        $rsPtr = mysql_list_dbs($this->conn);
        $i = 0;
        $cnt = mysql_num_rows($rsPtr);
        while ($i < $cnt) {
            $rs[] = mysql_db_name($rsPtr, $i);
            $i++;
        }
        return $rs;
    }

    // Show all tables
    public function show_tables($database_name) {
        $this->query("show tables");
        echo "Now we have: " . $amount = $this->db_num_rows($rs) . " databases";
        echo "<br />";
        $i = 1;
        while ($row = $this->fetch_array($rs)) {
            $columnName = "Tables_in_" . $database_name;
            echo "$i $row[$columnName]";
            echo "<br />";
            $i++;
        }
    }

    public function mysql_result_li() {
        return mysql_result($str);
    }

    public function fetch_array() {
        return mysql_fetch_array($this->result);
    }

    public function fetch_assoc() {
        return mysql_fetch_assoc($this->result);
    }

    public function fetch_row() {
        return mysql_fetch_row($this->result);
    }

    public function fetch_Object() {
        return mysql_fetch_object($this->result);
    }

    public function findall($table) {
        $this->query("SELECT * FROM $table");
    }

    public function select($table, $columnName = "*", $condition = '',$limit,$debug = '',$substr,$date) {
        $condition = $condition ? ' Where newstypeid=' . $condition : NULL;
        if ($debug) {
            $sql = "SELECT $columnName FROM $table $condition order by newsid desc limit 0,".$limit;
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			echo "<tr class='line'>
              <td width='20' height='25' align='center'>
                <img src='image/xxcms_icon.jpg' width='4' height='4'/></td>
              <td align='left'>
			  <a href='news/".$rows["newspath"]."' title=".$rows["newstitle"]." target='_blank'>".substr($rows["newstitle"],0,$substr)."</a></td>";
			  if($date){
              echo "<td width='91' align='center'>".substr($rows["newstime"],0,10)."</td></tr>";
				}
			}
        } else {
            $this->query("SELECT $columnName FROM $table $condition");
        }
    }
    
    // System setting
    public function ly_system($table,$sort){
            $sql = "SELECT * FROM $table";
			$rs = $this->query($sql);
			while($rows=mysql_fetch_assoc($rs))
			{
			
			switch($sort){
			case 1:
				echo $rows["name"];			// Web name
				break;
			case 2:
				echo $rows["title"];		// Web title
				break;
			case 3:
				echo $rows["keywords"];		// Keywords
				break;
			case 4:
				echo $rows["smalltext"];	// Web description
				break;	
			case 5:
				echo $rows["url"];			// Web url
				break;	
			case 6:
				return $rows["page"];		// Page
				break;
			case 7:
				return $rows["is_audit"];	// Content audition
				break;
			case 8:
				return $rows["is_html"];	// Filter html
				break;
			default :
				echo $rows["copyright"];	// Copyright
		}
			}
    }
    
    // delete
    public function delete($table, $condition, $url = '') {
        if ($this->query("DELETE FROM $table WHERE $condition")) {

            if (!empty ($url))
                $this->show_msg($url, 'Delete successful!');
        }
    }

    // insert
    public function insert($table, $columnName, $value, $url = '') {
        if ($this->query("INSERT INTO $table ($columnName) VALUES ($value)")) {
            if (!empty ($url))
                $this->show_msg($url, 'Insert successful!');
        }
    }

    // update
    public function update($table, $mod_content, $condition, $url = '') {
        
        if ($this->query("UPDATE $table SET $mod_content WHERE $condition")) {
            if (!empty ($url))
                $this->show_msg($url);
        }
    }

    // get id of last insert entry
    public function insert_id() {
        return mysql_insert_id();
    }

    // seek
    public function db_data_seek($id) {
        if ($id > 0) {
            $id = $id -1;
        }
        if (!@ mysql_data_seek($this->result, $id)) {
            $this->show_error("Wrong SQL query: ", "the SQL statement is empty");
        }
        return $this->result;
    }

    // count select result num
    public function db_num_rows() {
        if ($this->result == null) {
            if ($this->show_error) {
                $this->show_error("Wrong SQL query: ", "the SQL statement is empty");
            }
        } else {
            return mysql_num_rows($this->result);
        }
    }

    // According to insert, update, delete result
    public function db_affected_rows() {
        return mysql_affected_rows();
    }

    // free result
    public function free() {
        @ mysql_free_result($this->result);
    }

    // select database
    public function select_db($db_database) {
        return mysql_select_db($db_database);
    }

    public function num_fields($table_name) {
        //return mysql_num_fields($this->result);
        $this->query("select * from $table_name");
        echo "<br />";
        echo "fields number" . $total = mysql_num_fields($this->result);
        echo "<pre>";
        for ($i = 0; $i < $total; $i++) {
            print_r(mysql_fetch_field($this->result, $i));
        }
        echo "</pre>";
        echo "<br />";
    }

    // get MySQL Server info
    public function mysql_server($num = '') {
        switch ($num) {
            case 1 :
                return mysql_get_server_info(); 	// MySQL server info
                break;

            case 2 :
                return mysql_get_host_info(); 		// MySQL server host info
                break;

            case 3 :
                return mysql_get_client_info(); 	// MySQL server client info
                break;

            case 4 :
                return mysql_get_proto_info(); 		// MySQL server protocol info
                break;

            default :
                return mysql_get_client_info(); 	// default get client info
        }
    }

    // Close database, garbage collection
    public function __destruct() {
        if (!empty ($this->result)) {
            $this->free();
        }
        mysql_close($this->conn);
    } //function __destruct();

}?>
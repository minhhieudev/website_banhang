<?php 
  class DB
  {
      // Biến lưu trữ kết nối
      private $con;
      // Hàm Kết Nối
      public function __construct(){
          $this->connect();
      }
function connect()
{
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$this->con){
        // Kết nối
        $this->con = mysqli_connect(DB_HOST , DB_USER , DB_PASS , DB_NAME) or die ('Lỗi kết nối');
        // Xử lý truy vấn UTF8 để tránh lỗi font
        mysqli_query($this->con, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
    }
}

// Hàm Ngắt Kết Nối
function dis_connect(){
    // Nếu đang kết nối thì ngắt
    if ($this->con){
        mysqli_close($this->con);
    }
}

// Hàm Insert
function insert($table, $data)
{
   
    // Lưu trữ danh sách field
    $field_list = '';
    // Lưu trữ danh sách giá trị tương ứng với field
    $value_list = '';
 
    // Lặp qua data
    foreach ($data as $key => $value){
        $field_list .= ",$key";
        $value_list .= ",'".mysql_escape_string($value)."'";
    }
 
    // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
    $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
    return mysqli_query($this->con, $sql);
}

// Hàm Update
function update($table, $data, $where)
{
 
    $sql = '';
    // Lặp qua data
    foreach ($data as $key => $value){
        $sql .= "$key = '".mysql_escape_string($value)."',";
    }
 
    // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
    $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
 
    return mysqli_query($this->con, $sql);
}
// query
function qr($sql)
{
     $rs=mysqli_query($this->con, $sql);
     return $rs;
}
// Hàm delete
function remove($table, $where){
  
    // Delete
    $sql = "DELETE FROM $table WHERE $where";
    return mysqli_query($this->con, $sql);
}

// Hàm lấy danh sách
function get_list($sql)
{
    $result = mysqli_query($this->con, $sql);
 
    if (!$result){
        die ('Câu truy vấn bị sai');
    }
    $return = array();
    // Lặp qua kết quả để đưa vào mảng
    while ($row = mysqli_fetch_array($result)){
        $return[] = $row;
    }
 
    // Xóa kết quả khỏi bộ nhớ
   
    mysqli_free_result($result);
 
    return $return;
}

// Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
function get_row($sql)
{
    $result = mysqli_query($this->con, $sql);
    if (!$result){
        echo $sql;
        die ('Câu truy vấn bị sai');
    }
    $row = mysqli_fetch_array($result);
    // Xóa kết quả khỏi bộ nhớ
    mysqli_free_result($result);
 
    if ($row){
        return $row;
    }
    return false;
}
  }  
?>
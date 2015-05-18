<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class mysqlcon{
    
    const HOST="localhost";
    const PORT="3306";
    const CHARSET="UTF8";
    const DBNAME="iocoocc_fcxy";
    const USER="iocoocc";
    const PSD="iocoocc";
   
    private static $db_con=null;
    
     //--------------------------------------------------------------
     /*
     * @param $dbname //数据库名称
     * @param $user   //数据库用户名
     * @param $psd    // 数据库用户密码
     * 
     * @param __construct 构造函数，对象创建后直接执行。
     */
    function __construct(){
        try {
            $dsn="mysql:host=".self::HOST .";port=".self::PORT .";dbname=".self::DBNAME.";charset=".self::CHARSET;
            self::$db_con= new  PDO ( $dsn ,  self::USER ,  self::PSD );        
             } catch ( PDOException $e ) {
             print  "Error!: "  .  $e -> getMessage () .  "<br/>" ;
            die();
         }
        
    }
    //--------------------------------------------------------------1
    
    /*
     * @param db_beginTransaction 启动一个事物
     */
    
    function  db_beginTransaction(){
        return self::$db_con->beginTransaction();
    }
    
    //--------------------------------------------------------------2
    /*
     * @param db_commit 提交一个事物
     */
    function  db_commit(){
        return self::$db_con->commit();
    }
    //--------------------------------------------------------------3
     /*
     * @param db_inTransaction 检查是否在一个事务内
     */
    function  db_inTransaction (){
        return self::$db_con->inTransaction ();
    }
    //--------------------------------------------------------------4
    /*
     * @param db_errorCode  获取跟数据库句柄上一次操作相关的 SQLSTATE
     *
     */
     function  db_errorCode(){
        return self::$db_con->errorCode();
    }
    
    //--------------------------------------------------------------5
     /*
     * @param db_errorInfo   获取跟最后一次数据库操作相关的 扩展错误信息
     *
     */
      function  db_errorInfo(){
        return self::$db_con->errorInfo();
    }
    //--------------------------------------------------------------6
    /*
     * @param db_quote 转义输入的字符
     *
     */
    function db_quote( $str ){
        return self::$db_con->quote($str);   
       
    }
    //--------------------------------------------------------------7
     /*
     * @param db_exec 执行一条 SQL 语句，并返回受影响的行数 
     */
    function db_exec($str){
        return self::$db_con ->exec($str);
    }
    //--------------------------------------------------------------8
    /*
     * @param db_query 执行一条SQL语句,返回一个结果集作为PDOStatement对象
     */
    function  db_query($str){
        return self::$db_con->query($str);
    }
    //--------------------------------------------------------------9
     /*
      * @param db_rollback 回滚事物
      */     
    function  db_rollback($str){
        return self::$db_con->rollBack($str);
    }
    //--------------------------------------------------------------10
    /*
     * @param db_prepare 预处理一个语句执行并返回一个statement 对象
     */
    function  db_prepare($str){
        return self::$db_con->prepare($str);
    }
    //--------------------------------------------------------------11
    /*
     * @param db_getAttribute 取回一个数据库连接的属性
     * 
     * PDO::ATTR_* 常量中的一个。下列为应用到数据库连接中的常量： 
     * 1.PDO::ATTR_AUTOCOMMIT 
     * 2. PDO::ATTR_CASE 
     * 3. PDO::ATTR_CLIENT_VERSION 
     * 4. PDO::ATTR_CONNECTION_STATUS 
     * 5. PDO::ATTR_DRIVER_NAME 
     * 6. PDO::ATTR_ERRMODE 
     * 7. PDO::ATTR_ORACLE_NULLS 
     * 8. PDO::ATTR_PERSISTENT 
     * 9. PDO::ATTR_PREFETCH 
     * 10. PDO::ATTR_SERVER_INFO 
     * 11. PDO::ATTR_SERVER_VERSION 
     * 12. PDO::ATTR_TIMEOUT 
     */
    function  db_getAttribute($str){
        return self::$db_con->getAttribute($str);
    }
    //--------------------------------------------------------------12
    /*
     * @param db_getAvailableDrivers 返回一个可用驱动的数组
     */
      function  db_getAvailableDrivers($str){
        return self::$db_con->getAvailableDrivers($str);
    }

    //--------------------------------------------------------------13
    /*
     * @param db_lastInsertId  返回最后插入行的ID或序列值
     */
     function  db_lastInsertId($str){
        return self::$db_con->lastInsertId($str );
    }
    //--------------------------------------------------------------14
     /*
     * @param db_setAttribute 设置属性
      * 
      * 设置数据库句柄属性。下面列出了一些可用的通用属性；有些驱动可能使用另外的特定属性。 
        1. PDO::ATTR_CASE：强制列名为指定的大小写。 
            1. PDO::CASE_LOWER：强制列名小写。 
            2. PDO::CASE_NATURAL：保留数据库驱动返回的列名。 
            3. PDO::CASE_UPPER：强制列名大写。 
        2. PDO::ATTR_ERRMODE：错误报告。 
            1. PDO::ERRMODE_SILENT： 仅设置错误代码。
            2. PDO::ERRMODE_WARNING: 引发 E_WARNING 错误
            3. PDO::ERRMODE_EXCEPTION: 抛出 exceptions 异常。
        3. PDO::ATTR_ORACLE_NULLS （在所有驱动中都可用，不仅限于Oracle）： 转换 NULL 和空字符串。 
            1. PDO::NULL_NATURAL: 不转换。
            2. PDO::NULL_EMPTY_STRING： 将空字符串转换成 NULL 。
            3. PDO::NULL_TO_STRING: 将 NULL 转换成空字符串。
            4. PDO::ATTR_STRINGIFY_FETCHES: 提取的时候将数值转换为字符串。 Requires bool . 
            5. PDO::ATTR_STATEMENT_CLASS： 设置从PDOStatement派生的用户提供的语句类。 不能用于持久的PDO实例。 需要 array(string 类名, array(mixed 构造函数的参数))。 
            6. PDO::ATTR_TIMEOUT： 指定超时的秒数。并非所有驱动都支持此选项，这意味着驱动和驱动之间可能会有差异。比如，SQLite等待的时间达到此值后就放弃获取可写锁，但其他驱动可能会将此值解释为一个连接或读取超时的间隔。 需要 int  类型。 
            7. PDO::ATTR_AUTOCOMMIT （在OCI，Firebird 以及 MySQL中可用）： 是否自动提交每个单独的语句。 
            8. PDO::ATTR_EMULATE_PREPARES 启用或禁用预处理语句的模拟。 有些驱动不支持或有限度地支持本地预处理。使用此设置强制PDO总是模拟预处理语句（如果为 TRUE  ），或试着使用本地预处理语句（如果为 FALSE ）。如果驱动不能成功预处理当前查询，它将总是回到模拟预处理语句上。 需要 bool  类型。 
            9. PDO::MYSQL_ATTR_USE_BUFFERED_QUERY （在MySQL中可用）： 使用缓冲查询。 
            10. PDO::ATTR_DEFAULT_FETCH_MODE： 设置默认的提取模式。关于模式的说明可以在 PDOStatement::fetch()  文档找到。 

     */
     function  db_setAttribute ($attribute ,$value ){
        return self::$db_con->setAttribute($attribute ,$value );
    }
    //--------------------------------------------------------------15
    
    /*
     * @param __destruct 析构函数，对象关闭前执行
     */
    function __destruct() {
        
    }
    //--------------------------------------------------------------16
    
    
}



/*


try {
   
   $name="name123";
   $addr="aaasss";
   // $sql="INSERT INTO hs_frienlydlink_t (link_name,link_addr)VALUES( :name,:addr)";
   //$sql1="INSERT INTO hs_frienlydlink_t(link_name,link_addr) VALUES( ?,?)";
   $sql2="SELECT * FROM hs_frienlydlink_t";
   $db=new mysqlcon(HutShow, HutShow, HutShow);
   $stt= $db->db_prepare($sql2);
  // $stt->execute(array(":name"=>"name333",":addr"=>"addr333"));
  // $stt->bindParam(1,$name,  PDO::PARAM_STR);
 //  $stt->bindParam(2,$addr,  PDO::PARAM_STR);
   $stt->execute();
    $result=$stt->fetchall(PDO::FETCH_ASSOC);
    print_r($result)."<br>";

   
   // $db->db_exec("INSERT INTO hs_frienlydlink_t (link_name,link_addr)VALUES( 'name3','addr3')");
   // $db->db_insert($array);
    
} catch (Exception $ex) {
     print  "Error!: "  .  $ex -> getMessage () .  "<br/>" ;
}

*/




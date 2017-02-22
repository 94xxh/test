<?php
/**
 * Created by FuDuJi.
 * User: ChenGuanRong
 * Date: 16-8-3
 * Time: 上午10:13
 * 表处理函数
 */

/**
 * 列表数据读取方法(D方法)
 * @param   $table      string  表
 * @param   $n          int     数量
 * @param   $p          int     页数
 * @param   $relation   bool    是否关联
 * @param   $where      string  条件 (数组形式)
 * @param   $order      string  排序
 * @param   $field      string  字段
 * @param   $all        bool    是否读取全部,不分数量与页数
 *
 * @return  $array=>Count 数量,$array=>Result 资源列表
 **/
function getTableList($table,$n=10,$p=1,$relation=false,$where='status=1',$order='id desc',$field='*',$all=false){
    $Table=D($table);
    $result['Count']=$Table->where($where)->count();
    if($all){
        $result['Result']=$Table->relation($relation)->field($field)->where($where)->order($order)->select();
    }else{
        $result['Result']=$Table->relation($relation)->field($field)->where($where)->limit($n)->page($p)->order($order)->select();
    }
    return $result;
}

/**
 * 列表数据指定ID方法(D方法)
 * @param   $table      string  表
 * @param   $id         int     数据id
 * @param   $relation   bool    是否关联
 * @param   $field      string  字段
 *
 *
 * @return  $array=>Result 资源内容(无数组)
 **/
function getTableId($table,$id,$relation=false,$field='*'){
    $Table=D($table);
    $result['Result']=$Table->relation($relation)->field($field)->find($id);
    return $result;
}

/**
 * 列表数据读取方法(M方法)
 * @param   $table      string  表
 * @param   $n          int     数量
 * @param   $p          int     页数
 * @param   $where      string  条件 (数组形式)
 * @param   $order      string  排序
 * @param   $field      string  字段
 * @param   $all        bool    是否读取全部,不分数量与页数
 *
 * @return  $array=>Count 数量,$array=>Result 资源列表
 **/
function getTableList_M($table,$n=10,$p=1,$where='status=1',$order='id desc',$field='*',$all=false){
    $Table=M($table);
    $result['Count']=$Table->where($where)->count();
    if($all){
        $result['Result']=$Table->field($field)->where($where)->order($order)->select();
    }else{
        $result['Result']=$Table->field($field)->where($where)->limit($n)->page($p)->order($order)->select();
    }
    return $result;
}

/**
 * 列表数据指定ID方法(M方法)
 * @param   $table      string  表
 * @param   $id         int     数据id
 * @param   $field      string  字段
 *
 * @return  $array=>Result 资源内容(无数组)
 **/
function getTableId_M($table,$id,$field='*'){
    $Table=M($table);
    $result['Result']=$Table->field($field)->find($id);
    return $result;
}

/**
 * 插入数据方法
 * @param   string  $table  插入数据的表
 * @param   array   $array  插入数据(数组) id=1
 * @param   array   $rule   验证规则
 * @param   int     $type   默认等于0 不判断是否唯一 等于1 判断是否唯一,与field同时使用
 * @param   string  $field  判断唯一值的字段 $type=1 才启用
 *
 * @return   array   返回一个数组
 **/
function addTableData($table,$array=array(),$rule="",$type=0,$field='email'){
    $Table=M($table);

    if($type==1){

        $where[$field]=$array[$field];

        $result=$Table->where($where)->select();

        if(!count($result)>0){
            $result=$Table->add($array);
        }else{
            $result='unique';
        }


    }else{
        $result=$Table->add($array);
    }



    return $result;

}

/**
 * 批量插入数据方法   (前台尽量少用此方法)
 * @param   string $table 插入数据的表
 * @param   array $array 插入数据(数组) id=1  可以是二维
 *
 * @return   bool|string   返回一个数组

 */
function addTableArrayData($table,$array=array()){
    $Table=M($table);
    //示例
//    $dataList[] = array('name'=>'thinkphp','email'=>'thinkphp@gamil.com');
//    $dataList[] = array('name'=>'onethink','email'=>'onethink@gamil.com');
    $result=$Table->addAll($array);

    return $result;
}

/**
 * 更新数据方法(根据主键来更新)
 * @param   string  $table  操作的表
 * @param   array   $array  要更新的数据 (要包含主键,比如id)
 *
 * @return  string  save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/
function updateTableData($table,$array=array()){
    $Table = M($table); // 实例化User对象

    $result = $Table->save($array); // 根据条件保存修改的数据

    return $result;
}

/**
 * 更新数据方法 (根据条件来更新)
 * @param   string        $table  操作的表
 * @param   array         $array  更新的数据(数组)
 * @param   string        $where  更改数据的条件
 *
 * @return  string|bool   save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/
function updateTableDataWhere($table,$array=array(),$where){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->data($array)->save(); // 根据条件保存修改的数据

    return $result;
}
/**
 * 更新数据方法(限制字段,不管其他赋值多少,只更新某个指定字段.)
 * @param   string      $table  操作的表
 * @param   array       $array  更新的数据(数组)
 * @param   string      $where  按条件
 * @param   string      $field  指定的字段
 *
 * @return  string|bool save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 *
 **/

function updateTableDataWhereField($table,$array=array(),$where,$field){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->field($field)->save($array); // 根据条件保存修改的数据

    return $result;
}
/**
 * 更新数据方法(指定字段,并且使用过滤方法)
 * @param   string      $table  操作的表
 * @param   array       $array  更新的数据
 * @param   string      $where  按条件
 * @param   string      $field  字段
 * @param   string      $filter 过滤方法 默认strip_tags
 *
 * @return  string|bool save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/
function updateTableDataWhereFieldFilter($table,$array=array(),$where,$field,$filter="strip_tags"){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->field($field)->filter($filter)->save($array); // 根据条件保存修改的数据

    return $result;
}
/**
 * 更新数据的方法  (只更新个别字段值)
 * @param   string      $table  操作的表
 * @param   array       $array  更新的数据
 * @param   string      $where  按条件
 *
 * @return  string       save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/

function updateTableDataWhereSetField($table,$array=array(),$where){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->setField($array);
    //$Table->_sql();
    return $result;
}

/**
 * 更新数据方法_统计方法_加 (对某个字段进行(加)的操作,并且支持延迟更新)
 * @param   string      $table  操作的表
 * @param   string      $where  更新的条件
 * @param   string      $value  增加的值
 * @param   string      $field  指定的字段
 * @param   int         $delay  延迟时间 默认为0
 *
 * @return  string|bool save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/
function updateTableDataWhereSetInc($table,$where,$field,$value,$delay=0){

    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->setInc($field,$value,$delay);

    return $result;
}

/**
 * 更新数据方法_统计方法_减 (对某个字段进行(减)操作,并且支持延迟更新)
 * @param   string      $table  操作的表
 * @param   string      $where  更新的条件
 * @param   string      $value  增加的值
 * @param   string      $field  指定的字段
 * @param   int         $delay  延迟时间 默认为0
 *
 * @return  string|bool save方法的返回值是影响的记录数，如果返回false则表示更新出错，因此一定要用恒等来判断是否更新失败。 如result!==false
 **/
function updateTableDataWhereSetDec($table,$where,$field,$value,$delay=0){

    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->setDec($field,$value,$delay);

    return $result;
}

/**
 * 删除指定主键的记录
 * @param   string      $table  操作的表
 * @param   string      $value  指定的主键值
 *
 * @return  bool
 **/
function deleteTableDataId($table,$value){
    $Table = M($table); // 实例化User对象

    $result=$Table->delete($value);

    return $result;
}

/**
 * 删除指定的条件的记录
 * @param   string      $table  操作的表
 * @param   string      $where  指定的条件
 *
 * @return  bool
 **/
function deleteTableDataWhere($table,$where){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->delete();

    return $result;
}
/**
 * 删除指定的条件的记录,并且按指定的排序
 * @param   string      $table  操作的表
 * @param   string      $where  指定的条件
 * @param   string      $order  指定的排序
 *
 * @return  bool
 **/
function deleteTableDataWhereOrder($table,$where,$order="id"){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->order($order)->delete();

    return $result;
}

/**
 * 删除指定的条件的记录,并且按指定的排序,并且指定条数
 * @param   string      $table  操作的表
 * @param   string      $where  指定的条件
 * @param   string      $order  指定的排序
 * @param   string      $limit  指定数量
 *
 * @return  bool
 **/
function deleteTableDataWhereOrderLimit($table,$where,$order="id",$limit){
    $Table = M($table); // 实例化User对象

    $result=$Table->where($where)->order($order)->limit($limit)->delete();

    return $result;
}

/**
 * 内置原生执行sql语句方法 (Query) 只进行查询操作
 * @param   string      $sql    执行语句
 *
 * @return  string
 * query方法用于执行SQL查询操作，如果数据非法或者查询错误则返回false，否则返回查询结果数据集（同select方法）。
 **/
function sqlQuery($sql){
    $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
    $result=$Model->query($sql);

    return $result;
}

/**
 * 内置原生执行sql语句方法 (Execute)  进行添加,更新   前台尽量少用字符串方式
 * @param   string      $sql    执行语句
 *
 * @return  string
 *
 * execute用于更新和写入数据的sql操作，如果数据非法或者查询错误则返回false ，否则返回影响的记录数。
 *
 *
 **/
function sqlExecute($sql){
    //    $Model->execute("update __PREFIX__user set name='thinkPHP' where status=1");
    // 3.2.2版本以上还可以直接使用
    //    $Model->execute("update __USER__ set name='thinkPHP' where status=1");

    $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
    $result=$Model->execute($sql);

    return $result;
}

/**
 * getBy动态查询 根据字段的值查询数据     前台尽量少用字符串方式
 *
 * $user = $User->getByName('liu21st');
 *
 **/

/**
 * getFieldBy动态查询
 *
 * $userId = $User->getFieldByName('liu21st','id');
 **/

/**
 * 统计数据方法 获取结果
 * @param   string      $table      操作的表
 * @param   string      $type       选择操作的类型
 * @param   string      $field      操作的字段
 * @param   string|int  $where      操作的条件 默认不加条件
 *
 * @return  string
 *
 **/
function sqlStatistics($table,$type='Total',$field,$where=0){
    $Table = M($table); // 实例化User对象

    switch ($type){
        //获取总体数量
        case "Total":
            if($where==0){
                $result = $Table->count();
            }else{
                $result = $Table->where($where)->count();
            }

            break;

        //根据字段统计
        case "Count":
            if($where==0){
                $result = $Table->count($field);
            }else{

                $result = $Table->where($where)->count($field);
            }
            break;

        //获取用户的最大积分：
        case "Max":
            if($where==0){
                $result = $Table->max($field);
            }else{
                $result = $Table->where($where)->max($field);
            }

            break;

        //获取积分大于0的用户的最小积分：
        case "Min":
            if($where==0){
                $result = $Table->min($field);
            }else{
                $result = $Table->where($where)->min($field);
            }
            break;

        //获取用户的平均积分：
        case "Avg":
            if($where==0){
                $result = $Table->avg($field);
            }else{
                $result = $Table->where($where)->avg($field);
            }
            break;

        //统计用户的总成绩：
        case "Sum":
            if($where==0){
                $result = $Table->sum($field);
            }else{
                $result = $Table->where($where)->sum($field);
            }
            break;


    }

    return $result;



}


function addLog($table,$tid,$type,$user_id){
    $post['table']=$table;
    $post['tid']=$tid;
    $post['type']=$type;
    $post['user_id']=$user_id;
    $post['ip']=get_client_ip();

    if($table!=="" && $tid!=="" && $type!=="" && $user_id!==""){
        $status=addTableData('Log',$post);

        if($status){
            return true;
        }else{
            return false;
        }

    }else{
        return "No Null";
    }


}
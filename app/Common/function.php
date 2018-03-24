<?php

//返回公共函数
function ajaxReturn($status,$message,$data=array()){
    $result = array(
        'status' => $status,
        'message' => $message,
        'data' => $data
    );
    return json_encode($result);
}

//将对象转换成数组
function objToArray($object) {
  if (is_object($object)) {
    foreach ($object as $key => $value) {
      $array[$key] = $value;
    }
  }
  else {
    $array = $object;
  }
  return $array;
}

//将数组转换成对象
function arrayToObj($array) {
  if (is_array($array)) {
    $obj = new StdClass();
    foreach ($array as $key => $val){
      $obj->$key = $val;
    }
  }
  else { $obj = $array; }
  return $obj;
}

?>
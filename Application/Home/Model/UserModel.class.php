<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
   protected $_validate = array(
     array('user_name','require','用户名必须！'), // 用户名必须
     array('user_name','','帐号名称已经存在！',1,'unique',1), // 验证用户名是否已经存在
     array('user_email','email','Email格式错误！',2), // 如果输入则验证Email格式是否正确
     array('user_pwd','6,30','密码长度不正确',0,'length'), // 验证密码是否在指定长度范围
     array('repass','user_pwd','确认密码不一致',0,'confirm'), // 验证确认密码是否和密码一致     
   );

   protected $_auto = array ( 
         array('user_tel','020-12345678'),  // 新增的时候把user_tel字段设置为 020-12345678
         array('user_pwd','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
   );
   

}

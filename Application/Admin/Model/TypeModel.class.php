<?php
/**
 * Created by 涂禹天.
 * Date: 2017/6/5
 * Time: 19:01
 * Email:1635358408@qq.com
 * QQ:1635358408
 */

namespace Admin\Model;


use Common\Model\BaseModel;

class TypeModel extends BaseModel
{
    // 主键名称
    protected $pk               =   'tid';
    // 当前数据库操作对象
    protected $db               =   "type";
    // 自动验证定义
    protected $_validate        =   [
        ['tname','require','类型名不能为空'],
    ];
    public function store($data)
    {
        if (!$this->create()) {
            //验证失败情况
            return ['valid' => 'error', 'msg' => $this->getError()];
        }else{
            return parent::store($data);// TODO: Change the autogenerated stub
        }
    }
}
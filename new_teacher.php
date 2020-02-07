<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07/02/2020
 * Time: 11:40:6
 */

class new_teacher
{
    public $id;
    public $tenant_id;
    public $class_id;
    public $timetable_id;
    public $user_id;
    public $role_id;
    public $role_teacher;
    public $status;
    public $start_time;
    public $end_time;
    public $note;
    public $is_deleted;
    public $created_by;
    public $updated_by;
    public $created_at;
    public $updated_at;

    public function __construct($id,$tenant_id,$class_id,$timetable_id,$user_id,$role_id,$role_teacher,$status,$start_time
        ,$end_time,$note,$is_deleted,$created_by,$updated_by,$created_at,$updated_at)
    {
        $this->id = $id;
        $this->tenant_id = $tenant_id;
        $this->class_id = $class_id;
        $this->timetable_id = $timetable_id;
        $this->user_id = $user_id;
        $this->role_id = $role_id;
        $this->role_teacher = $role_teacher;
        $this->status = $status;
        $this->start_time = $start_time;
        $this->end_time = $end_time;
        $this->note = $note;
        $this->is_deleted = $is_deleted;
        $this->created_by = $created_by;
        $this->updated_by = $updated_by;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}

$new_teacher = new new_teacher(726863,65,10532,487851,46146 ,0,0,0,"17:00:00"
        ,"19:00:00",null,0,0,0,"2020-02-06 16:14:06","2020-02-06 16:14:06");

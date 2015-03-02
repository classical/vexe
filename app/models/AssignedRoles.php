<?php

class AssignedRoles extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    public function getRoleId( $user_id )
    {
        return $this->where('user_id', '=', $user_id)->first();
    }
}
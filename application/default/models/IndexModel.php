<?php
class IndexModel extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->setTable(DB_TABLE);
	}

	public function listItems(){ 
		
		$query[] 	= "SELECT `p`.`post_id`, `p`.`post_position`, `p`.`post_address_work`, `p`.`post_salary`, `p`.`post_expired`, `p`.`post_createdDate`, `c`.`comp_name`, `e`.`comp_id`, `p`.`emp_id`, `c`.`comp_logo`";
		$query[] 	= "FROM `post` AS `p`, `employer` AS `e`, `company` AS `c`";
		$query[] 	= "WHERE `e`.`emp_id` = `p`.`emp_id` AND `e`.`comp_id` = `c`.`comp_id`";
		$query[] 	= "AND `p`.`post_isActive` = 'active'";
		$query[] 	= "AND `p`.`post_expired` > CURRENT_DATE()";
		$query[] 	= "ORDER BY RAND()";
		$query[] 	= "LIMIT 7";

		$query 		= implode(" ", $query);
		$result 	= $this->listRecord($query);
		return $result;
	}

	// Avatar
	public function getAvatar()
	{
		$query[] = "SELECT `user_avatar`";
		$query[] = "FROM `user`";
		$query[] = "WHERE `user_id` = '{$_SESSION['loginDefault']['idUser']}'";
		$query		= implode(" ", $query);
		$result		= $this->singleRecord($query);

		return $result;
	}


	public function getFullName(){
        $query[]    = "SELECT `user_fullname`";
        $query[]    = "FROM `user`";
        $query[]    = "WHERE `user_id` = '{$_SESSION['loginDefault']['idUser']}'";
        $query      = implode(" ", $query);
        $result     = $this->singleRecord($query);

        return $result;
    }
}

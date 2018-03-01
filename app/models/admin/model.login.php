<?php

    # @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-11-21 10:47:56
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-02 23:03:27
	
	namespace ModelAdmin;

	Class Login 
	{

		private $db, $query;

		public function __construct($db)
		{
			$this->db = $db;
		}

		public function login($user, $pass)
		{
			$this->query = $this->db->from('admin')
				->where('user', $user)
				->where('pass', $pass)
				->first();

			if(!empty($this->query))
			{
				setSession('login', true);

				return true;
			}
			return false;
		}

		public function getLoginInfo()
		{
			$this->query = $this->db->from('admin')
				->first();

			return $this->query;
		}

		public function update($set)
		{
			$this->query = $this->db->update('admin')
				->set($set);

			if($this->query === true)
			{
				return true;
			}
			return false;
		}

		public function _exit()
		{
			removeSession('login');
		}

	}

?>

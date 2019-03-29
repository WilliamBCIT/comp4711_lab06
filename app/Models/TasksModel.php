<?php
class TasksModel extends \CodeIgniter\Model
{

        protected $table      = 'tasks';
        protected $primaryKey = 'id';

        protected $allowedFields = ['task', 'priority', 'size', 'group', 'deadline', 'status', 'flag'];
		
}
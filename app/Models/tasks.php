class TasksModel extends \CodeIgniter\Model
{

        protected $table      = 'tasks';
        protected $primaryKey = 'id';

		protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['task', 'priority', 'size', 'group', 'deadline', 'status', 'flag'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

		
}
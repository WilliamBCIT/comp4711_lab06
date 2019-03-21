class PrioritiesModel extends \CodeIgniter\Model
{

        protected $table      = 'priorities';
        protected $primaryKey = 'id';

		protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

		
}
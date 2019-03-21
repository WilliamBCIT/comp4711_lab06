class DwarfsModel extends \CodeIgniter\Model
{

        protected $table      = 'dwarfs';
        protected $primaryKey = 'id';

		protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name', 'role'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

		
}
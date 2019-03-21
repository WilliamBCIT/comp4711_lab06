class FlagsModel extends \CodeIgniter\Model
{

        protected $table      = 'flags';
        protected $primaryKey = 'id';

		protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['meaning'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

		
}
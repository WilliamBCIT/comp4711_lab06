class SizesModel extends \CodeIgniter\Model
{

        protected $table      = 'sizes';
        protected $primaryKey = 'id';

		protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name'];

        protected $useTimestamps = false;

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

		
}
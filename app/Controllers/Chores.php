<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Chores extends Controller
{
        public function index()
        {

			$query = $db->query('SELECT name, id FROM dwarfs');
			$results = $query->getResult();

			foreach ($results as $row)
			{
					echo $row->name;
					assign(name);
			}

        }

		public function assign(string $string)
		{
			
			$xmldata = $string;
			
			$info = new SimpleXMLElement($xmldata);

		}
		
		}
<?php 

namespace App\Controllers;

use App\Models\DwarfsModel;
use CodeIgniter\Controller;

class Chores extends \CodeIgniter\Controller
{
        public function index()
        {

		    $dwarfs = new DwarfsModel(); 
		
		    //return view from dwarfs
		    $data = $dwarfs->findAll();
					
		    //call assign function from the DwarfsView
            //return view("DwarfsView", $data);		

            return view("DwarfView");		

			}

		public function assign(string $id)
		{
			
			$xmldata = new SimpleXMLElement("<todo/>");
			
			//Add 3 children to simpleXMLelement
			
			//retrieve dwarf record for given $id
			//use to build simpleXMLelement
			
			$chores = $xmldata->addChild("chores");
			$name = $xmldata->addChild("name");
			$roles = $xmldata->addChild("roles");

			//return XML doc with 3 random chores for dwarfs
			//3 elements: name, role, 3 chores
			//From Task model
			
			$this->response->setContentType("text/xml");
			
		    return $xmldata->asXML();
		
		}
		
		}
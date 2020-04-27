<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function __construct(){
		$this->listUser = array(
			array(
				'id' => "U-001",
				'name' => "Dani RS"
			),
			array(
				'id' => "U-002",
				'name' => "Derry"
			),
			array(
				'id' => "U-003",
				'name' => "Galang"
			),
			array(
				'id' => "U-004",
				'name' => "Renal"
			)

		);
	}
	public function index() {}

	public function userData() {
		print_r($this->listUser);

		for ($i=0; $i <sizeof($this->listUser) ; $i++) { 
			echo "Id: " . $this->listUser[$i]['id'] .
			" Name: " . $this->listUser[$i]['name'] . "<br>";
		}
			// $data['title'] = "User Data";
		// $data['user'] = $this->listUser;
		// return view('user', $data);
	}
	public function userProfile($id) {
		// echo "User ID: ".$id;

		// echo "Id: ". $this->listUser[$id]['id'] . " Name: " . $this->listUser[$id]['name'];

		// $data = array(
		// 	'id' => $this->listUser[$id]['id'],
		// 	'name' => $this->listUser[$name]['name']
		// );

		// $data = $this->listUser[$id];
		// return view('userprofile', $data);
	}
	public function userAdd() {
	// 	array_push(
	// 		$this->listUser,
	// 		array(
	// 		'id' => "U-005",
	// 		'name' => "Agus"
	// 	)
	// );
	// print_r($this->listUser);
	}
public function userAddData($id, $name) {
	// array_push(
	// 	$this->listUser,
	// 	array(
	// 		'id' => $id,
	// 		'name' => $name
	// 	)
	// );
	// print_r($this->listUser);
}

}
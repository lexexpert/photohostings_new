<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{
		$data = array();
		$data['error'] = '';



		if(isset($_FILES['photo'])) {

			$errors = array();

			$max_filesize    =  10097152;
			$valid_file_extensions = array("jpg", "png");
			$file_extension = strrchr($_FILES["photo"]["name"], ".");
			$fileUploaded1 = time();

			if (empty($_FILES['photo']['name'])) {
				$errors[] = "Файл не выбран";
			}

			if ($_FILES['photo']['size'] > $max_filesize) {
				$errors[] = "Максимальный размер файла 2MB";
			}

			if (!in_array(strtolower(substr($file_extension, 1)), $valid_file_extensions)) {
				$errors[] = "Допустимые форматы изображений JPG, PNG";
			}

			if ($errors) {
				$errortext = "";
				foreach ($errors as $error) {
					$errortext .= '<li>'. $error . "</li>";
				}
				$data['error'] =  '<div class="alert notification alert-error"><strong>Ошибки:</strong><br><ul>'. $errortext .'</ul></div>';

			} else{

				$data['img_link'] = '<img src=&quot;'.base_url().'img/'.$fileUploaded1.$file_extension.'&quot;>';
				$data['direct_link'] = base_url().'img/'.$fileUploaded1.$file_extension;
				$data['bb_link'] = '[img]'.base_url().'img/'.$fileUploaded1.$file_extension.'[/img]';

				move_uploaded_file($_FILES['photo']['tmp_name'], './uploads/' .$fileUploaded1.$file_extension);

			}

		}


		/*$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$this->load->library('upload', $config);

		// Вы можете также установить параметры, вызвав функцию инициализации. Используйте её, если класс загружается автоматически:
		$this->upload->initialize($config);*/


		$this->load->view('main',$data);
	}
}

<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Img extends CI_Controller {

    //Конструктор
    function __construct() {
        parent::__construct();
    }

    function index($imgname='') {

        $CI = &get_instance();

        $CI->load->helper('cookie');
        $uh = get_cookie('uh', TRUE);

        if(!$uh){

            $user_hash = sha1(time());
            $ip = getenv("REMOTE_ADDR");

            //Запоминаем hash в базе данных
            $adddata = array(
                'user_hash' => $user_hash,
                'date'      => time(),
                'ip'        => $ip
            );
            $this->db->insert('marked',$adddata);

            $cookie = array(
                'name'   => 'uh',
                'value'  => $user_hash,
                'expire' => '315360000',
                'domain' => '',
                'path'   => '/',
                'prefix' => '',
            );

            set_cookie($cookie);

        }

        $file_extension = strtolower(substr(strrchr($imgname, "."), 1));

        if($file_extension == 'png'){
            /*$im = imagecreatefrompng(base_url()."uploads/".$imgname);
            header('Content-Type: image/png');
            imagepng($im);
            imagedestroy($im);*/

            header('Content-Type: image/png');
            $img = $this->LoadPNG(base_url()."uploads/".$imgname);

            imagepng($img);
            imagedestroy($img);

        }

        if($file_extension == 'jpg'){

            header('Content-Type: image/jpeg');
            $img = $this->LoadJpeg(base_url()."uploads/".$imgname);
            imagejpeg($img);
            imagedestroy($img);

        }


        //echo "<img src='".base_url()."uploads/".$imgname."'>";

        /*echo get_cookie('uh', TRUE);*/

    }

    function LoadPNG($imgname)
    {
        /* Пытаемся открыть */
        $im = @imagecreatefrompng($imgname);

        /* Если не удалось */
        if(!$im)
        {
            /* Создаем пустое изображение */
            $im  = imagecreatetruecolor(150, 30);
            $bgc = imagecolorallocate($im, 255, 255, 255);
            $tc  = imagecolorallocate($im, 0, 0, 0);

            imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

            /* Выводим сообщение об ошибке */
            imagestring($im, 5, 5, 5, 'Load error', $tc);
        }

        return $im;
    }


    function LoadJpeg($imgname)
    {
        /* Пытаемся открыть */
        $im = @imagecreatefromjpeg($imgname);

        /* Если не удалось */
        if(!$im)
        {
            /* Создаем пустое изображение */
            $im  = imagecreatetruecolor(150, 30);
            $bgc = imagecolorallocate($im, 255, 255, 255);
            $tc  = imagecolorallocate($im, 0, 0, 0);

            imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

            /* Выводим сообщение об ошибке */
            imagestring($im, 5, 5, 5, 'Load error', $tc);
        }

        return $im;
    }



}

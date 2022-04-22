<?php

class Api_model extends CI_Model {

    public function data_covid()
    {
        $api = @file_get_contents('https://api.kawalcorona.com/indonesia');
        if(!$api === FALSE) {
            $data = json_decode($api, true);
            return $data;
        }
        return false;
    }

    public function data_berita()
    {
        $api = file_get_contents('https://api-berita-indonesia.vercel.app/cnn/gayaHidup/');
		$data = json_decode($api, true);

        return $data;
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh1 extends CI_Controller
{

    public function index()
    {
        echo "<h1>Perkenalan</h1>";
		echo "
		Nama Saya Zyad Bagus<br>
		Rumah Saya di Ciledug<br>
		kegiatan yang saya sukai yaitu bermain gitar";
    }
}

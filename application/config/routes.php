<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['home'] = 'user/MainController/index';
$route['event'] = 'user/MainController/event';
$route['news'] = 'user/MainController/news';
$route['achievement'] = 'user/MainController/achievement';
$route['join'] = 'user/MainController/join';
$route['daftar'] = 'user/MainController/daftar';
$route['about'] = 'user/MainController/about';
$route['team'] = 'user/MainController/team';


$route['executive'] = 'executive/DashboardController/index';
$route['executive/login'] = 'executive/Login/login';
$route['executive/logout'] = 'executive/Login/logout';
$route['executive/anggota'] = 'executive/AnggotaController/index';

$route['executive/berita'] = 'executive/BeritaController/index';
$route['executive/tambah/berita'] = 'executive/BeritaController/input';
$route['executive/edit/berita/(:num)'] = 'executive/BeritaController/edit/$1';
$route['executive/hapus/berita/(:num)'] = 'executive/BeritaController/hapus/$1';

$route['executive/acara'] = 'executive/AcaraController/index';
$route['executive/tambah/acara'] = 'executive/AcaraController/input';
$route['executive/edit/acara/(:num)'] = 'executive/AcaraController/edit/$1';
$route['executive/hapus/acara/(:num)'] = 'executive/AcaraController/hapus/$1';

$route['executive/pencapaian'] = 'executive/PencapaianController/index';
$route['executive/tambah/pencapaian'] = 'executive/PencapaianController/input';
$route['executive/edit/pencapaian/(:num)'] = 'executive/PencapaianController/edit/$1';
$route['executive/hapus/pencapaian/(:num)'] = 'executive/PencapaianController/hapus/$1';

$route['executive/pendaftaran'] = 'executive/PendaftaranController/index';

$route['executive/jurusan'] = 'executive/JurusanController/index';
$route['executive/tambah/jurusan'] = 'executive/JurusanController/input';
$route['executive/edit/jurusan/(:num)'] = 'executive/JurusanController/edit/$1';
$route['executive/hapus/jurusan/(:num)'] = 'executive/JurusanController/hapus/$1';

$route['executive/divisi'] = 'executive/DivisiController/index';
$route['executive/tambah/divisi'] = 'executive/DivisiController/input';
$route['executive/edit/divisi/(:num)'] = 'executive/DivisiController/edit/$1';
$route['executive/hapus/divisi/(:num)'] = 'executive/DivisiController/hapus/$1';

$route['executive/pengurus/divisi'] = 'executive/PengurusDivisiController/index';
$route['executive/tambah/pengurus/divisi'] = 'executive/JabatanController/input';
$route['executive/edit/pengurus/divisi'] = 'executive/JabatanController/edit';
$route['executive/hapus/pengurus/divisi'] = 'executive/JabatanController/hapus';


$route['executive/jabatan'] = 'executive/JabatanController/index';
$route['executive/tambah/jabatan'] = 'executive/JabatanController/input';
$route['executive/edit/jabatan/(:num)'] = 'executive/JabatanController/edit/$1';
$route['executive/hapus/jabatan/(:num)'] = 'executive/JabatanController/hapus/$1';

$route['executive/tentang'] = 'executive/TentangController/index';
$route['executive/tambah/tentang'] = 'executive/TentangController/input';
$route['executive/edit/tentang/(:num)'] = 'executive/TentangController/edit/$1';
$route['executive/hapus/tentang/(:num)'] = 'executive/TentangController/hapus/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php

function pageOfficial($page  = "", $data = "")
{
	$ci = get_instance();
	$ci->load->view('official/header', $data);
	$ci->load->view('/' . $page, $data);
	$ci->load->view('official/footer', $data);
}

function pageAuth($page  = "", $data = "")
{
	$ci = get_instance();
	$ci->load->view('backoffice/auth/header', $data);
	$ci->load->view('/' . $page, $data);
	$ci->load->view('backoffice/auth/footer', $data);
}

function pageBackend($role = '', $page = '', $data = '')
{
	$ci = get_instance();
	$ci->load->view('backoffice/template/header', $data);
	$ci->load->view('backoffice/template/topbar', $data);
	$ci->load->view('backoffice/template/' . strtolower($role . '_sidebar'), $data);
	$ci->load->view('' . $page, $data);
	$ci->load->view('backoffice/template/footer');
}

function keyencrypt()
{
	return '123Daftar@@';
}

function encodeEncrypt($id)
{
	$ci = get_instance();
	return $ci->encryption->encrypt($id);
}

function decodeEncrypt($id)
{
	$ci = get_instance();
	return $ci->encryption->decrypt($id);
}

function sessionAdmin($role)
{
	$ci = get_instance();
	return $ci->session->userdata($role);
}

function cek_login($role = null)
{
	$ci = get_instance();
	if (!$ci->session->userdata('username')) {
		redirect('backoffice');
	}

	if ($role) {
		$sessionActive = $ci->session->userdata('username');
		if ($sessionActive->name != $role) {
			redirect('backoffice');
		}
	}
}

function calculateAge($birthDate)
{
	$birthDate = new DateTime($birthDate);
	$today = new DateTime("today");
	if ($birthDate > $today) {
		exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
	return $y . " tahun " . $m . " bulan " . $d . " hari";
}

function indonesianDate($date, $format)
{
	// 'dddd, D MMMM Y, HH:mm' => Selasa, 8 Februari 2022, 14:00
	$date = \Carbon\Carbon::parse($date, 'UTC')->locale('id');
	return $date->isoFormat($format);
}

function getTextPeriod($date)
{
	$today = date('Y-m-d');
	if ($today <= $date) {
		return '<span class="badge bg-success">Open</span>';
	} else {
		return '<span class="badge bg-danger">Closed</span>';
	}
}

function strContains($text, $needle)
{
	return str_contains($text, $needle);
}

function emailBody()
{
	$body = "";
	return $body;
}

function newSlug($data)
{
	$slug = url_title($data, 'dash', TRUE);
	return $slug;
}

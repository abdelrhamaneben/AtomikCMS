<?php

function css_url($nom)
{
	return base_url() . 'assets/css/' . $nom ;
}

function js_url($nom)
{
	return base_url() . 'assets/js/' . $nom ;
}

function img_url($nom)
{
	return base_url() . 'assets/img/' . $nom ;
}

function files_url($nom)
{
	return base_url() . 'assets/files/' . $nom ;
}

function ajax_error($message, $statut) {
	header("HTTP/1.0 ".$statut." ".$message);
	echo $message;
	exit(0);
}
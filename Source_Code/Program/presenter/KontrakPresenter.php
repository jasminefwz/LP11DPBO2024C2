<?php

interface KontrakPresenter
{
	public function prosesDataPasien();
	public function getbyId($data);
	public function addPasien($data);
	public function updatePasien($data);
	public function deletePasien($id);
	public function getId($i);
	public function getNik($i);
	public function getNama($i);
	public function getTempat($i);
	public function getTl($i);
	public function getGender($i);
	public function getSize();
}

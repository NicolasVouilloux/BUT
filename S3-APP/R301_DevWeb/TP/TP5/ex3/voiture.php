<?php

class Voiture
{
	private string $marque;
	private string $couleur;
	private string $immatriculation;

	public function __construct(
		string $marque = NULL,
		string $couleur = NULL,
		string $immatriculation = NULL
		) {

		if (!is_null($immatriculation))
		{
			$this->marque = $m;
			$this->couleur = $c;
			$this->immatriculation = $i;
		}
	}

	public function getMarque() { return $this->marque; }
	public function getCouleur() { return $this->couleur; }
	public function getImmatriculation() { return $this->immatriculation; }

	public function setMarque(string $m) { $this->marque = $m; }
	public function setCouleur(string $c) { $this->couleur = $c; }
	public function setImmatriculation(string $i) { $this->immatriculation = $i; }

	public function afficher() {
		$s = "Voiture "
		. $this->getImmatriculation()
		. " de marque "
		. $this->getMarque()
		. " et de couleur "
		. $this->getCouleur()
		. ". ";
		echo "$s";
	}

	public function __toString() {
		$s = "Voiture <b>"
		. $this->getImmatriculation()
		. "</b> de marque <b>"
		. $this->getMarque()
		. "</b> et de couleur <b>"
		. $this->getCouleur()
		. "</b>";
		return $s;
	}
}

?>
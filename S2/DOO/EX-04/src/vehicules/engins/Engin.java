package vehicules.engins;

import vehicules.Vehicule;
import java.util.ArrayList;

public abstract class Engin extends Vehicule {
	
	// ---------- Attributs ----------
	
	protected int capacite;
	protected ArrayList<String> sesPatients;
	protected String hopitalDestination;
		
	// -------- Constructeurs --------
	
	public Engin() {
		super();
	}
		
	// ----------- Méthodes -----------
	
	public void embarquer (String nomPersonne1) {
		sesPatients.add(nomPersonne1);
	}
}

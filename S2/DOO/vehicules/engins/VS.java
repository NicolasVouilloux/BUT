package vehicules.engins;

public class VS extends Engin {
	
	// ---------- Attributs ----------
	
	protected static final int CAPACITE = 2;
		
	// -------- Constructeurs --------
		
	public VS() {
		super();
	}
			
	// ----------- Méthodes -----------
	
	public float getCout() {
		if (this.distanceIntervention >= 50) return (float) 600;
		else return (float) (sesPatients.size() * 150);
	}
	
	public void embarquer (String nomPersonne1, String nomPersonne2) {
		this.sesPatients.add(nomPersonne1);
		this.sesPatients.add(nomPersonne2);
	}
}

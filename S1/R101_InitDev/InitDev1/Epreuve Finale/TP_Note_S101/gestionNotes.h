#include <iostream>
#include <vector>

using namespace std;

/// Constantes
const int NBETUD = 20 ;
const int AFFICHENOTES = 1 ;
const int MOY = 2 ;
const int MAJOR = 3 ;
const int QUIT = 0;

#ifndef GESTIONNOTES_H_
#define GESTIONNOTES_H_


/// proc�dure calcMoyenne()
/// param�tres: (D)   notes: tableau 2D d'entiers
///             (D/R) moy: tableau de r��ls (flottants)
/// calcule les moyennes des �tudiants et les enregistre dans la case
/// correspondante du vecteur moy
void calcMoyenne(const vector<vector<int>> &notes, vector<float> &moy);


/// fonction invalide()
/// param�tres: (D) c: entier
/// renvoie vrai si cet entier n�est pas �gal � une des constantes NBETUD,
/// AFFICHEETUD, AFFICHENOTES, MOY, MAJOR ou QUIT
bool invalide(int c);


/// fonction menu()
/// param�tres: aucun param�tre
/// demande une valeur � l'utilisateur et renvoie la valeur du choix.
int menu();


/// proc�dure afficheNotes()
/// param�tres: (D)   notes: tableau 2D d'entiers
///             (D)   etudiants: tableau de strings
/// affiche les notes de chaque �tudiant
void afficheNotes(const vector<vector<int>> &notes, const vector<string> &etudiants);


/// proc�dure afficheMoy()
/// param�tres: (D)   moy: tableau de r�els
///             (D)   etudiants: tableau de strings
/// affiche la moyenne de chaque �tudiant
void afficheMoy(const vector<float> &moy, const vector<string> &etudiants);


/// fonction meilleurEtud()
/// param�tres: (D)   notes: tableau de r�els
///             (D)   etudiants: tableau de strings
/// renvoie l'indice de l'�tudiant ayant la meilleure moyenne
int meilleurEtud(const vector<float> &moy, const vector<string> &etudiants);

#endif // GESTIONNOTES_H_

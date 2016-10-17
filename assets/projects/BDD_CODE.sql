USE Circuits_touristiques;
-- REINIT l'auto increment pour les tests !
ALTER TABLE Client_ AUTO_INCREMENT=0;
ALTER TABLE Circuit AUTO_INCREMENT=0;
ALTER TABLE DeplacementJ AUTO_INCREMENT=0;
ALTER TABLE Paiement AUTO_INCREMENT=0;
ALTER TABLE Reservation AUTO_INCREMENT=0;

-- TEST SAMPLE --
-- (nom,prenom,adresse,tel,mdp)
call Creer_client('Pierre','Dupont','8 rue de la Paix','0645785425','azerty');
call Creer_client('Yves','Legac','11 rue de la foret','0625461578','uiop');
call Creer_client('Paul','Dupont','2 rue de treb','0621364895','qsdfg');
call Creer_client('Jack','Dupont','4 rue de traverse','0616485157','hjklm');
call Creer_client('Giselle','Godin','12 rue de la liberte','0613548249','wxcvbn');

-- (nom,pays,hotel)
call Creer_ville('Paris','France','Hotel De La Classe');
call Creer_ville('Budapest','Hongrie','Grand Budapest Hotel');
call Creer_ville('Niort','France','Formule 1');
call Creer_ville('Rio','Bresil','Hostel Taudi');
call Creer_ville('Berlin','Allemagne','HotelMerkell');
call Creer_ville('Frankfurt','Allemagne','Hotel Szausizz');
call Creer_ville('Bombay','Inde','Libinu Hotel');
call Creer_ville('Bramapur','Inde','CheapPlace');

-- NOTE : Donner le nombre de place reservées à la création d'un circuit n'a pas vraiment de sens...
--        SAUF dans le cas de nos tests, qui doivent être probants ! Pour éviter d'ajouter des réservations
--    	  a tout les circuits "à la main" nous laissons donc ce paramètre, qui sera à changer en production.

-- (date_debut,nb_place_total,nb_places_reservees,prix)
call Creer_circuit('2015-07-20',10,0,100); -- Pas possible de réserver ici, c'est dans moins d'un mois!
call Creer_circuit('2015-08-25',30,8,200); -- Possible de réserver ici
call Creer_circuit('2015-08-30',40,40,300); -- Ici c'est impossible de réserver, il ne reste plus assez de place...
call Creer_circuit('2015-08-19',60,32,400); -- Ici c'est possible, il reste 28 places
call Creer_circuit('2015-09-20',20,5,500);  -- Ici c'est possible, il reste 15 places

-- (id_circuit,num_journee,heure_dep,heure_arr,ville_dep,ville_arr)
call Creer_deplacementj(1,1,'10:15','17:10','Paris','Niort');    -- j1 circuit1
call Creer_deplacementj(1,2,'08:50','18:00','Niort','Budapest'); -- j2 circuit1
call Creer_deplacementj(1,3,'08:50','18:00','Niort','Niort');    -- j2 circuit1 (Refusé car départ = arrivé !)
call Creer_deplacementj(2,1,'15:10','19:20','Rio','Berlin');     -- j1 circuit2
call Creer_deplacementj(2,2,'15:10','19:20','Rio','Frankfurt');  -- j2 circuit2 (PAS POSSIBLE car ville de départ différent ville d'arrivée d'hier)
call Creer_deplacementj(3,1,'12:00','20:00','Paris','Rio');      -- j1 circuit3
call Creer_deplacementj(3,2,'12:00','20:00','Rio','Niort');      -- j2 circuit3
call Creer_deplacementj(3,3,'12:00','20:00','Niort','Bombay');   -- j3 circuit3
call Creer_deplacementj(4,1,'13:00','21:50','Berlin','Paris');   -- j1 circuit4
call Creer_deplacementj(4,2,'13:00','21:50','Paris','Berlin');   -- j2 circuit4
call Creer_deplacementj(5,1,'05:20','15:00','Budapest','Niort'); -- j1 circtui5
call Creer_deplacementj(5,2,'05:20','15:00','Niort','Paris');    -- j2 circtui5

-- INITIALISATION DES RESERVATION : pas encore de paiements, donc rien de validé encore
-- (nb_places_demandees int,id_client int,id_circuit int)
call Creer_reservation(1,1,1); -- reservation pour client 1, une place, circuit 1
call Creer_reservation(5,2,1); -- reservation pour client 2, cinq places, circuit1
call Creer_reservation(1,1,2); -- reservation pour client 1, une place, circuit2
call Creer_reservation(1,3,3); -- reservation pour client 3, une place, circuit3 : pas possible de créer resa, circuit plein !
call Creer_reservation(1,4,4); -- reservation pour client 4, une place, circuit4 (res4 car AI pas incrémenté précedemment, il n'y a en effet
							   -- pas eu de création de résa !)
call Creer_reservation(2,5,5); -- reservation pour client 5, deux places, circuit5

-- (somme,id_res)
-- testé le 25 juin 2015
call Creer_paiement(30,1);  -- tentative de paiement 1 pour resa 1 --> rejeté car date trop tardive !
call Creer_paiement(10,1);  -- tentative de paiement 2 pour resa 1 --> rejeté car date trop tardive encore ! pour ce circuit, ça va toujours être rejeté...
call Creer_paiement(90,2);  -- tentative de paiement 1 pour resa 2 --> rejeté car on est encore sur le circuit 1, idem que les deux précédent
call Creer_paiement(20,3);  -- tentative de paiement 1 pour resa 3 -->  accepté car = 10%
call Creer_paiement(180,3); -- tentative de paiement 1 pour resa 3 -->  accepté car = 90% ! tout est accepté, validation_definitive = 1
call Creer_paiement(40,4);  -- tentative de paiement 1 pour resa 4 -->  accepté car 10% ! 
call Creer_paiement(1000,5);-- tentative de paiement 1 pour resa 5 --> acceptée car 100% ! tout est accepté d'un coup ! validation_definitive = 1

-- AFFICHAGES DIVERS
call Afficher_circuit_periode(now(),'2015-08-30'); -- doit afficher les 4 premiers circuits et leur infos
call Afficher_circuit_pays('France'); -- doit afficher les circuits partant de la France, soit circuit 1,3,4,5
call Afficher_circuit_ville_depart('Niort'); -- doit afficher les circuits partant de Niort, soit 0 circuits
call Afficher_circuit_ville_depart('Paris'); -- doit afficher les circuits partant de Paris, soit circuit 1,3
call Afficher_circuit_pays_ou_ville('Paris','Allemagne'); -- Afficher les circuits passants par paris Ou en allemagne (fonction utile !)

-- VIEWS & STATS
select * from Stat_circuit_global; -- Affiche les infos sur les circuits constitués d'AU MOINS une étape ! (circuit 3 pas pris en compte car il n'y a pas d'étapes dessus !)
select * from Stat_circuit_ville;  -- Affiche les infos sour les circuits ; nombre de villes traversées pour un circuit
select * from Stat_annee;          -- affiche les stats pour une année donnée : donne tout le nombre de place pour cette anéne là, le nombre de place vendues et le CA 
								   -- réalisé avec ces ventes.
								   -- Vu que dans notre panel de test il n'y a qu'une reservation de confirmée pour un circuit à 200; ceci devrait afficher 200e
                                   -- Le chiffre d'affaire n'est pas valide car il multiplie le premier prix qu'il trouve avec le nombre de places définitives. 
                                   -- Il ne différencie pas les prix en fonction de leur circuit. Il faudrait donc pour chaque circuit multiplié son prix par ses places réservées, 
                                   -- et faire la somme de tous ces résultats.
select * from Stat_client;		   -- affiche le CA généré par chaque client.

call Nettoyage_base();			-- Nettoie les reserations dans la base ! Cette fonction n'est pas à
							    -- 100 % fonctionnelle --> CF rapport
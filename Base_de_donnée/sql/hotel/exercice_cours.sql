<<<<<<< HEAD

=======

>>>>>>> 6bdce4e2437fa28d4da2a35bdceb106471a91a24
SELECT chambre.NumChambre , chambre.NumHotel FROM `chambre` WHERE chambre.NumChambre NOT IN ( SELECT reservation.NumChambre FROM `reservation`  );
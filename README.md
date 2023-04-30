# NWP-LV3

Zadatak 1:

1. Napravite novu Laravel instalaciju koja će biti u direktoriju projekti. Aplikacija treba imati 
mogućnost registracije novih korisnika (korisnici se sami registriraju). Korisnici se moraju moći 
prijaviti i odjaviti. 
2. Potrebno je napraviti novu migraciju za tablicu projects u kojoj će korisnici voditi evidenciju svojih 
projekata. Projekt treba imati atribute naziv projekta, opis projekta, cijena projekta, obavljeni
poslovi, datum početka i datum završetka. 
3. Na svaki projekt se može dodati više članova projektnog tima koji će raditi na projektu (članovi 
time dobivaju se sa popisa korisnika koji su se registrirali u aplikaciji). Voditelj projekta će biti 
osoba koja je otvorila projekt.
4. Na svom profilu svaki korisnik vidi projekte koje je otvorio (projekte na kojima je voditelj), te 
projekte na kojega je dodan kao član projektnog tima.
5. Voditelj projekta može mijenjati sve podatke na projektu, a članovi projektnog tima samo atribut 
obavljeni poslovi.

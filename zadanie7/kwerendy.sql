Zapytanie 1:
    SELECT id, cel, cena FROM wycieczki WHERE dostepna = '0';
Zapytanie 2:
    SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;
Zapytanie 3:
    SELECT podpis, cena, cel FROM wycieczki 
    JOIN zdjecia ON wycieczki.zdjecia_id = zdjecia.id 
    WHERE cena < 1200;
Zapytanie 4:
    ALTER TABLE wycieczki
    DROP COLUMN dataWyjazdu;
## Vytvořte následující SQL dotazy:

### Opakování
1. Vyberte zákazníka, jehož ID je rovno *2*.
`SELECT * FROM zakaznik WHERE id = 2;`
2. Vyberte zákazníky, kteří mají jméno *Jana* nebo *Jakub*.
`SELECT * FROM zakaznik WHERE jmeno IN ('Jakub', 'Jana');`
3. Vyberte položky objednávy, které mají cenu větší než 1000, ale menší než 5000.
`SELECT * FROM polozka_objednavky WHERE cena > 1000 AND cena < 5000;`
4. Vyberte všechny zákazníky, kteří jsou starší 18 let.
`SELECT * FROM zakaznik WHERE datum_narozeni < '2002-02-25';`


### Agregační funkce
5. Vyberte počet zákazníků, kteří se jmenují *Jakub*.
`SELECT COUNT(*) AS pocet_jakubu FROM zakaznik WHERE jmeno = 'Jakub';`
6. Vyberte cenu a název nedražší položky objednávky.

### Řazení
7. Vypište název a cenu všech položek objednávek a seřaďte je od nejdražší po nejlevnejší.
`SELECT cena, nazev FROM polozka_objednavky ORDER BY cena DESC`;
8. Použijte předchozí příkaz a vyberte pouze 3 nejdražší položky.
`SELECT cena, nazev FROM polozka_objednavky ORDER BY cena DESC LIMIT `;

### Spojení tabulek
9. Vypište všechny objednávky společně se všemi jejich položkami.
```sql
Vypište všechny objednávky společně se všemi jejich položkami.
SELECT * FROM objednavka
JOIN polozka_objednavky ON polozka_objednavky.objednavka_id = objednavka.id;
```
10. Vypiště všechny objednávky a u každé vypiště počet položek v objednávce.
```sql
SELECT COUNT(objednavka.id), objednavka.* FROM objednavka
JOIN polozka_objednavky ON polozka_objednavky.objednavka_id = objednavka.id
GROUP by objednavka.id;
```
11. Vypište všechny objednávky a jejich celkové ceny.
```sql
SELECT SUM(cena), objednavka.* FROM objednavka
JOIN polozka_objednavky ON polozka_objednavky.objednavka_id = objednavka.id
GROUP by objednavka.id;
```
12. Vypište všechny objednávky a jejich celkové ceny a jména a příjmení zákazníků.
```sql
SELECT SUM(cena), objednavka.*, zakaznik.jmeno, zakaznik.prijmeni FROM objednavka
JOIN polozka_objednavky ON polozka_objednavky.objednavka_id = objednavka.id
LEFT JOIN zakaznik ON objednavka.zakaznik_id = zakaznik.id
GROUP by objednavka.id;
```
13. Vypište celkovou sumu kterou jednotlivi zakaznici utratili v nasem obchode.
```sql
SELECT zakaznik.jmeno, zakaznik.prijmeni, SUM(cena) FROM objednavka
JOIN polozka_objednavky ON polozka_objednavky.objednavka_id = objednavka.id
LEFT JOIN zakaznik ON objednavka.zakaznik_id = zakaznik.id
GROUP BY zakaznik.id
```
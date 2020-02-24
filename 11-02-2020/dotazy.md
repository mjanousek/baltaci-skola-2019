Napište následující SQL dotazy:
--
Řešení:
1. Vyberte zákazníka, jehož ID je rovno *2*.
`SELECT *        FROM  zakaznik         WHERE id = 2;`
2. Vyberte položku objednávky, který má název *gril*.
`SELECT * FROM polozka_objednavky WHERE nazev = 'gril';`
3. Vyberte zákazníka, jehož jméno obsahuje část slova *mek*.
`SELECT * FROM zakaznik WHERE jmeno LIKE '%mek%';`
4. Vyberte zákazníka, který nemá nastaveno město (je null).
`SELECT * FROM zakaznik WHERE mesto IS NULL;`
5. Vyberte zákazníky, kteří jsou muži.
`SELECT * FROM zakaznik WHERE je_zena IS FALSE;`
6. Vyberte položky objednávky, které mají cenu rovnou 550.
`SELECT * FROM polozka_objednavka WHERE cena = 550;`
7. Vyberte položky objedávky, které mají cenu menší než 10000.
`SELECT * FROM polozka_objednavky WHERE cena < 10000;`
8. Vyberte položky objednávy, které mají cenu větší než 1000, ale menší než 5000.
`SELECT * FROM polozka_objednavky WHERE cena > 1000 AND cena < 5000;`
9. Vyberte objednávky, které vytvořil zákazník s ID 5.
`SELECT * FROM objednavka WHERE zakaznik_id = 5;`
10. Vyberte zákazníky, který má datum narození menší než *1.1.1995*.
`SELECT * FROM zakaznik WHERE datum_narozeni < '1995-01-01'`
11. Vyberte zákazníky, kteří mají jméno *Jana* nebo *Jakub*.
`SELECT * FROM zakaznik WHERE jmeno = 'Jana' OR jmeno = 'Jakub';`



12. Spočítejte celkovou cenu objednávek.
superUserProvider.getCurrentUserForInterface
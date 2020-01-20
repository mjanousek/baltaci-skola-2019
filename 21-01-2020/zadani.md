# Vytvořte jednoduchou kalkulačku

* Máte k dispozici formulář ve kterém se nachází:
  * dvě textová pole pro zadání čísel.
  * radio button s hodnotami +, -, *, / (operace).
  * tlačtíko Spočítat.
## Úkol:
1. Upravte formulář tak, aby odesílal data metodou POST.
2. Získejte z formuláře první a druhé číslo.
3. Získejte z formuláře operaci:
  * Použijte kód: $operace = $_POST['operace'];
  * V proměnné $operace budou hodnoty: 'plus', 'minus', 'krat' nebo 'deleno'.
2. Po odeslání formuláře se provede aritmetická operace vybraná pomocí radio buttonů.
2. Zobrazte výslednou hodnotu.

7. Pokud bude probíhat dělení nulou, vraťte textový řetězec Chyba.

Pro zpracování čísel použijte metodu intval - https://www.php.net/manual/en/function.intval.php (budeme pracovat jen s celými čísly).

Výsledek pošlete na macak@priasystem.cz.
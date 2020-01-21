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
4. Proveďte aritmetickou operaci vybranou pomocí radio buttonu nad čísly získané v kroce 2.
5. Zobrazte výslednou hodnotu.

BONUS. Pokud bude probíhat dělení nulou, vraťte textový řetězec Chyba.
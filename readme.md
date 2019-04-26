# World Cup Teams

## Objective

* Show which teams participate in each cup;
* Show the a list of the teams that participate in only one cup (and say which one) and not in the other, of two championships;
* The application should be available through the command line interface;

### Links:

* [World Cup 2014 - JSON](https://raw.githubusercontent.com/openfootball/world-cup.json/master/2014/worldcup.teams.json)

* [World Cup 2018 - JSON](https://raw.githubusercontent.com/openfootball/world-cup.json/master/2018/worldcup.teams.json)

* [World Cup 2010 - TXT](https://raw.githubusercontent.com/openfootball/world-cup/master/2010--south-africa/cup.txt)  

### Acceptance criteria

* Unit testing (already in composer.json);
  * Available through the command: `composer test`
* PSR1 and PSR2 compatible code (already in composer.json)
  * Available through the command: `composer cs`
* Pair programming;



### Covered Topics

* Pair programming;
* Code style guide;
* Automated testing;

### Tips

* You can use any packages that your team find useful;

### Output Example

```
2014
        Algeria
        Argentina
        Australia
        Belgium
        Bosnia-Herzegovina
        Brazil
        Cameroon
        Chile
        Colombia
        Costa Rica
        Croatia
        Côte d'Ivoire
        Ecuador
        England
        France
        Germany
        Ghana
        Greece
        Honduras
        Iran
        Italy
        Japan
        Mexico
        Netherlands
        Nigeria
        Portugal
        Russia
        South Korea
        Spain
        Switzerland
        United States
        Uruguay
2018
        Argentina
        Australia
        Belgium
        Brazil
        Colombia
        Costa Rica
        Croatia
        Denmark
        Egypt
        England
        France
        Germany
        Iceland
        Iran
        Japan
        Mexico
        Morocco
        Nigeria
        Panama
        Peru
        Poland
        Portugal
        Russia
        Saudi Arabia
        Senegal
        Serbia
        South Korea
        Spain
        Sweden
        Switzerland
        Tunisia
        Uruguay
diff
        Denmark was present in 2018 but not in 2014
        Egypt was present in 2018 but not in 2014
        Iceland was present in 2018 but not in 2014
        Morocco was present in 2018 but not in 2014
        Panama was present in 2018 but not in 2014
        Peru was present in 2018 but not in 2014
        Poland was present in 2018 but not in 2014
        Saudi Arabia was present in 2018 but not in 2014
        Senegal was present in 2018 but not in 2014
        Serbia was present in 2018 but not in 2014
        Sweden was present in 2018 but not in 2014
        Tunisia was present in 2018 but not in 2014

        Algeria was present in 2014 but not in 2018
        Bosnia-Herzegovina was present in 2014 but not in 2018
        Cameroon was present in 2014 but not in 2018
        Chile was present in 2014 but not in 2018
        Côte d'Ivoire was present in 2014 but not in 2018
        Ecuador was present in 2014 but not in 2018
        Ghana was present in 2014 but not in 2018
        Greece was present in 2014 but not in 2018
        Honduras was present in 2014 but not in 2018
        Italy was present in 2014 but not in 2018
        Netherlands was present in 2014 but not in 2018
        United States was present in 2014 but not in 2018
        
```


<?php

return [
    'repairs' => [
    'items' => [
        ['Základná diagnostika PC alebo notebooku', '15 €'],
        ['Inštalácia systému a ovládačov', 'od 30 €'],
        ['Výmena SSD alebo RAM a overenie funkčnosti', 'od 20 €'],
        ['Čistenie a prepastovanie', 'od 35 €'],
        ['Ostatné servisné a softvérové práce', '20 €/hod.'],
    ],
    'notes' => [
        'Základná diagnostika za 15 € zahŕňa úvodnú kontrolu zariadenia a dostupné základné testy podľa prejavov poruchy. Náročnejšie rozoberanie a podrobnú diagnostiku nacením osobitne a vykonám až po Vašom odsúhlasení.',
        'Ceny sa vzťahujú na prácu. Náhradné diely a licencie sa účtujú osobitne. Pri čistení a prepastovaní je v cene bežná teplovodivá pasta; prípadné ďalšie potrebné materiály sa dohodnú vopred.',
        'Ak odsúhlasíte následnú opravu, zaplatených 15 € za diagnostiku sa odpočíta z ceny práce.',
        'Inštalácia systému nezahŕňa licenciu ani zálohovanie či prenos Vašich údajov. Tieto úkony sa dohodnú osobitne.',
        'Pri hodinovej práci sa vopred dohodneme na odhade a cenovom limite. Doprava sa riadi cenníkom na kontaktnej stránke.',
    ],
],
    'web-it' => [
    'items' => [
        ['Opravy chýb na existujúcom webe', '25 €/hod.'],
        ['Nastavenie hostingu, domény alebo DNS', '25 €/hod.'],
    ],
    'notes' => [
        'Sadzba je za technickú prácu. Poplatky za hosting, doménu a prípadné licencie nie sú zahrnuté.',
        'Pred začatím práce sa dohodneme na odhade rozsahu a cenovom limite. Tvorbu nových webstránok neponúkam.',
    ],
],
    '3d' => [
    'items' => [
        ['Jednoduché 3D modelovanie a úpravy modelu', '15 €/hod.'],
        ['3D tlač — minimálna cena zákazky', '10 €'],
    ],
    'notes' => [
        'Cena tlače závisí od materiálu, jeho spotreby, času tlače a potrebných dokončovacích úprav. Modelovanie sa účtuje osobitne; ak dodáte použiteľný hotový model, nie je potrebné.',
        'Presnú cenu modelovania aj tlače Vám potvrdím po posúdení modelu, rozmerov alebo náčrtu. Pri hodinovom modelovaní sa vopred dohodneme na odhade a cenovom limite.',
    ],
],
    'iot' => [
    'items' => [
        ['IoT zariadenie alebo jednoduchý prototyp', 'Individuálna ponuka'],
    ],
    'notes' => [
        'Cena závisí od rozsahu projektu, súčiastok, programovania a prípadnej krabičky alebo 3D tlače.',
        'Pošlite, prosím, stručný popis toho, čo má zariadenie robiť. Pred realizáciou Vám pripravím ponuku s rozpisom práce a súčiastok.',
    ],
],
    'transport' => [
        'items' => [
            ['Vyzdvihnutie do 20 km od Lukavice', 'Zdarma'],
            ['Vyzdvihnutie nad 20 km od Lukavice', '0,35 €/km'],
        ],
        'notes' => [
            'Hranica 20 km sa počíta po cestnej trase jedným smerom. Pri vzdialenosti nad 20 km sa účtuje celá cesta z Lukavice k Vám a späť; cena zahŕňa palivo aj opotrebovanie auta.',
            'Napríklad 40 km tam a 40 km späť stojí 28 €. Vyzdvihnutie aj cenu dopravy Vám potvrdím vopred; servis sa účtuje samostatne.',
        ],
    ],
];

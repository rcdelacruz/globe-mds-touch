<?php
$prepaid = array();
$prepaid['call']=array(
        array(
            'title'=>'Super Sakto Calls',
            'desc'=>'Call your friends on Globe and TM for only P0.15 per second.',
            'send'=>'232',
            'flag'=>'replace 0 in number',
            ),
        array(
            'title'=>'DUO 350',
            'desc'=>'Mobile and landline in one, so just DUO your prepaid for 14 days at P350',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Pick your location',
            'choices'=>array(
                array('name'=>'Metro Manila / Rizal', 'keyword'=>'DUO MM 350'),
                array('name'=>'Cebu','keyword'=>'DUO CEB 350'),
                array('name'=>'Bohol','keyword'=>'DUO TAG 350'),
                array('name'=>'Capiz','keyword'=>'DUO ROX 350'),
                array('name'=>'Negros Occidental','keyword'=>'DUO NEGOC 350'),
                array('name'=>'Quezon','keyword'=>'DUO QZN 350'),
                array('name'=>'Northern Samar','keyword'=>'DUO NTSMR 350'),
                array('name'=>'Davao del Sur','keyword'=>'DUO DAV 350'),
                array('name'=>'Batangas','keyword'=>'DUO BAT 350'),
                array('name'=>'Antique','keyword'=>'DUO ANT 350'),
                array('name'=>'Bulacan','keyword'=>'DUO BUL 350'),
                array('name'=>'Cavite','keyword'=>'DUO CAV 350'),
                array('name'=>'Laguna','keyword'=>'DUO LAGU 350'),
                array('name'=>'Leyte','keyword'=>'DUO LEY 350'),
                array('name'=>'Negros Oriental','keyword'=>'DUO NEGOR 350'),
                array('name'=>'Pangasinan','keyword'=>'DUO PANG 350'),
                array('name'=>'South Cotabato','keyword'=>'DUO SCOT 350'),
                ),
            ),
        array(
            'title'=>'DUO 450',
            'desc'=>'Mobile and landline in one, so just DUO your prepaid for 30 days at P450',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Pick your location',
            'choices'=>array(
                array('name'=>'Metro Manila / Rizal', 'keyword'=>'DUO MM 450'),
                array('name'=>'Cebu','keyword'=>'DUO CEB 450'),
                array('name'=>'Bohol','keyword'=>'DUO TAG 450'),
                array('name'=>'Capiz','keyword'=>'DUO ROX 450'),
                array('name'=>'Negros Occidental','keyword'=>'DUO NEGOC 450'),
                array('name'=>'Quezon','keyword'=>'DUO QZN 450'),
                array('name'=>'Northern Samar','keyword'=>'DUO NTSMR 450'),
                array('name'=>'Davao del Sur','keyword'=>'DUO DAV 450'),
                array('name'=>'Batangas','keyword'=>'DUO BAT 450'),
                array('name'=>'Antique','keyword'=>'DUO ANT 450'),
                array('name'=>'Bulacan','keyword'=>'DUO BUL 450'),
                array('name'=>'Cavite','keyword'=>'DUO CAV 450'),
                array('name'=>'Laguna','keyword'=>'DUO LAGU 450'),
                array('name'=>'Leyte','keyword'=>'DUO LEY 450'),
                array('name'=>'Negros Oriental','keyword'=>'DUO NEGOR 450'),
                array('name'=>'Pangasinan','keyword'=>'DUO PANG 450'),
                array('name'=>'South Cotabato','keyword'=>'DUO SCOT 450'),
                ),
            ),
        array(
            'title'=>'Super DUO',
            'desc'=>'Get the wildest unlimited mobile-to-landline call service plus unlimited calls to any Globe/TM mobile phone nationwide!',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Pick your location',
            'choices'=>array(
                array('name'=>'Metro Manila / Rizal', 'keyword'=>'SUPERDUO MM 599'),
                array('name'=>'Cebu','keyword'=>'SUPERDUO CEB 599'),
                array('name'=>'Bohol','keyword'=>'SUPERDUO TAG 599'),
                array('name'=>'Capiz','keyword'=>'SUPERDUO ROX 599'),
                array('name'=>'Negros Occidental','keyword'=>'SUPERDUO NEGOC 599'),
                array('name'=>'Quezon','keyword'=>'SUPERDUO QZN 599'),
                array('name'=>'Northern Samar','keyword'=>'SUPERDUO NTSMR 599'),
                array('name'=>'Davao del Sur','keyword'=>'SUPERDUO DAV 599'),
                array('name'=>'Batangas','keyword'=>'SUPERDUO BAT 599'),
                array('name'=>'Antique','keyword'=>'SUPERDUO ANT 599'),
                array('name'=>'Bulacan','keyword'=>'SUPERDUO BUL 599'),
                array('name'=>'Cavite','keyword'=>'SUPERDUO CAV 599'),
                array('name'=>'Laguna','keyword'=>'SUPERDUO LAGU 599'),
                array('name'=>'Leyte','keyword'=>'SUPERDUO LEY 599'),
                array('name'=>'Negros Oriental','keyword'=>'SUPERDUO NEGOR 599'),
                array('name'=>'Pangasinan','keyword'=>'SUPERDUO PANG 599'),
                array('name'=>'South Cotabato','keyword'=>'SUPERDUO SCOT 599'),
                ),
            ),
            array('title'=>'Tawag 236','desc'=>'20 minutes of chika for only 20 pesos!', 'send'=>'236',
                    'flag'=>'replace 0 in number',
                 ),

            );
$prepaid['text']=array(
        array(
            'title'=>'SUPERUNLI ALLTXT 25',
            'desc'=>'Unli texts to all networks, 1 hour of mobile internet and 10 minutes of calls to Globe/TM, valid for 1 day.',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'UALLPLUS25',
            ),
        array( 'title'=>'SUPERFREE WEEKENDS',
            'desc'=>'Get FREE 250 texts + 1 hour of cellphone internet on the weekend when you load P199 & up from Monday to Friday',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'SUPERFREE',
            ),
        array('title'=>'SUPERALL Txt 20',
            'desc'=>'Pasok ka with P20/day and 250 SMS to all networks!',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'ATXT20',
            ),
        array(
            'title'=>'SULITXT 15',
            'desc'=>'For only 15 pesos, send 100 text messages to other Globe/TM subscribers all in one day!',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'SULITXT 15',
            ),
        array(
                'title'=>'Unlitxt',
                'desc'=>'Enjoy sending unlimited text messages to Globe/TM subscribers all day, all night.',
                'send'=>'8888',
                'flag'=>'choices',
                'label'=>'Choose your UNLITXT',
                'choices'=>array(
                    array('name'=>'Php20 for 1 day','keyword'=>'UNLITXT20'),
                    array('name'=>'Php40 for 2 days','keyword'=>'UNLITXT40'),
                    array('name'=>'Php80 for 5 days','keyword'=>'UNLITXT80'),
                    ),
             ),
        );
$prepaid['surf']=array(
        array(
            'title'=>'Power Surf',
            'desc'=>'Enjoy consumable internet surfing on your phone with Globe Power Surf!',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your POWERSURF',
            'choices'=>array(
                array('name'=>'20 MB for P15 (valid for 1 day)','keyword'=>'POWERSURF15'),
                array('name'=>'50 MB for P30 (valid for 1 day)','keyword'=>'POWERSURF30'),
                array('name'=>'100 MB for P50 (valid for 3 days)','keyword'=>'POWERSURF50'),
				array('name'=>'50 MB for P99 (valid for 30 days)','keyword'=>'POWERSURF99'),
				array('name'=>'300 MB for P299 (valid for 30 days)','keyword'=>'POWERSURF299'),
				array('name'=>'1 GB for P499 (valid for 30 days)','keyword'=>'POWERSURF499')
                ),
            ),
        array(
            'title'=>'Super Surf',
            'desc'=>'Chat, download, email, and surf, all day, all night.',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your SUPERSURF',
            'choices'=>array(
                array('name'=>'Php50 for 1 day','keyword'=>'SUPERSURF50'),
                array('name'=>'Php220 for 5 days','keyword'=>'SUPERSURF220'),
                ),
            ),
        );
$prepaid['combo']=array(
        array(
            'title'=>'SUPER UNLI',
            'desc'=>'Call and text all your Globe and TM contacts up to sawa! For only P25/day and P150/7 days!',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your SUPER UNLI',
            'choices'=>array(
                array('name'=>'P25/day','keyword'=>'SUPERUNLI25'),
                array('name'=>'P150/7 days','keyword'=>'SUPERUNLI150'),
                ),
            ),
        );
$postpaid = array();
$postpaid['call']=array(
        /*array(
            'title'=>'Super Sakto Calls',
            'desc'=>'Call your friends on Globe and TM for only P0.15 per second.',
            'send'=>'232',
            'flag'=>'replace 0 in number',
            ),
            */
        array(
            'title'=>'MY DUO',
            'desc'=>'Mobile and landline in one, so just DUO your postpaid.',
            'send'=>'8888',
            'flag'=>'direct',
	    'keyword'=>'MYDUO INFO'
            ),
        array(
            'title'=>'MY SUPER DUO',
            'desc'=>'Get the wildest unlimited mobile-to-landline call service plus unlimited calls to any Globe/TM mobile phone nationwide!',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Pick your location',
            'choices'=>array(
                array('name'=>'Metro Manila / Rizal','keyword'=>'MYSUPERDUO MM ON'),
                array('name'=>'Cebu','keyword'=>'MYSUPERDUO CEB ON'),
                array('name'=>'Bohol','keyword'=>'MYSUPERDUO TAG ON'),
                array('name'=>'Capiz','keyword'=>'MYSUPERDUO ROX ON'),
                array('name'=>'Negros Occidental','keyword'=>'MYSUPERDUO NEGOC ON'),
                array('name'=>'Quezon','keyword'=>'MYSUPERDUO QZN ON'),
                array('name'=>'Northern Samar','keyword'=>'MYSUPERDUO NTSMR ON'),
                array('name'=>'Davao del Sur','keyword'=>'MYSUPERDUO DAV ON'),
                array('name'=>'Batangas','keyword'=>'MYSUPERDUO BAT ON'),
                array('name'=>'Antique','keyword'=>'MYSUPERDUO ANT ON'),
                array('name'=>'Bulacan','keyword'=>'MYSUPERDUO BUL ON'),
                array('name'=>'Cavite','keyword'=>'MYSUPERDUO CAV ON'),
                array('name'=>'Laguna','keyword'=>'MYSUPERDUO LAGU ON'),
                array('name'=>'Leyte','keyword'=>'MYSUPERDUO LEY ON'),
                array('name'=>'Negros Oriental','keyword'=>'MYSUPERDUO NEGOR ON'),
                array('name'=>'Pangasinan','keyword'=>'MYSUPERDUO PANG ON'),
                array('name'=>'South Cotabato','keyword'=>'MYSUPERDUO SCOT ON'),
                ),
            ),
           /* array('title'=>'Tawag 236','desc'=>'20 minutes of chika for only 20 pesos!', 'send'=>'236',
                    'flag'=>'replace 0 in number',
                 ),
                */
            );
$postpaid['text']=array(
       /* array(
            'title'=>'SUPERALL Txt 20',
            'desc'=>'Get 200 local texts to all networks (Smart, Sun, Red, TNT) for just P20 for 1 day.',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'ATXT20',
            ),
        array(
            'title'=>'SULITXT 15',
            'desc'=>'For only 15 pesos, send 100 text messages to other Globe/TM subscribers all in one day!',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'SULITXT 15',
            ),

        array(
                'title'=>'Unlitxt',
                'desc'=>'Enjoy sending unlimited text messages to Globe/TM subscribers all day, all night.',
                'send'=>'8888',
                'flag'=>'choices',
                'label'=>'Choose your UNLITXT',
                'choices'=>array(
                    array('name'=>'Php20 for 1 day','keyword'=>'UNLITXT20'),
                    array('name'=>'Php40 for 2 days','keyword'=>'UNLITXT40'),
                    array('name'=>'Php80 for 5 days','keyword'=>'UNLITXT80'),
                    ),
             ),
        );*/
        array(
            'title'=>'MY SUPER TXT ALL',
            'desc'=>'Unlimited texts to all networks—Smart, Sun, Globe, Talk \'n Text, Red and TM—for only P599/30 days.',
            'send'=>'8888',
            'flag'=>'direct',
            'keyword'=>'MYSUPERTXTALL ON'
            )
        );
$postpaid['surf']=array(
        array(
            'title'=>'Power Surf',
            'desc'=>'Surf wherever, whenever any which way you want.',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your POWERSURF',
            'choices'=>array(
                array('name'=>'50 MB of mobile data for P99','keyword'=>'POWERSURF 99'),
                array('name'=>'300 MB of mobile data for only P299','keyword'=>'POWERSURF 299'),
                array('name'=>'1 GB of mobile data for only P499','keyword'=>'POWERSURF 499'),
                ),
            ),
        array(
            'title'=>'Super Surf',
            'desc'=>'Chat, download, email, and surf, all day, all night.',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your SUPERSURF',
            'choices'=>array(
                array('name'=>'Php50 for 1 day','keyword'=>'SUPERSURF ON 50'),
                array('name'=>'Php220 for 5 days','keyword'=>'SUPERSURF ON 220'),
                array('name'=>'Php999 for 30 days','keyword'=>'MYSUPERSURF ON',),
                ),
            ),
        );
$postpaid['combo']=array(
        array(
            'title'=>'SUPER UNLI',
            'desc'=>'Call and text all your Globe and TM contacts up to sawa! For only P25/day and P150/7 days!',
            'send'=>'8888',
            'flag'=>'choices',
            'label'=>'Choose your SUPER UNLI',
            'choices'=>array(
                array('name'=>'P25/day','keyword'=>'SUPERUNLI25'),
                array('name'=>'P150/7 days','keyword'=>'SUPERUNLI150'),
                ),
            ),
        );


$config['prepaid'] = $prepaid;
$config['postpaid'] = $postpaid;

?>


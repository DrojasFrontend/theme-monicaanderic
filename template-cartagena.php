<?php
/* 
* Template Name: Cartagena
*/

get_header(); 

$places = [
  "hotels" => [
    "id" => "hotels",
    "title" => "Hotels",
    "title_es" => "Hotels",
    "img" => THEME_IMG . 'icons/icon-hotel-2.svg',
    "info" => "We welcome you to stay at any of the beautiful hotels or colonial homes in Cartagena has to offer. The bride and groom will be staying at the SOFITEL LEGEND SANTA CLARA HOTEL for the guests who would like to join them.",
    "places" => [
        // [
        //     "name" => "Hotel Charleston Santa Teresa",
        //     "address" => "Cra. 3 # 31 - 23",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6649494",
        //     "link" => "https://www.hotelcharlestonsantateresa.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-6.webp',
        // ],
        // [
        //     "name" => "Hyatt Regency Hotel",
        //     "address" => "Cra. 1 # 12 - 118",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6941234",
        //     "link" => "https://go.hyatt.com/link/v2/eae__GKM5JBXpUGUPAuOwJCzfpC-lL3kAXMEy",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-14.webp',
        // ],
        // [
        //     "name" => "HOTEL INTERCONTINENTAL",
        //     "address" => "Cra. 1 # 5 - 01",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6424250",
        //     "link" => "https://www.intercartagena.com/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-0.webp',
        // ],
        // [
        //     "name" => "Sofitel Legend Santa Clara",
        //     "address" => "Calle Del Torno # 39 - 29",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6504700",
        //     "link" => "https://www.sofitellegendsantaclara.com/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-1.webp',
        // ],
        // [
        //     "name" => "Casa Lola",
        //     "address" => "Calle del Guerrero # 29 - 108",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6641538",
        //     "link" => "https://casalola.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-2.webp',
        // ],
        // [
        //     "name" => "Casa del Arzobispado",
        //     "address" => "Cra. 5 # 34 - 52",
        //     "city" => "Centro Histórico, Cartagena",
        //     "phone" => "+57 317 5098738",
        //     "link" => "https://www.hotelcasadelarzobispado.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-3.webp',
        // ],
        // [
        //     "name" => "Movich Hotel",
        //     "address" => "Calle de Vélez Danies # 4 – 39",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (601) 4824466",
        //     "link" => "https://www.movichhotels.com/es/hotel-movichcartagena-en-cartagena/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-4.webp',
        // ],
        // [
        //     "name" => "Bastion Luxury Hotel",
        //     "address" => "Calle del Sargento # 6 - 87",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6424100",
        //     "link" => "https://www.bastionluxuryhotel.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-5.webp',
        // ],
        // [
        //     "name" => "Hotel San Agustín",
        //     "address" => "Calle de la Universidad # 36 - 44",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6810000",
        //     "link" => "https://www.hotelcasasanagustin.com/es/home.html",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-7.webp',
        // ],
        // [
        //     "name" => "Casa Pestagua",
        //     "address" => "Cra. 3 # 33 - 63",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6649510",
        //     "link" => "https://casapestagua.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-8.webp',
        // ],
        // [
        //     "name" => "Casa La Merced",
        //     "address" => "Calle de Don Sancho # 36 - 165",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6686622",
        //     "link" => "https://mustique.co/bienvenidos/casas/la-merced/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-9.webp',
        // ],
        // [
        //     "name" => "Bovedas de Santa Clara",
        //     "address" => "Cra. 8 # 39 - 114",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6504465",
        //     "link" => "https://www.bovedasdesantaclara.com",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-10.webp',
        // ],
        // [
        //     "name" => "Nacar By Hilton",
        //     "address" => "Calle Del Curato # 38 - 99",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6517050",
        //     "link" => "https://www.hilton.com/es/hotels/ctgmaqq-nacar-hotel-cartagena/",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-11.webp',
        // ],
        // [
        //     "name" => "Hotel Casa Don Luis",
        //     "address" => "Calle del Cuartel # 36 – 16",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 314 6669101",
        //     "link" => "https://www.farandahotels.com/hotel/hotel-casa-don-luis-cartagena-by-faranda-boutique",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-12.webp',
        // ],
        // [
        //     "name" => "Voila By Huespedia",
        //     "address" => "Calle de las Carretas # 34 - 85",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 300 9121453",
        //     "link" => "https://www.bevoila.com/home-es",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-13.webp',
        // ],
        // [
        //     "name" => "Hotel Estelar",
        //     "address" => "Cra. 1 # 11 - 116",
        //     "city" => "Cartagena, Colombia",
        //     "phone" => "+57 (605) 6517303",
        //     "link" => "https://www.hotelesestelar.com/es/destinos/colombia/cartagena-de-indias",
        //     "image" => THEME_IMG . 'places-cartagena/hoteles-15.webp',
        // ],
        [
            "name" => "Sofitel<br>Barú Calablanca",
            "address" => "It’s close to Cartagena, making it an excellent if you decide to",
            "city" => "extend your stay.",
            "phone" => "+57 (605) 6411690",
            "link" => "https://www.sofitelbarucalablanca.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-001.png',
            // Información adicional a mostrar en la tarjeta
            "info" => [
                "<strong>Promotional Code:</strong><br>fabinellit2026",
                "<strong>Contact:</strong><br>Jackeline.diaz@sofitel.com<br>Daniela.campo@sofitel.com",
            ],
        ],
        [
            "name" => "Hotel Quadrifolio",
            "address" => "Cra. 5 # 36 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6641858",
            "link" => "https://hotelquadrifolio.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-002.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>fabinellit2026",
            ],
        ],
        [
            "name" => "Hotel <br> Sonesta",
            "address" => "Cra. 9 No. 35 - 104",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517095",
            "link" => "https://www.sonestacartagena.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-003.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>FabiNelli2026",
                "<strong>Contact:</strong><br>reservas@sonestacartagena.com<br>con código,",
                "<em>*The prices start at $100 USD, including breakfast.</em>",
            ],
        ],
        [
            "name" => "Hotel Bovedas <br> de Santa Clara",
            "address" => "Cra. 8 # 39 - 114",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504465",
            "link" => "https://all.accor.com/hotel/A232/index.es.shtml",
            "image" => THEME_IMG . 'places-cartagena/cartagena-004.png',
            "info" => [
                "<em>*Including access to the Santa Clara Hotel facilities (pools, restaurants, etc.).</em>",
            ],
        ],
        [
            "name" => "Hotel Hyatt <br> Regency",
            "address" => "Cra. 1 # 12 - 118",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6941234",
            "link" => "https://www.hyatt.com/hyatt-regency/es-ES/ctgrc-hyatt-regency-cartagena",
            "image" => THEME_IMG . 'places-cartagena/cartagena-005.png',
            "info" => [
                "<strong>Promotional Link:</strong><br><a href=\"hyatt.com/en-US/group-booking/CTGRC/G-OD00\" target=\"_blank\">hyatt.com/en-US/group-booking/CTGRC/G-OD00</a>",
            ],
        ],
        [
            "name" => "Hotel<br>Las Américas",
            "address" => "Anillo vial, Sector Cielo Mar",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6930592",
            "link" => "https://www.hotellasamericas.com.co",
            "image" => THEME_IMG . 'places-cartagena/cartagena-006.png',
            "info" => [
                "<strong>Promotional Code:</strong><br>50778",
                "<strong>Link Casa de playa Dólares:</strong><br><a href=\"https://bitly.cx/WgVV9\" target=\"_blank\">bitly.cx/WgVV9</a>",
                "<strong>Promotional Code:</strong><br>73585",
                "<strong>Link Torre del mar Dólares:</strong><br><a href=\"https://bitly.cx/L7kD\" target=\"_blank\">bitly.cx/L7kD</a>",
            ],
        ],
        [
            "name" => "OSH<br>Hotel",
            "address" => "Calle 31 # 10 - 77",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 304 2549463",
            "link" => "https://oshhotels.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-007.png',
            "info" => [
                "<strong>Promotional Link:</strong><br><a href=\"https://reservations.travelclick.com/115574?RatePlanId=10231023\" target=\"_blank\">reservations.travelclick.com/115574? RatePlanId=10231023</a>",
                "<strong>Jose Guette</strong><br>Commercial Executive<br>Móvil: +57 304 2549905<br>Jose@oshhotels.com",
                "<em>*The wedding weekend will feature complimentary 20-minute massages and a free cold plunge to celebrate the occasion.</em>",
            ],
        ],
        [
            "name" => "Hotel Estelar",
            "address" => "Cra. 1 # 11 - 116",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6517303",
            "link" => "https://www.estelarcartagenadeindias.com/en/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-008.png',
        ],
        [
            "name" => "Hotel Casa<br>San Agustín",
            "address" => "Calle de la Universidad # 36 - 44",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6810000",
            "link" => "https://hotelcasasanagustin.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-009.png',
        ],
        [
            "name" => "Hotel Casa<br>Pestagua",
            "address" => "Cra. 3 # 33 - 63",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649510",
            "link" => "https://casapestagua.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-010.png',
        ],
        [
            "name" => "Sofitel Legend<br>Santa Clara",
            "address" => "Calle Del Torno # 39 - 29",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/cartagena-011.png',
        ],
        [
            "name" => "Hotel Charleston<br>Santa Teresa",
            "address" => "Cra. 3 # 31 - 23",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6649494",
            "link" => "https://www.hotelcharlestonsantateresa.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-012.png',
        ],
        [
            "name" => "Hotel Casa<br>Carolina",
            "address" => "Cra. 5 # 34 - 14",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6543330",
            "link" => "https://www.hotelcasacarolina.com",
            "image" => THEME_IMG . 'places-cartagena/cartagena-013.png',
        ],
    ],
  ],
  "restaurants" => [
    "id" => "restaurants",
    "title" => "Restaurants",
    "title_es" => "Restaurants",
    "img" => THEME_IMG . 'icons/icon-restaurants-2.svg',
    "places" => [
        [
            "name" => "D'Res",
            "address" => "Cra. 17 # 24 - 90",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685513",
            "link" => "https://www.instagram.com/restaurantedres/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-1.webp',
        ],
        [
            "name" => "Rabo de Pez",
            "address" => "Calle 32 # 5 - 09 Local 3",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 4333372",
            "link" => "https://www.instagram.com/rabodepez/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-2.webp',
        ],
        [
            "name" => "Uma Cantina Peruana",
            "address" => "Calle del Curato # 38 - 99",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 302 4622665",
            "link" => "https://www.umacantinaperuanactg.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-3.webp',
        ],
        [
            "name" => "Candé",
            "address" => "Calle de la Serrezuela # 39 - 10",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6685291",
            "link" => "https://restaurantecande.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-4.webp',
        ],
        [
            "name" => "Alma",
            "address" => "Calle San Agustín # 36",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6810050",
            "link" => "https://www.almacolombia.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-5.webp',
        ],
        [
            "name" => "La Casa de Socorro",
            "address" => "Frente al C.C. Getsemaní",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 315 7186666",
            "link" => "https://www.instagram.com/restaurantelacasadesocorro/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-6.webp',
        ],
        [
            "name" => "Carmen",
            "address" => "Calle 38 # 8 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 310 3949344",
            "link" => "https://www.instagram.com/carmenrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-7.webp',
        ],
        [
            "name" => "Harry's Sasson",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.hotelcharlestonsantateresa.com/es/Restaurantes-Bar/harry-s-cartagena",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-8.webp',
        ],
        [
            "name" => "La Cocina de Pepina",
            "address" => "Calle 25 # 9A - 06 L. 2",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 300 8565189",
            "link" => "https://www.instagram.com/lacocinadepepina/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-9.webp',
        ],
        [
            "name" => "Agua de León",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/aguadeleonrestaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-10.webp',
        ],
        [
            "name" => "Mar y Zielo",
            "address" => "Cra. 5 # 34 - 63",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6911393",
            "link" => "https://www.maryzielo.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-11.webp',
        ],
        [
            "name" => "Celele",
            "address" => "Cra. 10C # 29 - 200",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 7420389",
            "link" => "https://celelerestaurante.com",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-12.webp',
        ],
        [
            "name" => "La Vitrola",
            "address" => "Cra. 2 # 33 - 66",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648243",
            "link" => "https://www.instagram.com/lavitrolacartagena/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-13.webp',
        ],
        [
            "name" => "Mardeleva",
            "address" => "Nuestra Sra. del Carmen # 33 - 41",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 317 6680456",
            "link" => "https://hotelelmarques.co/restaurante/",
            "image" => THEME_IMG . 'places-cartagena/restaurantes-14.webp',
        ],
    ]
  ],
  "bars_pubs" => [
    "id" => "bars",
    "title" => "Bars & Pubs",
    "title_es" => "BARS & PUBS",
    "img" => THEME_IMG . 'icons/icon-bars-2.svg',
    "places" => [
        [
            "name" => "El Barón",
            "address" => "Cra. 4 # 31 - 7",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 6463018",
            "link" => "https://www.instagram.com/elbaroncafe/",
            "image" => THEME_IMG . 'places-cartagena/bares-1.webp',
        ],
        [
            "name" => "Mirador Gastro Bar",
            "address" => "Cra. 7 # 32 - 77",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 5109747",
            "link" => "https://www.miradorgastrobar.com",
            "image" => THEME_IMG . 'places-cartagena/bares-2.webp',
        ],
        [
            "name" => "Alquímico",
            "address" => "Calle Colegio # 34 - 24",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 5331932",
            "link" => "https://alquimico.com",
            "image" => THEME_IMG . 'places-cartagena/bares-3.webp',
        ],
        [
            "name" => "La Jugada",
            "address" => "Cra. 6 # 34 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 316 3194481",
            "link" => "https://la-jugada.cluvi.co",
            "image" => THEME_IMG . 'places-cartagena/bares-4.webp',
        ],
        [
            "name" => "Buena Vida",
            "address" => "Calle del Porvenir, Esquina",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 322 3061025",
            "link" => "https://www.instagram.com/buenavidamarisqueria_/",
            "image" => THEME_IMG . 'places-cartagena/bares-5.webp',
        ],
        [
            "name" => "El Coro",
            "address" => "Cra. 8 # 39 - 36",
            "city" => "Hotel Santa Clara",
            "phone" => "+57 (605) 6504700",
            "link" => "https://www.sofitellegendsantaclara.com/",
            "image" => THEME_IMG . 'places-cartagena/bares-6.webp',
        ],
    ]
  ],
  "brunch_desserts" => [
    "id" => "brunch",
    "title" => "Brunch & Desserts",
    "title_es" => "Brunch & Desserts",
    "img" => THEME_IMG . 'icons/icon-brunch-2.svg',
    "places" => [
        [
            "name" => "Ely Café",
            "address" => "Calle 7 # 2 - 50",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 316 8752466",
            "link" => "https://elyreposteria.com/elycafe/",
            "image" => THEME_IMG . 'places-cartagena/postres-1.webp',
        ],
        [
            "name" => "Pascal",
            "address" => "Calle 30 # 8B - 108",
            "city" => "Getsemaní, Cartagena",
            "phone" => "+57 319 2481245",
            "link" => "https://www.instagram.com/quienespascal/",
            "image" => THEME_IMG . 'places-cartagena/postres-2.webp',
        ],
        [
            "name" => "Época Espresso",
            "address" => "Cra. 5 # 34 - 52",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 8008072",
            "link" => "https://www.instagram.com/weare.epoca/",
            "image" => THEME_IMG . 'places-cartagena/postres-3.webp',
        ],
        [
            "name" => "Juan Valdéz Café",
            "address" => "Cra. 2 # 7 - 17",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6651156",
            "link" => "https://juanvaldez.com",
            "image" => THEME_IMG . 'places-cartagena/postres-4.webp',
        ],
        [
            "name" => "La Paletteria",
            "address" => "Calle 35 # 03 - 86 local 2",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 56661579",
            "link" => "https://www.instagram.com/lapaletteria/",
            "image" => THEME_IMG . 'places-cartagena/postres-5.webp',
        ],
        [
            "name" => "Café Quindío",
            "address" => "C.C. La Serrezuela",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 320 6936900",
            "link" => "https://www.instagram.com/cafequindio.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-6.webp',
        ],
        [
            "name" => "Café San Alberto",
            "address" => "Cra. 3 # 35 - 18",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 318 7964457",
            "link" => "https://cafesanalberto.com.co/",
            "image" => THEME_IMG . 'places-cartagena/postres-7.webp',
        ],
        [
            "name" => "El Café Ábaco",
            "address" => "Calle 36 # 3 - 86",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6786143",
            "link" => "https://www.abacolibros.com",
            "image" => THEME_IMG . 'places-cartagena/postres-8.webp',
        ],
    ]
  ],
  "boutiques" => [
    "id" => "boutiques",
    "title" => "Boutiques",
    "title_es" => "Boutiques",
    "img" => THEME_IMG . 'icons/icon-boutiques-2.svg',
    "places" => [
        [
            "name" => "C.C. La Serrezuela",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6421795",
            "link" => "https://www.instagram.com/laserrezuela/?hl=es",
            "image" => THEME_IMG . 'places-cartagena/boutiques-1.webp',
        ],
        [
            "name" => "Malva",
            "address" => "Cra. 11 # 39 - 21",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 300 3278066",
            "link" => "https://www.instagram.com/malva.col/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-2.webp',
        ],
        [
            "name" => "St. Dom",
            "address" => "Cra. 3 # 33 - 70",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6354380",
            "link" => "https://www.instagram.com/stdomofficial/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-3.webp',
        ],
        [
            "name" => "Silvia Tcherassi",
            "address" => "Calle 31 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6790051",
            "link" => "https://co.silviatcherassi.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-4.webp',
        ],
        [
            "name" => "Francesca Miranda",
            "address" => "Calle 31 # 3 - 25",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6648821",
            "link" => "https://francescamiranda.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-5.webp',
        ],
        [
            "name" => "Beatriz Camacho",
            "address" => "Calle 33 # 3 - 04",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 320 5651113",
            "link" => "https://beatrizcamacho.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-6.webp',
        ],
        [
            "name" => "Ketty Tinoco",
            "address" => "Calle Balocco # 33 - 01",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 301 6287824",
            "link" => "https://kettytinoco.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-8.webp',
        ],
        [
            "name" => "Azulu",
            "address" => "Cra. 3 # 31 - 11",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6642724",
            "link" => "https://azulu.co",
            "image" => THEME_IMG . 'places-cartagena/boutiques-9.webp',
        ],
        [
            "name" => "Boutique Gabriel",
            "address" => "Cra. 2 # 9 – 148 L. 5",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6658020",
            "link" => "http://www.boutiquegabriel.com",
            "image" => THEME_IMG . 'places-cartagena/boutiques-10.webp',
        ],
        [
            "name" => "D'Clase",
            "address" => "Av. San Martin 5 – 84T L.201",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 300 7889362",
            "link" => "https://www.instagram.com/dclase.co/",
            "image" => THEME_IMG . 'places-cartagena/boutiques-11.webp',
        ],
    ]
  ],
  "salones_de_belleza" => [
    "id" => "beauty",
    "title" => "Beauty Salons",
    "title_es" => "Beauty Salons",
    "img" => THEME_IMG . 'icons/icon-beauty-salons-2.svg',
    "places" => [
        [
            "name" => "The Salon Peluquería",
            "address" => "Cra 3 # 4 - 23 Local 1",
            "city" => "Bocagrande, Cartagena",
            "phone" => "+57 (605) 6783950",
            "link" => "https://www.instagram.com/thesaloncartagena/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-1.webp',
        ],
        [
            "name" => "Franklin Ramos",
            "address" => "Cra. 11 # 39 - 21 L. S23",
            "city" => "C.C. La Serrezuela - Cartagena",
            "phone" => "+57 316 5294386",
            "link" => "https://www.instagram.com/franklinramossalon.ctg/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-2.webp',
        ],
        [
            "name" => "Portada Peluqueria",
            "address" => "Cra. 3 # 4 - 21",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 (605) 6524223",
            "link" => "https://www.instagram.com/portadapeluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-3.webp',
        ],
        [
            "name" => "Carlos Torres",
            "address" => "Av. San Martín # 5 - 84 L. 201",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 316 6091227",
            "link" => "https://www.instagram.com/carlostorres.studio10/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-4.webp',
        ],
        [
            "name" => "Diego Moya",
            "address" => "Calle de la Serrezuela # 39 - 02",
            "city" => "Cartagena, Colombia",
            "phone" => "+57 (605) 6685291",
            "link" => "https://www.instagram.com/diegomoyasalon/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-5.webp',
        ],
        [
            "name" => "Gloss Peluqueria",
            "address" => "Cra. 3 # 31 - 19",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 (605) 6501015",
            "link" => "https://www.instagram.com/gloss_peluqueria/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-6.webp',
        ],
        [
            "name" => "Andrea Rodríguez",
            "address" => "Calle 10A # 2 - 38",
            "city" => "Boca Grande, Cartagena",
            "phone" => "+57 301 7929773",
            "link" => "https://www.instagram.com/andrearodriguezbeauty/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-7.webp',
        ],
        [
            "name" => "Karla B. López",
            "address" => "Calle de Ayos # 4 - 46",
            "city" => "Centro Histórico, Cartagena",
            "phone" => "+57 315 2780517",
            "link" => "https://www.instagram.com/karlabrigittemakeup/",
            "image" => THEME_IMG . 'places-cartagena/peluquerias-8.webp',
        ],
    ]
  ]
]
?>

<main class="customMainCartagena position-relative">
    <div class="position-absolute top-0 start-0 w-100 z-1">
        <!-- <img class="w-100" src="<?php echo THEME_IMG; ?>bg-cartagena-3.webp" alt="Background Cartagena"> -->
        <img class="w-100 h-100 object-fit-cover position-absoluto top-0 start-0" src="<?php echo THEME_IMG; ?>bg-cartagena.webp" alt="Background Cartagena">
    </div>
    <div class="customSectionBox customSectionBoxWhite position-absolute top-0 start-0 w-100 h-100"></div>
    <div class="py-xl-5 pt-5 pb-5"></div>
    <div class="py-xl-5 pt-5"></div>
    <div class="py-xl-5"></div>
    <div class="py-xl-5"></div>
    <div class="py-xl-5"></div>
    <section class="customSectionCartagenaPlaces position-relative z-1" id="travel-info">
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 mx-auto">
                        <div class="position-relative customSectionBox text-center py-5 shadow-1 rounded-5">
                            <div class="col-12 col-xl-9 mx-auto text-start px-xl-0 px-3">
                                <div class="py-xl-3"></div>
                                <p class="font-titulo fs-xl-1-lg fs-2 text-center text-secondary">Travel Info</p>
                                <!-- <h2 class="font-titulo fs-xl-lg-1 fs-2-md text-center">Cartagena</h2> -->
                                <div class="d-none align-items-center py-3 gap-3">
                                    <div class="icon d-none">
                                        <img class="w-100" src="<?php echo THEME_IMG . 'icons/icon-travel-info.svg'; ?>" alt="">
                                    </div>
                                    <h2 class="fs-xl-3 uppercase">TRAVEL INFO</h2>
                                </div>
                                <div class="d-none line line--full mb-4"></div>
                                <div class="mb-xl-5">
                                    <h2 class="fs-xl-2 text-secondary letter-spacing-24 uppercase">PASSPORTS</h2>
                                    <p class="fs-xl-3 text-secondary">Please do not forget your passports!</p>
                                    <p class="fs-xl-3 text-secondary mb-4">Make sure to carefully check the expiration date.</p>
                                    <h2 class="fs-xl-2 text-secondary letter-spacing-24 uppercase">CheckMig</h2>
                                    <p class="fs-xl-3 text-secondary mb-4">Please complete the migration registration form 48 hours before your trip, as the airline requires proof of completion in order to check in. Repeat this same step for your return <a href="https://apps.migracioncolombia.gov.co/pre-registro" style="text-decoration: underline;" target="blank">Click Here</a></p>
                                    <h2 class="fs-xl-2 text-secondary letter-spacing-24 uppercase">INTERNATIONAL AIRPORT</h2>
                                    <p class="fs-xl-3 text-secondary mb-4">Several major airlines such as Latam, Delta, American Airlines, United, Aeroméxico, Copa Airlines, and Avianca offer direct flights to Rafael Núñez International Airport in Cartagena, on Colombia’s Caribbean coast. The best way to get from the airport to the walled city is by taxi or Uber. The ride takes approximately 10 to 15 minutes.</p>
                                    <p class="fs-xl-3 text-secondary mb-4">Authorized taxis are available 24 hours a day and operate with fixed fares, paid in cash: around 14,000 COP to Getsemaní, up to 18,000 COP to the hotel area in the historic center (Walled City), and approximately 30,000 COP to Bocagrande. In general, 1 USD equals about 4,100 COP. Since taxis do not always accept card payments, Uber is often a more convenient alternative.</p>
                                    <h2 class="fs-xl-2 text-secondary letter-spacing-24 uppercase">WEATHER</h2>
                                    <p class="fs-xl-3 text-secondary mb-4">March in Cartagena offers warm and sunny days, with temperatures around 31 °C (88 °F) and pleasant evenings of about 26 °C (79 °F). Rainfall is minimal during this season, and the sea remains a delightful 27–28 °C (81–82 °F), perfect for enjoying both the city and the beach.</p>
                                    <p class="fs-xl-3 text-secondary">We recommend packing light and breathable clothing for exploring the city during the day, along with a hat, sunglasses, and sunscreen to protect yourself from the Caribbean sun. For events, light and elegant fabrics will be the best choice. Staying hydrated is essential in this warm climate, and for evenings outdoors, it may be comfortable to bring an additional light layer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-xl-5 pt-5"></div>
    
            <?php 
                $position = 0; // Contador para la posición
                foreach ($places as $key => $category) { 
                    // Definir clases según la posición numérica
                    $customClass = '';
                    if ($position === 0 || $position === 3) { // Posiciones 1 y 4
                        $customClass = 'customSectionBox customSectionBoxPink';
                    } elseif ($position === 1 || $position === 4) { // Posiciones 2 y 5
                        $customClass = 'customSectionBox customSectionBoxGreen';
                    } else { // Las demás posiciones
                        $customClass = 'customSectionBox customSectionBoxWhite';
                    }
            ?>
                <div class="position-relative z-1 <?php echo $customClass; ?>" id="<?php echo $category['id']; ?>">
                    <div class="customSectionBox position-absolute bottom-0 start-0 w-100 z-1" style="height: 300px;"></div>
                    <div class="container">
                        <div class="row box">
                            <div class="col-12 col-lg-11 mx-auto">
                                <div class="d-flex align-items-center py-5 gap-3 px-4">
                                    <div class="icon d-none align-items-center">
                                        <img class="w-100" src="<?php echo $category['img']; ?>" alt="">
                                    </div>
                                    <h2 class="fs-xl-1-sm fs-3 uppercase text-center text-secondary d-block w-100"><?php echo $category['title']; ?></h2>
                                </div>
                                <div class="d-none line line--full bg-orange mb-4"></div>
                                <?php if (!empty($category['info'])) : ?>
                                    <div class="row d-none">
                                        <div class="col-12 pe-lg-3 mb-3 px-xl-5">
                                            <p class="fs-xl-6 text-orange letter-spacing-1 mb-4"><?php echo $category['info']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="swiper placesSwiper" id="swiper-<?php echo $category['id']; ?>">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($category['places'] as $place) { ?>
                                            <div class="swiper-slide">
                                                <div class="bg-white p-3 pb-4">
                                                    <?php if ($place['image']) : ?>
                                                        <img class="w-100 customSectionCartagenaPlaces__img mb-3" src="<?php echo $place['image']; ?>" alt="">
                                                    <?php endif?>
                                                    <div class="px-3">
                                                        <h2 class="fs-xl-5 text-orange letter-spacing-24 uppercase">
                                                            <?php echo $place['name']; ?>
                                                        </h2>

                                                        <span class="line line--small m-0 pt-2 mb-2"></span>
                                    
                                                        <?php if ($place['address']) : ?>
                                                        <p class="fs-xl-6 text-gray-100"><?php echo $place['address']; ?></p>
                                                        <?php endif?>
                                    
                                                        <?php if ($place['city']) : ?>
                                                        <p class="fs-xl-6 mb-2 text-gray-100"><?php echo $place['city']; ?></p>
                                                        <?php endif?>
                                    
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['phone']) : ?>
                                                        <p class="fs-xl-6 text-gray-100 mb-3" style="-webkit-text-stroke-width: 0.5px;"><?php echo $place['phone']; ?></p>
                                                        <?php endif?>
                                
                                                        <div class=""></div>
                                    
                                                        <?php if ($place['link']) : ?>
                                                            <a class="btn btn-small rounded-0 uppercase" href="<?php echo $place['link']; ?>" target="_blank">
                                                                View
                                                            </a>
                                                        <?php endif; ?>

                                                        <?php if (!empty($place['info'])) : ?>
                                                            <div class="pt-3">
                                                                <?php foreach ($place['info'] as $infoItem) : ?>
                                                                    <p class="text-gray-100 letter-spacing-1 mb-2" style="font-size: 15px; word-wrap: break-word;overflow-wrap: break-word;"><?php echo $infoItem; ?></p>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 h-100 position-absolute top-0">
                        <div class="container h-100 position-relative">
                            <div class="swiper-button-prev start-1" id="prev-<?php echo $category['id']; ?>"></div>
                            <div class="swiper-button-next end-1" id="next-<?php echo $category['id']; ?>"></div>
                        </div>
                    </div>
                    <div class="py-xl-4 pt-3"></div>
                </div>
            <?php 
                $position++; // Incrementar contador
            } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
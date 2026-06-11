<?php
$random = '?_x=' . date('YMDm');

// scan folder img/carousel and all the file into $carouselImg
$carouselImg = glob('img/carousel/*.{jpg,jpeg,png}', GLOB_BRACE);

$models = [
	'bev',
	'csh',
	'ice'
];

$products = [
	[
		'id' => 1,
		'model' => 'ice',
		'name' => 'Chery C5',
		'type' => 'Omoda',
		'img' => 'img/product/ice/chery_c5/front.jpg',
		'label' => '',
		'harga' => ' - Type RZ Rp. 395.9 JT <br> 
						- Type RZ Two Tone Rp. 400.9 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/ice/chery_c5/interior/1.jpg', 'title' => 'Acoustic Glass'],
				['img' => 'img/product/ice/chery_c5/interior/2.jpg', 'title' => '64 Colour Ambient'],
				['img' => 'img/product/ice/chery_c5/interior/3.jpg', 'title' => 'Spacious Rear Seat']
			],
			'exterior' => [
				['img' => 'img/product/ice/chery_c5/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/ice/chery_c5/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/ice/chery_c5/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/ice/chery_c5/features/1.jpg', 'title' => 'Apple Car Play & Android Auto'],
				['img' => 'img/product/ice/chery_c5/features/2.jpg', 'title' => 'Dual Zone AC'],
				['img' => 'img/product/ice/chery_c5/features/3.jpg', 'title' => 'Camera 360 ']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'CC 1.5 Turbo',
				'RZ FWD',
				'Z FWD',
				'Torsi mesin 230 Nm',
				'Driving Form : Eco / Sport'
			],
			'safety' => [
				'360 HD Panoramic Camera',
				'Airbag 6',
				'Driving Assistants 4',
				'ADAS 10',
			],
			'comfort' => [
				'Kursi 2 baris',
				'Ban 215/55 R18',
				'Speaker 8 (RZ)',
				'Speaker 6 (Z)',
				'Wireless Charger 15W',
				'Sunroof (E5 FWD)',
				'Bagasi Electric (RZ)'
			]
		]

	],
	[
		'id' => 4,
		'model' => 'csh',
		'name' => 'Chery C5 CSH',
		'type' => 'Omoda',
		'img' => 'img/product/csh/chery_c5_csh/front.jpg',
		'label' => 'new',
		'harga' => '- Type Single Tone Rp. 436.9 JT<br>- Type Two Tone Rp. 441.9 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/csh/chery_c5_csh/interior/1.jpg', 'title' => '1st Row'],
				['img' => 'img/product/csh/chery_c5_csh/interior/2.jpg', 'title' => 'Dasboard Row 1'],
				['img' => 'img/product/csh/chery_c5_csh/interior/3.jpg', 'title' => 'Mid Consule']
			],
			'exterior' => [
				['img' => 'img/product/csh/chery_c5_csh/exterior/1.jpg', 'title' => 'Eksterior 1'],
				['img' => 'img/product/csh/chery_c5_csh/exterior/2.jpg', 'title' => 'Eksterior 2'],
				['img' => 'img/product/csh/chery_c5_csh/exterior/3.jpg', 'title' => 'Eksterior 3']
			],
			'features' => [
				['img' => 'img/product/csh/chery_c5_csh/features/1.jpg', 'title' => 'Power Window'],
				['img' => 'img/product/csh/chery_c5_csh/features/2.jpg', 'title' => 'DVR Connection'],
				['img' => 'img/product/csh/chery_c5_csh/features/3.jpg', 'title' => 'Lugagge Seat Folded']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'1.5L TGDI',
				'Transmisi DHT',
				'Total Output 211 Hp',
				'Torsi Mesin 215 / 2500–4000',
				'Total Torsi 310 Nm',
			],
			'safety' => [
				'Airbags 7',
				'360 HD Panoramic Camera',
				'ADAS 14',
				'Driving Assistant 4',
			],
			'comfort' => [
				'Kursi 2 baris',
				'Speaker 8',
				'Intelligent Voice Assistant (English)',
				'Seat Heating (1st Seat Row)',
				'HUD besar'
			]
		]

	],
	[
		'id' => 2,
		'model' => 'bev',
		'name' => 'Chery E5',
		'type' => 'Omoda',
		'img' => 'img/product/bev/chery_e5/front.jpg',
		'label' => 'Electric - New',
		'harga' => '- Type Single Tone Rp. 454.8 JT <br> 
						- Type Two Tone Rp. 459.8 JT',

		'detail' => [
			'interior' => [
				['img' => 'img/product/bev/chery_e5/interior/1.jpg', 'title' => 'Black Interior'],
				['img' => 'img/product/bev/chery_e5/interior/2.jpg', 'title' => 'Seat Row 2'],
				['img' => 'img/product/bev/chery_e5/interior/3.jpg', 'title' => 'New Black Dasboard Interior']
			],
			'exterior' => [
				['img' => 'img/product/bev/chery_e5/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/bev/chery_e5/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/bev/chery_e5/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/bev/chery_e5/features/1.jpg', 'title' => 'Qualcomm 8155 Chip'],
				['img' => 'img/product/bev/chery_e5/features/2.jpg', 'title' => 'Power Sunroof'],
				['img' => 'img/product/bev/chery_e5/features/3.jpg', 'title' => '540 HD Panaromic Camera']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'Full Listrik (EV)',
				'E5 FWD',
				'E5 Pure FWD',
				'Torsi Battery 340 Nm',
				'Power Battery 203 Ps',
				'Range Full Battery 430 Km WLTP',
				'Kapasitas Battery 61.05 kWh',
			],
			'safety' => [
				'360 HD Panoramic Camera',
				'Airbag 6',
				'Driving Assistants 10',
				'ADAS 17',
			],
			'comfort' => [
				'Kursi 2 baris',
				'Intellegent Voice Assistant',
				'Ban 215/55 R18',
				'Speaker 8 (E5 FWD)',
				'Speaker 6 (Pure)',
				'Wireless Charger 15W',
				'Sunroof (E5 FWD)',
				'Bagasi Electric (E5 FWD)'
			]
		]
	],
	[
		'id' => 3,
		'model' => 'bev',
		'name' => 'Chery J6',
		'type' => 'J6',
		'img' => 'img/product/bev/chery_j6/front.jpg',
		'label' => '',
		'harga' => '- Type RWD Rp. 596.8 JT<br> 
						- Type IWD Rp. 656.8 JT<br>- Phantom Edition +Rp. 50 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/bev/chery_j6/interior/1.jpg', 'title' => 'Rugged Interior'],
				['img' => 'img/product/bev/chery_j6/interior/2.jpg', 'title' => 'J6 Multi fuction Steering Wheel'],
				['img' => 'img/product/bev/chery_j6/interior/3.jpg', 'title' => 'J6 Multi Dimensional Rubik']
			],
			'exterior' => [
				['img' => 'img/product/bev/chery_j6/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/bev/chery_j6/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/bev/chery_j6/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/bev/chery_j6/features/1.jpg', 'title' => 'Ventilated AC Seats For 1st Row and 2nd Row Cabin'],
				['img' => 'img/product/bev/chery_j6/features/2.jpg', 'title' => 'Massage Seats'],
				['img' => 'img/product/bev/chery_j6/features/3.jpg', 'title' => 'Front Arm With Cooling System']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'Full Listrik (EV)',
				'IWD',
				'RWD',
				'Torsi 385 Nm / Power 279 PS (IWD)',
				'Torsi 220 Nm / Power 184 PS (RWD)',
				'Range Full Battery 418 Km (IWD)',
				'Range Full Battery 426 Km (RWD)',
			],
			'safety' => [
				'Camera 540 HD Panaromic',
				'Airbag 6',
				'Driving Assistants 14',
				'ADAS 14',
				'V2L',
				'Water Protection : IP 68',
			],
			'comfort' => [
				'Kursi 2 baris',
				'Ban 225/55 R19 (IWD)',
				'Ban 225/60 R18 (RWD)',
				'Speaker 12 (IWD)',
				'Speaker 8 (RWD)',
				'Wireless Charger 50W',
				'Panoramic Sunroof',
				'AC Dual Zone PM2.5 Filter'
			]
		]

	],
	[
		'id' => '9csh',
		'model' => 'csh',
		'name' => 'Tiggo 9 CSH',
		'type' => 'Tiggo',
		'img' => 'img/product/csh/tiggo_9_csh/front.jpg',
		'label' => 'Luxury',
		'harga' => '- AWD NEW Rp. 781.8 JT<br>- AWD Cosmic Grey Rp. 786.8 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/csh/tiggo_9_csh/interior/1.jpg', 'title' => 'Wide Space 2nd Row Cabin'],
				['img' => 'img/product/csh/tiggo_9_csh/interior/2.jpg', 'title' => 'Steering Wheel With Multi Function Button Features'],
				['img' => 'img/product/csh/tiggo_9_csh/interior/3.jpg', 'title' => 'Flat Trunk Base']
			],
			'exterior' => [
				['img' => 'img/product/csh/tiggo_9_csh/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/csh/tiggo_9_csh/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/csh/tiggo_9_csh/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/csh/tiggo_9_csh/features/1.jpg', 'title' => 'Intelligent Parking Effortless Control'],
				['img' => 'img/product/csh/tiggo_9_csh/features/2.jpg', 'title' => '17 ADAS'],
				['img' => 'img/product/csh/tiggo_9_csh/features/3.jpg', 'title' => 'Electric Steering Wheel Adjuster']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'CC 1.5 TGDI Turbo Engine PHEV',
				'AWD',
				'Torsi Mesin 215 Nm',
				'Power Mesin 143 Ps',
				'Torsi Battery 310 Nm',
				'Power Battery 239 Ps',
				'Range Full Hybrid Mode 1400 Km+',
				'Pure EV Mode 180 Km+',
				'V2L',
			],
			'safety' => [
				'Camera 540 HD Panaromic',
				'ISOFIX Interface',
				'Airbag 10',
				'Driving Assistants 13',
				'ADAS 17',
			],
			'comfort' => [
				'Kursi 3 baris',
				'Ban 245/50 R20',
				'Speaker 12',
				'Voice Control',
				'Sun Visor With Vanity Mirrors',
				'Wireless Android Auto/Apple Car',
				'Wireless Charger 50W',
				'Panoramic Sunroof',
				'Front Passenger Seat Massage',
				'Multi Color Ambient Light',
				'AC Dual Zone AQS PM2.5/N95 Air Filter',
			]
		]
	],
	[
		'id' => 5,
		'model' => 'csh',
		'name' => 'Tiggo 8 CSH',
		'type' => 'Tiggo',
		'img' => 'img/product/csh/tiggo_8_csh/front.jpg',
		'label' => '',
		'harga' => '- FWD Comfort Rp. 483.8 JT<br>- FWD Premium Rp. 560.9 JT<br>- AWD Premium Rp. 606.9 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/csh/tiggo_8_csh/interior/1.jpg', 'title' => 'Premium Interior'],
				['img' => 'img/product/csh/tiggo_8_csh/interior/2.jpg', 'title' => 'Wide Space Trunk'],
				['img' => 'img/product/csh/tiggo_8_csh/interior/3.jpg', 'title' => 'Premium Interior']
			],
			'exterior' => [
				['img' => 'img/product/csh/tiggo_8_csh/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/csh/tiggo_8_csh/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/csh/tiggo_8_csh/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/csh/tiggo_8_csh/features/1.jpg', 'title' => '10 Airbags'],
				['img' => 'img/product/csh/tiggo_8_csh/features/2.jpg', 'title' => 'Electric Panoramic Sunroof'],
				['img' => 'img/product/csh/tiggo_8_csh/features/3.jpg', 'title' => 'HD Panaromic 540 HD']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'CC 1.5 Turbo PHEV',
				'FWD',
				'Torsi Mesin 215 Nm ',
				'Torsi Mesin 105/143ps (Premium)',
				'Power Mesin 143 Ps',
				'Torsi Battery 310 Nm',
				'Power Battery 204 Ps',
				'Range Full Hybrid Mode 1300 Km',
				'Pure EV Mode 90 Km',
				'V2L',
			],
			'safety' => [
				'Camera 540 HD Panaromic Camera',
				'Airbag 10',
				'Driving Assistants 11',
				'ADAS 14',
				'ISOFIX Interface',

			],
			'comfort' => [
				'Kursi 3 baris',
				'Ban 235/50 R19',
				'Speaker 12',
				'Wireless Charger 50W',
				'Panoramic Sunroof',
				'AC Dual Zone AQS PM2.5/N95 Air Filter'
			]
		]
	],
	[
		'id' => 6,
		'model' => 'ice',
		'name' => 'Tiggo 8',
		'type' => 'Tiggo',
		'img' => 'img/product/ice/tiggo_8/front.jpg',
		'label' => '',
		'harga' => '- Type Comfort Rp. 410.8 JT<br> 
						- Type Premium Rp. 451.8 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/ice/tiggo_8/interior/1.jpg', 'title' => '1st Class Cabin'],
				['img' => 'img/product/ice/tiggo_8/interior/2.jpg', 'title' => 'Soft Touch Materials'],
				['img' => 'img/product/ice/tiggo_8/interior/3.jpg', 'title' => 'Panoramic Sunroof']
			],
			'exterior' => [
				['img' => 'img/product/ice/tiggo_8/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/ice/tiggo_8/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/ice/tiggo_8/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/ice/tiggo_8/features/1.jpg', 'title' => 'AC 3rd Row'],
				['img' => 'img/product/ice/tiggo_8/features/2.jpg', 'title' => 'Camera 360 HD'],
				['img' => 'img/product/ice/tiggo_8/features/3.jpg', 'title' => 'Voice Command']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'CC 1.6 Turbo',
				'Premium FWD',
				'Comfort FWD',
				'Torsi Mesin 290 Nm',
				'Power Mesin 186 Ps',
			],
			'safety' => [
				'360 HD Panoramic Camera',
				'Airbag 6',
				'Driving Assistants 10',
				'ADAS 9 (Premium)',
			],
			'comfort' => [
				'Kursi 3 baris',
				'Ban 235/55 R18',
				'Speaker 8',
				'Panoramic Sunroof (Premium)',
				'AC Dual Zone N95 Air Filter'
			]
		]
	],
	[

		'id' => 8,
		'model' => 'ice',
		'name' => 'Tiggo Cross',
		'type' => 'Tiggo',
		'img' => 'img/product/ice/tiggo_cross/front.jpg',
		'label' => 'value',
		'harga' => '- Type Comfort Rp. 290.8 JT<br> 
						- Type Premium Rp. 318.8 JT<br> 
						- Type Sport Rp. 336.9 JT<br>- Type CSH Rp. 367.8 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/ice/tiggo_cross/interior/1.jpg', 'title' => 'Tiggo Cross Interior'],
				['img' => 'img/product/ice/tiggo_cross/interior/2.jpg', 'title' => 'Sunroof'],
				['img' => 'img/product/ice/tiggo_cross/interior/3.jpg', 'title' => 'Soft Touch Material']
			],
			'exterior' => [
				['img' => 'img/product/ice/tiggo_cross/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/ice/tiggo_cross/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/ice/tiggo_cross/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/ice/tiggo_cross/features/1.jpg', 'title' => 'Car Link O'],
				['img' => 'img/product/ice/tiggo_cross/features/2.jpg', 'title' => 'Intelligent Voice Assistant'],
				['img' => 'img/product/ice/tiggo_cross/features/3.jpg', 'title' => '350 HD Panoramic Camera']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'CC 1.5L Engine (Comfort & Premium )',
				'1.5L Turbo Engine (Sport)',
				'1.5L - Hybrid - DHE (CSH Comfort & Premium)',
				'Premium FWD',
				'Comfort FWD',
				'Power Mesin 147Ps 210Nm',
				'Power Mesin 116 Ps (Comfort & Premium )',
				'Power Mesin 96Ps - 120 Nm // 204Ps - 310Nm',
			],
			'safety' => [
				'Airbag 6 (Premium)',
				'Airbag 4 (Comfort)',
				'Airbag 7 (Sport)',
				'Airbag 6 (CSH Comfort)',
				'Airbag 7 (CSH Premium)',
				'360 HD Panoramic Camera',
				'Isofix',
				'Driving Assistants 9',
				'ADAS 15',
			],
			'comfort' => [
				'Kursi 2 baris',
				'Intelligent Voice Assistant',
				'Ban 215/60 R17 (Premium)',
				'Steering Tilt and Telescopic',
				'Ban 215/65 R16 (Comfort)',
				'Speaker 6 (Premium)',
				'Speaker 4 (Comfort)',
				'Electric Sunroof (Premium, Sport, CSH Premium)',
			]
		]
	],
	[
		'id' => 9,
		'model' => 'bev',
		'name' => 'Chery J6T',
		'type' => 'J6',
		'img' => 'img/product/bev/chery_j6t/front.jpg',
		'label' => 'Electric new',
		'harga' => '- Type RWD Rp. 610.8 JT <br>- Type IWD Rp. 680.8 JT',
		'detail' => [
			'interior' => [
				['img' => 'img/product/bev/chery_j6t/interior/1.jpg', 'title' => 'Head Unit'],
				['img' => 'img/product/bev/chery_j6t/interior/2.jpg', 'title' => 'Head Unit Interior'],
				['img' => 'img/product/bev/chery_j6t/interior/3.jpg', 'title' => '15.6 inch Touch Screen Head Unit ']
			],
			'exterior' => [
				['img' => 'img/product/bev/chery_j6t/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/bev/chery_j6t/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/bev/chery_j6t/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/bev/chery_j6t/features/1.jpg', 'title' => 'J6 Front and Rear Dual Motors'],
				['img' => 'img/product/bev/chery_j6t/features/2.jpg', 'title' => '16 ADAS'],
				['img' => 'img/product/bev/chery_j6t/features/3.jpg', 'title' => 'Matrix Box Storage ']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'Full Listrik (EV)',
				'IWD',
				'RWD',
				'Torsi 220 Nm / Power Front : 95 Ps / Rear :184 PS (IWD)',
				'Torsi 220 Nm / Power 184 PS (RWD)',
				'Range Full Battery 436 Km (IWD)',
				'Range Full Battery 431 Km (RWD)',
			],
			'safety' => [
				'Camera 540 HD Panaromic',
				'Airbag 6',
				'Driving Assistants 14',
				'ADAS 16',
				'Water Protection : IP 68',
				'V2L'
			],
			'comfort' => [
				'Kursi 2 baris',
				'Ban 225/55 R19 (IWD)',
				'Ban 225/60 R18 (RWD)',
				'Speaker 12 (IWD)',
				'Speaker 8 (RWD)',
				'Wireless Charger 50W',
				'Panoramic Sunroof',
				'AC Dual Zone PM2.5 Filter'
			]
		]
	],
	[
		'id' => 10,
		'model' => 'bev',
		'name' => 'Chery Q',
		'type' => 'Compact EV',
		'img' => 'img/product/bev/chery_q/front.jpg',
		'label' => 'Electric New',
		'harga' => 'Rp. 2XX.XXX.XXX',
		'detail' => [
			'interior' => [
				['img' => 'img/product/bev/chery_q/interior/1.jpg', 'title' => 'Head Unit Dashboard'],
				['img' => 'img/product/bev/chery_q/interior/2.jpg', 'title' => 'Front Interior'],
				['img' => 'img/product/bev/chery_q/interior/3.jpg', 'title' => 'Rear Interior ']
			],
			'exterior' => [
				['img' => 'img/product/bev/chery_q/exterior/1.jpg', 'title' => 'Exterior 1'],
				['img' => 'img/product/bev/chery_q/exterior/2.jpg', 'title' => 'Exterior 2'],
				['img' => 'img/product/bev/chery_q/exterior/3.jpg', 'title' => 'Exterior 3']
			],
			'features' => [
				['img' => 'img/product/bev/chery_q/features/1.jpg', 'title' => 'Mobile Aplication.'],
				['img' => 'img/product/bev/chery_q/features/2.jpg', 'title' => 'Fast charging 16.5 minutes'],
				['img' => 'img/product/bev/chery_q/features/3.jpg', 'title' => 'Night Vision camera.']
			],
		],
		'spesifikasi' => [
			'performance' => [
				'Full Listrik (EV)'
			],
			'safety' => [
				'ADAS 20'
			],
			'comfort' => [
				'Kursi 2 baris'
			]
		]
	],
];


// Urutan yang di inginkan
$sortType = ['Tiggo', 'Omoda', 'J6'];

// ** mengurutkan mobil berdasar type
usort($products, function ($a, $b) use ($sortType) {
	return array_search($a['type'], $sortType) <=> array_search($b['type'], $sortType);
});

// usort($products, function ($a, $b) {
//     return $b['type'] <=> $a['type'];
// });

?>

<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Ashion Template">
	<meta name="keywords" content="Ashion, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chery Padang</title>

	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.jpg">
	<link rel="icon" type="image/jpg" sizes="32x32" href="img/favicon/favicon-32x32.jpg">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.jpg">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Goldman&family=Montserrat:wght@500&display=swap"
		rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css<?= $random ?>" type="text/css">

	<style>

	</style>
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__close">+</div>
		<ul class="offcanvas__widget">
			<li><span class="icon_search search-switch"></span></li>
			<li><a href="#"><span class="icon_heart_alt"></span>
					<div class="tip">2</div>
				</a></li>
			<li><a href="#"><span class="icon_bag_alt"></span>
					<div class="tip">2</div>
				</a></li>
		</ul>
		<div class="offcanvas__logo categories__text">
			<a href="index.php"><img src="img/logo_chery_hitam_350x63.webp" alt=""></a>
		</div>
		<div id="mobile-menu-wrap"></div>
		<div class="offcanvas__auth">
			<a href="#">Login</a>
			<a href="#">Register</a>
		</div>
	</div>
	<!-- Offcanvas Menu End -->

	<!-- Header Section Begin -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-2">
					<div class="header__logo categories__text" style="width: 165px;">
						<a href="index.php"><img src="img/logo_chery_hitam_350x63.webp" alt=""></a>
					</div>
				</div>
				<div class="col-xl-9 col-lg-10 text-right">
					<nav class="header__menu">
						<ul>
							<li class="active"><a href="./index.html">Home</a></li>
							<?php foreach ($models as $model) { ?>
								<li><a href="#targetProduk">
										<?= strtoupper($model) ?>
									</a></li>
							<?php } ?>
							<li><a href="#targetContact">Test Drive</a></li>
							<li><a href="#targetContact">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- <div class="col-lg-3">
					<div class="header__right">
						<div class="header__right__auth">
							<a href="#">Login</a>
							<a href="#">Register</a>
						</div>
						<ul class="header__right__widget">
							<li><span class="icon_search search-switch"></span></li>
							<li><a href="#"><span class="icon_heart_alt"></span>
									<div class="tip">2</div>
								</a></li>
							<li><a href="#"><span class="icon_bag_alt"></span>
									<div class="tip">2</div>
								</a></li>
						</ul>
					</div>
				</div> -->
			</div>
			<div class="canvas__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header Section End -->

	<!-- Categories Section Begin -->
	<section id="targetHome" class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pr-0 m-auto pb-2">
					<div id="carouselBanner" class="banner__slider owl-carousel">
						<?php foreach ($carouselImg as $img) { ?>
							<div class="banner__item h-100">
								<img class="img-fluid" src="<?= $img ?><?= $random ?>" alt="">
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>

			<div class="row" style="display:none">
				<div class="col-lg-4 pr-0">
					<div class="categories__item categories__large__item set-bg"
						data-setbg="img/categories/category-1a.jpg<?= $random ?>">
						<div class="categories__text">
							<h1>BEV</h1>
							<div>Battery <u>Electric</u> Vehicle</div>
							<a href="#formContact">Hubungi</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 pl-0 pr-0">
					<div class="categories__item categories__large__item2 set-bg"
						data-setbg="img/categories/category-2b.jpg<?= $random ?>">
						<div class="categories__text text-right">
							<h1>CSH</h1>
							<div>Chery Super <u>Hybrid</u></div>
							<a href="#formContact">Hubungi</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 pl-0 pr-0">
					<div class="categories__item categories__large__item2 set-bg"
						data-setbg="img/categories/category-1a.jpg<?= $random ?>">
						<div class="categories__text text-right">
							<h1>ICE</h1>
							<div><u>Combustion</u> Engine</div>
							<a href="#formContact">Hubungi</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Categories Section End -->

	<!-- Product Section Begin -->
	<section id="targetProduk" class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="section-title">
						<h4>Produk
							<small>
								<button type="button" id="infoProduk" class="btn btn-light">
									<span class="badge badge-light"><i class="fa fa-info-circle"></i></span>
								</button>
							</small>
						</h4>
					</div>
				</div>
				<div class="col-lg-8 col-md-8">
					<ul class="filter__controls">
						<li class="active" data-filter="*">Semua</li>
						<?php foreach ($models as $model) { ?>
							<li data-filter=".<?= $model; ?>">
								<?= strtoupper($model); ?>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row property__gallery">
				<?php
				foreach ($products as $product) {
					?>
					<div class="col-lg-3 col-md-4 col-sm-6 mix <?= $product['model']; ?>">
						<div class="product__item">
							<div class="product__item__pic set-bg" data-setbg="<?= $product['img']; ?>">
								<?php if ($product['label'] != '') { ?>
									<div class="label new">
										<?= $product['label']; ?>
									</div>
								<?php } ?>
								<ul class="product__hover">
									<li><a href="<?= $product['img']; ?>" class="image-popup"
											title="<?= $product['name']; ?>"><span class="arrow_expand"></span></a></li>
									<!-- <li><a href="#"><span class="icon_heart_alt"></span></a></li> -->
									<li><a href="javascript:void(0)" class='spesifikasiTrigger'
											data-id='<?= $product['id']; ?>'><span class="icon_zoom-in_alt"></span></a></li>
								</ul>
							</div>
							<div class="product__item__text">
								<h6><a href="#">
										<?= $product['name']; ?>
									</a></h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="product__price">
									<?= $product['harga']; ?>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

			</div>
		</div>
	</section>
	<!-- Product Section End -->

	<hr class="w-75" />

	<!-- Banner Section Begin -->
	<section id="targetProduct" class="banner set-bg" data-setbg="img/banner/banner-1.png">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-8 m-auto">
					<div class="banner__slider owl-carousel">

						<?php
						foreach ($products as $product) {
							?>
							<div class="banner__item" data-id="<?= $product['id']; ?>"
								data-model="<?= $product['model']; ?>" data-name="<?= $product['name']; ?>"
								data-harga="<?= htmlspecialchars($product['harga']); ?>"
								data-detail='<?= json_encode($product['detail']); ?>'>

								<div class="banner__text">
									<span>
										<?= $product['model']; ?>
									</span>
									<h1>
										<?= $product['name']; ?>
									</h1>
									<!--<a href="#">Detail</a>-->
								</div>
							</div>
							<?php
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Trend Section Begin -->
	<section class="trend spad">
		<div class="container" style="height: 171px;">
			<div class="row">
				<div class="col-lg-4 col-sm-4 align-self-center" style="padding-left: 0;">
					<div class="trend__content">
						<div class="section-title text-center">
							<h4>Eksterior</h4>
						</div>
					</div>

					<div class="row justify-content-around exterior">
						<div class="col"><img class="img-fluid img-fade" src="img/product/ice/chery_c5/exterior/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_e5/exterior/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_j6/exterior/1.jpg"
								alt=""></div>
					</div>

				</div>
				<div class="col-lg-4 col-sm-4 align-self-center">
					<div class="trend__content">
						<div class="section-title text-center">
							<h4>Interior</h4>
						</div>
					</div>
					<div class="row justify-content-around interior">
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_j6t/interior/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_j6/interior/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade"
								src="img/product/csh/chery_c5_csh/interior/1.jpg" alt=""></div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 align-self-center" style="padding-right: 0;">
					<div class="trend__content">
						<div class="section-title text-center">
							<h4>Fitur</h4>
						</div>
					</div>
					<div class="row justify-content-around features">
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_e5/features/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade" src="img/product/bev/chery_j6/features/1.jpg"
								alt=""></div>
						<div class="col"><img class="img-fluid img-fade"
								src="img/product/csh/chery_c5_csh/features/1.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trend Section End -->

	<!-- Discount Section Begin
	<section class="discount">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-0">
					<div class="discount__pic">
						<img src="img/discount.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="discount__text">
						<div class="discount__text__title">
							<span>Discount</span>
							<h2>Summer 2019</h2>
							<h5><span>Sale</span> 50%</h5>
						</div>
						<div class="discount__countdown" id="countdown-time">
							<div class="countdown__item">
								<span>22</span>
								<p>Days</p>
							</div>
							<div class="countdown__item">
								<span>18</span>
								<p>Hour</p>
							</div>
							<div class="countdown__item">
								<span>46</span>
								<p>Min</p>
							</div>
							<div class="countdown__item">
								<span>05</span>
								<p>Sec</p>
							</div>
						</div>
						<a href="#">Shop now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	 Discount Section End -->

	<!-- Services Section Begin
	<section class="services spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="services__item">
						<i class="fa fa-car"></i>
						<h6>Free Shipping</h6>
						<p>For all oder over $99</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="services__item">
						<i class="fa fa-money"></i>
						<h6>Money Back Guarantee</h6>
						<p>If good have Problems</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="services__item">
						<i class="fa fa-support"></i>
						<h6>Online Support 24/7</h6>
						<p>Dedicated support</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="services__item">
						<i class="fa fa-headphones"></i>
						<h6>Payment Secure</h6>
						<p>100% secure payment</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	Services Section End -->

	<hr class="w-75 mb-5" />

	<!-- Instagram Begin -->
	<div class="instagram mt-6">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 p-0">
					<div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
						<div class="instagram__text">
							<i class="fa fa-instagram"></i>
							<a href="https://www.instagram.com/cherythetapadang/">@ cherythetapadang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Instagram End -->

	<!-- Footer Section Begin -->
	<footer id="targetContact" class="footer">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-4 col-md-6 col-sm-7">
					<div class="footer__about">
						<div class="footer__logo">
							<a href="./index.html"><img src="img/logo_chery_hitam_350x63.webp" alt=""></a>
						</div>
						<p>Chery Padang. Jalan Hayamwuruk.</p>
						<div class="footer__payment">
							<a href="https://www.instagram.com/cherythetapadang/" target="_blank"><img width="40px"
									src="img/sosmed/instagram.png" alt=""></a>
							<a href="https://www.tiktok.com/@cherythetapadang" target="_blank"><img width="40px"
									src="img/sosmed/tiktok.png" alt=""></a>
							<a href="https://wa.me/6285205200021" target="_blank"><img width="40px"
									src="img/sosmed/whatsapp.png" alt=""></a>
							<!-- <a href="https://wa.me/62812368688" target="_blank"><img width="40px" src="img/sosmed/whatsapp.png" alt=""></a> -->
							<!-- <a href="#" target="_blank"><img width="40px" src="img/sosmed/facebook.png" alt=""></a> -->
							<!-- <a href="#" target="_blank"><img width="40px" src="img/sosmed/youtube.png" alt=""></a> -->
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-2 col-md-3 col-sm-5">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d997.3151762090563!2d100.35520264031959!3d-0.9579295041554813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1754109482607!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div> -->
				<div class="col-lg-2 col-md-3 col-sm-5">
					<div class="footer__widget">
						<h6>Navigasi</h6>
						<ul>
							<li><a href="#targetHome">Home</a></li>
							<li><a href="#targetAbout">About</a></li>
							<li><a href="#targetContact">Contact</a></li>
							<li><a href="#targetProduct">Product</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="footer__widget">
						<h6>Hubungi</h6>
						<form id="formContact">
							<div class="row mb-1">
								<div class="col"><input class="form-control" placeholder="Nama" type="text" name="nama"
										id="nama"></div>
							</div>
							<div class="row mb-1">
								<div class="col"><input class="form-control" placeholder="Nomor WhatsApp" type="tel"
										name="phone" id="phone"></div>
							</div>
							<div class="row mb-1">
								<div class="col">
									<select class="form-control" name="model" id="model">
										<option value="">Saya ingin test drive...</option>
										<?php
										foreach ($products as $product) {
											echo "<option value='" . $product['name'] . "'>" . $product['name'] . "</option>";
										}
										?>
									</select>
								</div>
							</div>
							<div class="row mb-1">
								<div class="col"><textarea class="form-control"
										placeholder="Tambahan, misalnya tanggal untuk test-drive, dll" name="message"
										id="message" row mb-1s="4"></textarea></div>
							</div>
							<div class="row mb-1 align-items-center justify-content-between">
								<div class="col text-right"><button type="submit" class="btn btn-dark"
										value="Kirim">Kirim</button></div>
							</div>
						</form>
					</div>
				</div>
				<!--
				<div class="col-lg-4 col-md-8 col-sm-8">
					<div class="footer__newslatter">
						<h6>KIRIM BROSUR</h6>
						<form action="#">
							<input type="text" placeholder="Nomor WhatsApp">
							<button type="submit" class="site-btn">Kirim</button>
						</form>
						<div class="footer__social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
				-->
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<div class="footer__copyright__text">
						<p style="font-size:10px">Copyright &copy;
							<script>document.write(new Date().getFullYear());</script> All rights reserved | This
							template is made with <i class="fa fa-heart" aria-hidden="true"> Colorlib</i>
						</p>
					</div>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Search Begin -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search End -->

	<!-- Modal -->
	<div class="modal fade" id="keteranganModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Keterangan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<ul class="list-group list-group-flush"
						style="font-size: 14px; padding-top:50px; padding-bottom: 30px;">
						<li class="list-group-item">Harga resmi akan dirilis setelah ada ketetapan nantinya.</li>
						<li class="list-group-item">Harga dihitung berdasarkan Estimasi BBN Padang.</li>
						<li class="list-group-item">Harga tidak mengikat atau sewaktu-waktu bisa berubah.</li>
						<li class="list-group-item">Harga akan berubah apabila terjadi kenaikan BBN atau perubahan
							peraturan pemerintah.</li>
						<li class="list-group-item">Selisih BBN & pajak Progresif ditanggung Pelanggan.</li>
						<li class="list-group-item">Varian Two-Tone memiliki harga yang berbeda.</li>
					</ul>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="spesifikasiModal" tabindex="-1">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Spesifikasi <span id="spesifikasiModalTitle"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->

	<!-- Js Plugins -->
	<script>
		let products = <?php echo json_encode($products); ?>;
	</script>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=6LdQ310rAAAAAMZfKdZen8fn6RMTBuunZaI-JWn0"></script>
	<script src="js/main.js?<?= $random ?>"></script>
</body>

</html>
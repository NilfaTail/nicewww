<?php 

class Model_Portfolio extends Model
{
	public function get_data()
	{	
		$data = [
			[
				'Year' => '2017 - н/в',
				'Site' => 'http://fencinggroup.ru/',
				'Description' => 'Сайт для Международной Академии Фехтовальных Искусств в г.Санкт-Петербург. ',
				'Skills' => [
					'Конструктор сайтов Асконт',
					'Редизайн',
					'Поддержка'	
				],
				'Preview' => '/img/portfolio/fencinggroup-ru/fencinggroup.ru_preview.png'
			],
			[
				'Year' => '2018',
				'Site' => 'http://artfencing.spb.ru/',
				'Description' => 'Сайт для мероприятия Олимпиада Артестического фехтования в Выборге',
				'Skills' => ['WordPress', 'Дизайн', 'Разработка'],
				'Preview' => '/img/portfolio/artfencing-spb-ru/artfencing.spb.ru_preview.png'
			],
			[
				'Year' => '2018 - н/в',
				'Site' => 'https://carreraycarrera.ca/',
				'Description' => 'Сайт ювелирных изделий Carrera-y-Carrera. Канадский филиал.',
				'Skills' => ['WordPress', 'Woocommerce', 'Поддержка'],
				'Preview' => '/img/portfolio/carreraycarrera-ca/carreraycarrera.ca-preview.jpg'
			],
			[
				'Year' => '2019 - 2019',
				'Site' => 'https://igisp.ru/',
				'Description' => 'ИНСТИТУТ ГРУППОВОЙ И СЕМЕЙНОЙ ПСИХОЛОГИИ И ПСИХОТЕРАПИИ',
				'Skills' => ['WordPress', 'Разработка'],
				'Preview' => '/img/portfolio/igisp-ru/igisp-ru.png'
			],
			[
				'Year' => '2020 - 2021',
				'Site' => 'https://ministry-of-magic.ru/',
				'Description' => 'Хобби. Министерство магии',
				'Skills' => ['WordPress', 'Дизайн', 'Разработка', 'Поддержка'],
				'Preview' => '/img/portfolio/ministry-of-magic-ru/ministry-of-magic.png'
			],
			[
				'Year' => '2020 - 2021',
				'Site' => 'https://shoku-yoku.ru/',
				'Description' => 'СёкуЁку 食欲. Японское вагаси кафе',
				'Skills' => ['Лэндинг', 'Дизайн', 'Разработка', 'Поддержка'],
				'Preview' => '/img/portfolio/shoku-yoku-ru/shoku-yoku.png'
			]
			
		];

		return $data;
		
	}
}

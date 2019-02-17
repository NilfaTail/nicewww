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
					'Редизайн дизайн',
					'Поддержка'	
				],
				'Preview' => '/img/portfolio/fencinggroup-ru/fencinggroup.ru_preview.png'
			],
			[
				'Year' => '2018',
				'Site' => 'http://artfencing.spb.ru/',
				'Description' => 'Сайт для мероприятия Олимпиада Артестического фехтования в Выборге',
				'Skills' => ['WordPress', 'Дизайн'],
				'Preview' => '/img/portfolio/artfencing-spb-ru/artfencing.spb.ru_preview.png'
			],
			[
				'Year' => '2018 - н/в',
				'Site' => 'https://carreraycarrera.ca/',
				'Description' => 'Сайт ювелирных изделий Carrera-y-Carrera. Канадский филиал.',
				'Skills' => ['WordPress', 'Woocommerce', 'Поддержка'],
				'Preview' => '/img/portfolio/carreraycarrera-ca/carreraycarrera.ca-preview.jpg'
			]
		];

		return $data;
		
	}
}

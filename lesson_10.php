<?php
	//Опишите 5 классов и создайте по 2 объекта каждого класса — Машина, Телевизор, Шариковая ручка, Утка, Товар.

	//Источник: https://wiki.zr.ru/%D0%A2%D0%B5%D1%85%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%85%D0%B0%D1%80%D0%B0%D0%BA%D1%82%D0%B5%D1%80%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0
	class Car
	{
		public $manufacturer;
		public $model;
		public $passenger_capacity = 5;
		public $curb_weight;
		public $full_mass;
		public $wheel_formula = '4x2';
		public $car_body_length;
		public $car_body_width;
		public $car_body_height;
		public $engines_type = 'petrol';
		public $engines_number_of_cylinders;
		public $engines_volume;
		public $engines_max_power;
		public $engines_maximum_torque;
		public $gearbox_type = 'mechanical';
		public $number_of_gears;
		public $maximum_speed;
		public $fuel_consumption;
		public $color = 'black';
		
		public function __construct($manufacturer, $model, $color)
		{
			$this->manufacturer = $manufacturer;
			$this->model = $model;
			$this->color = $color;
		}
	}

	//Источник: https://market.yandex.ru/catalog/59601/list?hid=90639&track=pieces&local-offers-first=0
	class Tv
	{
		public $manufacturer;
		public $model;
		public $screen_type = "LED";
		public $screen_diagonal;
		public $viewing_angle = 178;
		public $brightness;
		public $contrast;
		public $weight;
		public $tv_length;
		public $tv_width;
		public $tv_height;
		public $update_frequency = 50;
		public $support_3d = false;
		public $support_smart_tv = false;
		public $color = 'black';
		
		public function __construct($manufacturer, $model, $color = 'black')
		{
			$this->manufacturer = $manufacturer;
			$this->model = $model;
			$this->color = $color;
		}
	}
	//Источник: https://market.yandex.ru/catalog/67114/list?hid=13858511&glfilter=14002516%3A14002518&local-offers-first=0&deliveryincluded=0&onstock=1
	class Pen
	{
		public $manufacturer;
		public $model;
		public static $tip_type = 'Ball';
		public $ink_color = 'blue';
		public $item_Material = 'plastic';
		public $item_color = 'plastic';
		public $auto_mechanism = false;
		
		public function __construct($manufacturer, $model, $ink_color = 'blue')
		{
			$this->manufacturer = $manufacturer;
			$this->model = $model;
			$this->ink_color = $ink_color;
		}
	}

	//Источник: https://en.wikipedia.org/wiki/Duck
	class Duck
	{
		protected $kingdom = 'Animalia';
		protected $phylum = 'Chordata';
		protected $class = 'Aves';
		protected $order = 'Anseriformes';
		public static $suborder;
		protected $superfamily = 'Anatoidea';
		public $family = 'Anatidae';
		public $name;
		public $weight = 2;
		public $age;
		
		public function __construct($family, $age, $weight = 2)
		{
			$this->family = $family;
			$this->weight = $weight;
			$this->age = $age;
		}
	}

	class Product
	{
		public $type;
		public $name;
		public $author;
		public $category;
		public $manufacturer;
		public $model;
		public $weight;
		public $length;
		public $width;
		public $height;
		public $price;
		public $discount;
		
		public function __construct($type, $name, $manufacturer, $model, $price, $discount)
		{
			$this->type = $type;
			$this->manufacturer = $manufacturer;
			$this->model = $model;
			$this->price = $price;
			$this->discount = $discount;		
		}	
	}

	$my_first_car = new Car('ВАЗ', '21102', 'баклажан');
	$my_second_car = new Car('Porsche', '911', 'orange');

	$mother_tv = new Tv('LG', '86UH955V');
	$grandmother_tv = new Tv('Горизонт', '728');

	$simple_pen = new Pen('Pilot', 'BPS-GP-EF');
	$elite_pen = new Pen('WATERMAN', 'EXCEPTION', 'black');

	$home_duck = new Duck('Домашняя утка', 2);
	$wilde_duck = new Duck('Чирок-трескунок', 10, 0.29);

	$simple_product = new Product('Book','Тонкое искусство пофигизма', 'Альпина Паблишер', 'pocketbook', 429, 10);
	$other_product = new Product('Ship', 'Black Queen', 'Tuna Long Liner', 'GRT577tn379tn', 12500000, 0);

	echo 'Модель моего первого авто: '.$my_first_car->model;
	echo '<br>'.'<br>';
	
	echo 'Телевизор моей бабушки: '.$grandmother_tv->manufacturer.'-'.$grandmother_tv->model;
	echo '<br>'.'<br>';
	
	echo 'Модель моего первого авто: '.$my_first_car->model;
	echo '<br>'.'<br>';
?>
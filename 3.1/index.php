<?php
    class CarClass
    {
    	const WHEELS = 4;
        public $color;
        public $power;
        public $fuel;
        public $brand;

        public function __construct ( $color='Белый', $power='100 л.с.', $fuel='10л на 100км', $brand='Форд' )
        {
        	$this->color = $color;
        	$this->power = $power;
        	$this->fuel = $fuel;
        	$this->brand = $brand;
        	$this->wheels = self::WHEELS;
        }
    }

    class TVClass
    {
    	const EQUIPMENT = ['ИК-пульт','Подставка','Кабель питания','HDMI кабель'];
    	const GUARANTEE = '12 месяцев';
    	public $color;
    	public $screenResolution;
    	public $price;

    	public function __construct ( $color='Чёрный', $screenResolution='Full HD', $price= 15000 )
    	{
    		$this->color = $color;
    		$this->screenResolution = $screenResolution;
    		$this->price = $price;
    		$this->equipment = self::EQUIPMENT;
    		$this->guarantee = self::GUARANTEE;
    	}
    }

    class BallPenBoxClass
    {
    	public $color;
    	public $price;
    	public $quantityInTheBox;

    	public function __construct ( $color='Синий', $price=200, $quantityInTheBox=50 )
    	{
    		$this->color = $color;
    		$this->price = $price;
    		$this->quantityInTheBox = $quantityInTheBox;
    	}
    }

    class DuckClass
    {
    	public $weight;
    	public $name;
    	public $status;

    	public function __construct ( $weight=5, $name='Утка', $status='Крякает')
    	{
    		$this->weight = $weight;
    		$this->name = $name;
    		$this->status = $status;
    	}
    }

    class ProductClass
    {
    	public $price;
    	public $name;
    	public $status;
    	public $delivery;

    	public function __construct( $price=1, $name='Товар', $status='Нет на скалде')
    	{
    		$this->price = $price;
    		$this->name = $name;
    		$this->status = $status;
    		$this->delivery = self::delivery($price);
    	}

    	private function delivery($price)
    	{
    		if( $price > 10000)
    		{
    			return 'Бесплатная доставка';
    		} else
    		{
    			return 'Платная доставка';
    		}
    	}
    }

    $car = new CarClass('Красный','80 л.с.','7л на 100км','Лада');
    $car1 = new CarClass();

    $televisor = new TVClass('Белый','4K', 30000);
    $televisor1 = new TVClass();

    $ballPenBox = new BallPenBoxClass('Красный', 500, 100);
    $ballPenBox1 = new BallPenBoxClass('Чёрный');

    $duck = new DuckClass ('Весомый','Скрудж Макдак','Селезень-миллиардер');
    $duck1 = new DuckClass ('Супергеройский','Чёрный Плащ','Ужас, летящий на крыльях ночи');

    $product = new ProductClass (15000, 'Фрезерный станок с ЧПУ', 'На складе');
    $product1 = new ProductClass (9000, 'Фрезерный станок', 'На складе');

    echo '<pre>';
    var_dump($car);
    var_dump($car1);
    var_dump($televisor);
    var_dump($televisor1);
    var_dump($ballPenBox);
    var_dump($ballPenBox1);
    var_dump($duck);
    var_dump($duck1);
    var_dump($product);
    var_dump($product1);
    echo '</pre>';
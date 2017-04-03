<?php
		class CommetClass
	{
		public $uri;
		
		function __construct( $uri = null )
		{
			$this->uri = $uri;
		}

		public function printCommet()
		{
			$uriJson = $this->uri;
			$arrayCommetJson = file_get_contents('./news_json/'.$uriJson);
            $arrayCommet = json_decode($arrayCommetJson);
            $arrayCommetPrint = [];
            for ($i=0; $i < 5; $i++) 
            { 
	            $arrayCommetPrint[] = $arrayCommet->{$i};
            }
            return $arrayCommetPrint;
		}
	}

	class PostNewsClass
	{
		public $uri;
		
		function __construct( $uri = null )
		{
			$this->uri = $uri;
		}

		public function printNews()
		{
			$commit = new CommetClass('commet_news.json');
			$commetnArray = $commit->printCommet();
			$uriJson = $this->uri;
			$arrayNewsJson = file_get_contents('./news_json/'.$uriJson);
            $arrayNews = json_decode($arrayNewsJson);
            for ($i=0; $i < 5; $i++) 
            { 
            	echo '<div><h1>'.$arrayNews->{'news'.$i}->h1.'</h1>';
            	echo '<p class="commit">Commet: '.$commetnArray [$i].'</p>';
	            echo '<p>'.$arrayNews->{'news'.$i}->p1.'</p>';
	           	echo '<p>'.$arrayNews->{'news'.$i}->p2.'</p></div>';
            }

		}
	}

	$news = new PostNewsClass('news.json');
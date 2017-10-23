<?php
class News
{
	/*
	$json = file_get_contents('addressbook.json');
	$data = json_decode($json, true);
	*/

	public $author;
	public $title;	
	public $category;
	public $description;
	public $url;
	public $image_url;
	public $published_data;
	public $comments;
	
	public static $static_counter = 0;
	
	public function getNews($source)
	{
		$this->author = $source['articles'][self::$static_counter]['author'];
		$this->title = $source['articles'][self::$static_counter]['title'];
		$this->category = 'World news';
		$this->description = $source['articles'][self::$static_counter]['description'];
		$this->url = $source['articles'][self::$static_counter]['url'];
		$this->image_url = $source['articles'][self::$static_counter]['urlToImage'];
		$this->published_data = $source['articles'][self::$static_counter]['publishedAt'];
	}
	public function __construct()
	{
		self::$static_counter++;
	}
}

$url = 'https://newsapi.org/v1/articles?source=daily-mail&sortBy=latest&apiKey=4b7da45d79bb448f944733751089056e';
$new_news_json = file_get_contents($url);
$new_news_source = json_decode($new_news_json, true);

$page_for_news = [];
$n = '';
for ($i = 0; $i < (count($new_news_source['articles'])-2); $i++)
{
	$n = new News;
	$n->getNews($new_news_source);
	$page_for_news[$i] = $n;
}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Page with news</title>
		<style>
			* {
				margin: 5px;
			}
			#container {
				position: relative;
				width: 100%;
				overflow: hidden;
				border: 0px solid;
			}
			ul {
				margin: 0;
				padding: 0;
				overflow: hidden;
			}
			li {
				float: left;
				width: 33%;
				list-style-position: inside;
				list-style-type: none;
				background-color: silver;
			}
			li:nth-child(3),
			li:nth-child(5) {
				clear: left;
			}
			p {
				text-align: justify;
			}
			.it{
				font-style: italic;
			}
		</style>
	</head>
	<body>
		<h2>News from Daily Mail:</h2>
		<div id='container'>
			<ul>
				<?php
					foreach ($page_for_news as $value){
						echo '<li>';
							echo '<div><h2><a href="'.$value->url.'">'.$value->title.'</a></h2></div>';
							echo '<div><img src="'.$value->image_url.'" width="250px" alt="'.$value->title.'">';
							echo '<p>'.$value->description.'</p></div>';
							echo '<div class="it"><p>Author: '.$value->author.'</p>';
							echo '<p>Date: '.$value->published_data.'</p>';
							echo '</div>';
						echo '</li>';
					}
				?>
			</ul>
		</div>
	</body>
</html>
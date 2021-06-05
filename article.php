
<?php
	
	interface ArtikelData
	{
	  public function getArtikelData();
	}
 
	abstract class Artikel
	{
	  	public $title, $content;

	  	public function __construct($title = "judulnya", $content = "kontentnya")
	  	{
		    $this->title = $title;
		    $this->content = $content;
	  	}

	  	public function setTitle($title)
	  	{
	    	$this->title = $title;
	  	}
	  	public function setContent($content)
	  	{
	    	$this->content = $content;
	  	}

	  	public function getTitle($title)
	  	{
	    	$this->title = $title;
	  	}
	  	public function getContent($content)
	  	{
	    	$this->content = $content;
	  	}
	}

	class Blog extends Artikel implements ArtikelData
	{
	  	public function __construct($title = "judulnya", $content = "kontentnya")
	  	{
	    	parent::__construct($title, $content);
	  	}

		public function getArtikelData()
		{
		    $arr = [
		      "title" => $this->title,
		      "content" => $this->content
		    ];
	    	return $arr;
	  	}
	}

	class listArtikel
	{
	  	public $list = array();

		public function addArticle(Artikel $article)
		{
	    	$this->list[] = $article;
		}

		public function arr()
		{
	    	return $this->list;
		}
	}

	$dataArtikel = [
		[
			'title'=> "Weaving just got a lot better thanks to this Arduino-controlled Jacquard loom",
			'content'=> "Jacquard looms revolutionized the weaving process by independently controlling each heddle’s position. That made it possible to weave complex patterns. But modern Jacquard looms are very expensive, because they require a solenoid or other means of actuation for each and every heddle. Lea Albaugh and her team at Carnegie Mellon University found an affordable way to build a Jacquard loom from 3D printer parts — including an Arduino-based controller.

				The key development for this Jacquard loom was a special bistable switch for each heddle. Those switches keep their heddles in the position in which they were last set. That makes it possible to set the heddle positions sequentially, instead of simultaneously with a multitude of solenoids. All of the heddle positions can be set by a single solenoid, which slides back and forth across the loom. This keeps costs down and makes it possible to build a Jacquard loom for about $200 using common 3D printer components.

				The frame of this loom was built using aluminum extrusion and 3D-printed brackets. The linear rails and stepper motors are the same type that you would find in a 3D printer. The controller, a RAMPS 1.4 shield on an Arduino Mega board, is also typically used for 3D printing. The Arduino receives G-code commands from a connected computer, which monitors the loom through a commodity webcam running OpenCV computer vision software. While the loom still requires hand weaving, the automated heddle positioning allows for the quick and accurate production of complex patterns by hobbyists at home."
		],
		[
			'title'=> "Extending a mobile AC unit’s exhaust duct with an air extractor",
			'content'=> "Portable air conditioners are amazing, especially as we head into the hot summer months. But one big downside is having to place them close to a window that will fit the guard, otherwise it’s really tough getting the hot exhaust air out of the room. This is exactly the problem Hackaday user vincentmakes ran into when he set up a mobile AC unit, as his window was the wrong shape. To solve it, he created a little system that allows the AC unit to be plugged in on one side and then match its air flow to shoot hot air out of the window. 

				It measures the current draw of the air conditioner by using a Hall effect sensor and then correlating the resulting value with a target air speed. When the AC is off, the extractor cuts power to its fan, but otherwise will try to adjust the fan speed while the AC is on. Vincent designed a custom PCB for the project around an Arduino Nano Every for control and interfacing with the Hall sensor and a pair of relays. After some fine-tuning of the fan curves, the air extractor worked great for extending the reach of the AC’s exhaust, thus letting it escape outside."
		],
		[
			'title'=> "Weekend projects to get you started with the Arduino Cloud",
			'content'=> "Weekend projects, as we like to call them, are often the most fun. We all have half-a-dozen unfinished projects that we need to work on. But weekend projects are the kind of things you want to work on. Something that isn’t a big commitment, doesn’t take too much effort, and offers a fun result.

				As you probably know, the Arduino Cloud underwent a small renovation recently. The free tier got a lot of extra features, and you can even use it for ESP8266 and ESP32 devices now. So if you’d like to take a fun weekend project into the Arduino Cloud, we’ve got a few for you to try out."
		], 
	];

	$getList = new listArtikel();
	if($dataArtikel){
		foreach ($dataArtikel as $value) {
			$createArtikel = new Blog($value['title'], $value['content']);
			$getList->addArticle($createArtikel);		
		}
	}

	$lists = $getList->arr();

?>
<div class="mb-5">
	<h3 class="center" id="typing">Article</h3>
	<div class="row">
		<div class="col-12">
			<div id="accordion">
				<?php 
					if($lists){
						foreach ($lists as $key => $value) {?>
							<div class="card">
							    <div class="card-header" id="heading-<?php echo $key; ?>">
							      	<h5 class="mb-0">
								        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key; ?>">
								        <?php echo $value->title; ?>
								        </button>
							      	</h5>
							    </div>

							    <div id="collapse-<?php echo $key; ?>" class="collapse" aria-labelledby="heading-<?php echo $key; ?>" data-parent="#accordion">
							      	<div class="card-body">
								        <?php echo $value->content; ?>
							      	</div>
						    	</div>
						  	</div>
						<?php }
					} ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
</script>
<?php
	interface produkData
	{
	  public function getProdukData();
	}
 
	abstract class Produk
	{
	  	public $title, $imgPath;

	  	public function __construct($title = "judulnya", $imgPath = "public/assets/cat_arduino.jpg")
	  	{
		    $this->title = $title;
		    $this->imgPath = $imgPath;
	  	}

	  	public function setTitle($title)
	  	{
	    	$this->title = $title;
	  	}
	  	public function setImgpath($imgPath)
	  	{
	    	$this->imgPath = $imgPath;
	  	}

	  	public function getTitle($title)
	  	{
	    	$this->title = $title;
	  	}
	  	public function getImgpath($imgPath)
	  	{
	    	$this->imgPath = $imgPath;
	  	}
	}

	class Category extends Produk implements produkData
	{
	  	public function __construct($title = "judulnya", $content = "public/assets/cat_arduino.jpg")
	  	{
	    	parent::__construct($title, $content);
	  	}

		public function getProdukData()
		{
		    $arr = [
		      "title" => $this->title,
		      "imgPath" => $this->imgPath
		    ];
	    	return $arr;
	  	}
	}

	class listCategory
	{
	  	public $list = array();

		public function addCagory(Produk $produk)
		{
	    	$this->list[] = $produk;
		}

		public function arr()
		{
	    	return $this->list;
		}
	}

	$dataCategory = [
		[
			'title'=> "Arduino",
			'imgPath'=> "public/assets/cat_arduino.jpg"
		],
		[
			'title'=> "Parts",
			'imgPath'=> "public/assets/cat_parts.jpg"
		],
		[
			'title'=> "Bundle",
			'imgPath'=> "public/assets/cat_kit.jpg"
		],
		[
			'title'=> "Software",
			'imgPath'=> "public/assets/cat_software.png"
		], 
	];

	$getList = new listCategory();
	if($dataCategory){
		foreach ($dataCategory as $value) {
			$createCateogry = new Category($value['title'], $value['imgPath']);
			$getList->addCagory($createCateogry);		
		}
	}

	$lists = $getList->arr();

?>
<div class="mb-5">
	<h3 class="center" id="typing">Product Category</h3>
	<div class="row">
		
		<div class="col-12">
			<?php 
				if($lists){
					foreach ($lists as $key => $value) { ?>
						<div class="col-3">
							<div class="card">
								<img class="card-img-top" src="<?php echo $value->imgPath ?>" alt="<?php echo $value->title ?>" style="height: 150px;">
							  	<div class="card-body">
								    <h5 class="card-title"><?php echo $value->title ?></h5>
							  	</div>
							</div>
						</div>
					<?php }
				}
			?>
		</div>
	</div>
</div>

<script type="text/javascript">
</script>
<?php
interface VideoServiceInterface{
	public function getEmbed();
}


class YouTUbe implements VideoServiceInterface{
	private $url;
	public function __construct($url){
		$this->url = $url;
	}
	public function getEmbed(){
		return "<iframe>" . $this->url . "</iframe>";
	}
}


class Vimeo implements VideoServiceInterface{
	private $url;
	public function __construct($url){
		$this->url = $url;
	}
	public function getEmbed(){
		return "<video>" . $this->url . "</video>";
	}
}
	
class Wistia implements VideoServiceInterface{
	private $url;
	public function __construct($url){
		$this->url = $url;
	}
	public function getEmbed(){
		return "<coisa>" . $this->url . "</coisa>";
	}
}


class Aula{
	private $video;

	public function __construct($video){
		$this->video = $video;
	}
	public function getVideoHtml(){
		return $this->video->getEmbed();
	}
}


$aula = new Aula(new Vimeo("123"));
echo "HTML:" . $aula->getVideoHtml();

echo "<br><br>";
$aula2 = new Aula(new YouTube("456"));
echo "HTML:" . $aula2->getVideoHtml();

echo "<br><br>";
$aula3 = new Aula(new Wistia("wistia.com"));
echo "HTML:" . $aula3->getVideoHtml();
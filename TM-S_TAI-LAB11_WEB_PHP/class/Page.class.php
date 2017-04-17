<?php
class Page {
	protected $content;
	protected $title = "Modułowy serwis PHP";
	protected $keywords = "narzędzia internetowe, php, form, gallery";
	protected $buttons = [
        "Contact" => "?page=index",
	    "Gallery" => "?page=gallery",
	    "Form" => "?page=form"];
	
	public function SetContent($newContent)
	{
		$this->content = $newContent;
	}

	function SetTitle($newTitle)
	{
		$this->title = $newTitle;
	}

	public function SetKeywords($newKeywords)
	{
		$this->keywords = $newKeywords;
	}

	public function SetButtons($newButtons)
	{
		$this->buttons = $newButtons;
	}
    
	public function SetCss($url)
	{
		echo '<link rel="stylesheet" href='.$url.' type="text/css" />';
	}

	public function PrintAll()
	{
		$this->PrintHeader();
		$this->PrintContent();
		$this->PrintFooter();
	}

	public function PrintTitle()
	{
		echo "<title>$this->title</title>";
	}

	public function PrintKeywords()
	{
		echo "<meta name=\"kebuttonscontents=\"$this->keywordsbuttons";
	}

	public function PrintMenu()
	{
		echo "<div id='nav'><ul id='nav'>";
		while (list($name, $url) = each($this->buttons))
		    echo '<li> <a href="'.$url.'">'.$name.'</a><li>';
		echo "</ul></div>";
	}

	public function PrintHeader()
    {	
        ?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><?php
        $this->SetCss('css/style.css');
        echo "<title>".$this->title."</title></head><body>";
    }

    public function PrintContent() {
        echo "<div id='content'>";
        echo "<div id='header'><h1>";
        echo $this->title."</h1></div>";
        echo "<div id='menu'>";
        $this->PrintMenu();
        echo "</div>";
        echo $this->content."</div>";
    }

    public function PrintFooter() {
        echo '<div id="footer"> &copy; BP</div>';
        echo '</body></html>';
    }
}
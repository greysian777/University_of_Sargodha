<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
for($loop = 0; $loop <= 15; $loop+=15)
{
 $LINK =  file_get_html('https://www.uos.edu.pk/About/alumni_directory/'.$loop);
  if ($LINK)
   {
			//	Paginate all 'View' buttons
			foreach ($LINK->find("//*[@id='main_content']/div/div[1]/table") as $element) 
    {
     echo  $element; 
    }
    
  }
?>



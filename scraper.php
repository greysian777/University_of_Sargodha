<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
for($loop = 0; $loop <= 15; $loop+=15)
{
$url = 'https://www.uos.edu.pk/About/alumni_directory/'.$loop;
 $LINK =  file_get_html($url);
  if ($LINK)
   {
			//	Paginate all 'View' buttons
			foreach ($LINK->find("//*[@id='main_content']/div/div[1]/table/tbody/tr") as $element) 
    {
     			$rollno	=	$element->find('td[0]', 0)->plaintext;
			$fname	=	$element->find('td[1]', 0)->plaintext;
			$lname	=	$element->find('td[2]', 0)->plaintext;
			$prog	=	$element->find('td[3]', 0)->plaintext;
			$passy	=	$element->find('td[4]', 0)->plaintext;
				
				
				
				 $record = array( 'rollno' =>$rollno, 
		   'fname' => $fname,
		   'lname' => $lname, 
		   'prog' => $prog, 
		   'passy' => $passy, 
		   'url' => $url);
						
						
           scraperwiki::save(array('fname','lname','prog','passy','url'), $record);
				
				
    }
    
  }
}
?>



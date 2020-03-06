<?php

// classe Personne
class ClassScanDir {

   private $path;
   private $fileTempEntry;

   public function __construct($path){
       $this->path = $path;
   }
  
  static public function getParentDirFromFile() {
		
      return "Unkown";
  }
  
   public function get_path(){
       return $this->path;
   }
   
   public function scandir(){
	 //$files = array();
	 $files = scandir($this->path);
	//	$files = scandir($this->path,1); 
	return $files;
   }
   
   // lien https://www.php.net/manual/fr/function.scandir.php
   public function scandirRec(){
	$files = array();    
	$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->path));

	foreach ($rii as $file) {

		if ($file->isDir()){ 
			continue;
		}

		$files[] = $file->getPathname(); 

	}
	return $files;
   }
   
	public function array_to_csv(String $fileName,array $data) {
        $f = fopen($fileName, 'w');
        /* donnees */
        foreach ($data as $row) {
			 //fwrite($f,$row."\n");
			 
			$path_parts = pathinfo($row);
			fwrite($f,$path_parts['filename']." ; ");
			fwrite($f,$path_parts['dirname']." ; ");
			fwrite($f,$path_parts['basename']." ; ");
			fwrite($f,$path_parts['extension']." ; ");
			fwrite($f,$path_parts['extension']." ; ");
			fputs($f,"\r\n");
        }
        fclose($f);
	}
   
   
} // fin de la classe Personne
?>

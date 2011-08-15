<?php
/**
 * Componente para o framework cakePhp utilizado em manipulação de arqruivos.
 *
 * @author Fellipe Nathan
 */
class FileComponent extends Object{

    public $path_base = '';
    public $enctype = false;
    /*
     * Método para fazer download
     */
    public function do_upload( $file = array() , $newName = null ){

        if($this->_checkDirectory()){

            if($newName){
                $file['name'] = $newName.$this->get_extension($file['name']);
            }
            if($this->enctype) $file['name'] = $this->_enctype($file['name']);

            else $file['name'] = $this->_slug($file['name']);

            if(move_uploaded_file($file['tmp_name'], $this->path_base.$file['name'])){
                return $file['name'];
            }
        }
    }


    /*
     * Méto para criar um nome único para o arquivo
     */
    private function _enctype( $name = '' ){

        $newName = md5(String::uuid()).$this->get_extension($name);

        return $newName;
    }

    /*
     * Método que verifica um diretório se existe. Não existir cria e coloca permissão 0777
     */
    private function _checkDirectory(){

        if(!file_exists($this->path_base)){
            if(mkdir($this->path_base,0777)){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    }

    /*
     * Método para deletar arquivos
     */

    public function _deleteFile( $file , $path ){
        unlink($path.$file);
    }
    /*
     * Método para retirar os acentos
     */
    private function _slug($fileName , $enc = 'UTF-8'){

       $map = array(
        'A' => '/&Agrave;|&Aacute;|&Acirc;|&Atilde;|&Auml;|&Aring;/',
        'a' => '/&agrave;|&aacute;|&acirc;|&atilde;|&auml;|&aring;/',
        'C' => '/&Ccedil;/',
        'c' => '/&ccedil;/',
        'E' => '/&Egrave;|&Eacute;|&Ecirc;|&Euml;/',
        'e' => '/&egrave;|&eacute;|&ecirc;|&euml;/',
        'I' => '/&Igrave;|&Iacute;|&Icirc;|&Iuml;/',
        'i' => '/&igrave;|&iacute;|&icirc;|&iuml;/',
        'N' => '/&Ntilde;/',
        'n' => '/&ntilde;/',
        'O' => '/&Ograve;|&Oacute;|&Ocirc;|&Otilde;|&Ouml;/',
        'o' => '/&ograve;|&oacute;|&ocirc;|&otilde;|&ouml;/',
        'U' => '/&Ugrave;|&Uacute;|&Ucirc;|&Uuml;/',
        'u' => '/&ugrave;|&uacute;|&ucirc;|&uuml;/',
        'Y' => '/&Yacute;/',
        'y' => '/&yacute;|&yuml;/',
        'a.' => '/&ordf;/',
        'o.' => '/&ordm;/',
        '-' => '/ /');

        $newName = preg_replace(array_values($map), array_keys($map), htmlentities($fileName,ENT_NOQUOTES, $enc));
     
        return $newName;
    }

    /*
     * método...
     */
    private function get_extension($filename)
	{
		$x = explode('.', $filename);
		return '.'.end($x);
	}

	private function thumbCreate($sourceFilename,$target,$fileName,$parametros){
		//echo $sourceFilename.' - '.$target.' - '.$fileName.' - '.$parametros."<br />";
		App::import('Vendor', 'phpThumb', array('file' => 'phpThumb'.DS.'phpthumb.class.php'));
	    $phpThumb = new phpThumb();
		if(is_readable($sourceFilename)){
			$phpThumb->src = $sourceFilename;
			foreach($parametros as $key=>$valor){
				$phpThumb->setParameter($key, $valor);
			}

			$phpThumb->config_prefer_imagemagick = false;
			$phpThumb->config_output_format = 'jpg';
			$phpThumb->config_error_die_on_error = true;
			$phpThumb->config_document_root = '';
			$phpThumb->config_temp_directory = APP . 'tmp';
			$phpThumb->config_cache_directory = $target;
			$phpThumb->config_cache_disable_warning = true;

			$cacheFilename = $fileName;

			$phpThumb->cache_filename = $phpThumb->config_cache_directory.$cacheFilename;

			//if(!is_file($phpThumb->cache_filename)){ // Check if image is already cached.
			if ($phpThumb->GenerateThumbnail()) {
				$phpThumb->RenderToFile($phpThumb->cache_filename);
			}
			else{
				return false;
			}
			//}
		} else { // Can't read source
			return false;
		}
		//die();
		return true;
	}
	private function geraThumbnail($caminhoDaFoto,$opcoes){
		$arquivo = basename($caminhoDaFoto);
		//$arquivo = $arquivo.".".$opcoes['f'];
		$diretorioFinal=$this->path_base.'p'.DS;
		if($this->thumbCreate($caminhoDaFoto,
					$diretorioFinal,
					$arquivo,
					$opcoes)){
						return $arquivo;
					}
					return false;
	}
	public function upAndThumb($file,$opcoes){
		$finalFile=$this->do_upload($file);
		$this->geraThumbnail(($this->path_base.$finalFile),$opcoes);
		return $finalFile;
	}




	private function createImage($path){


		$ext = strtolower(substr($path,-4));//pego a extens�o do arquivo


		if($ext == ".jpg"){//testo se a imagem � JPEG

			$picture = imagecreatefromjpeg($path);//crio uma imagem jpg de acordo com o caminho dela

		}
		else if($ext == ".png"){//testo se a imagem � PNG

			$picture = imagecreatefrompng($path);//crio uma imagem png de acordo com o caminho dela
		}
		else if($ext == ".gif"){//testo se a imagem � GIF

			$picture = imagecreatefromgif($path);//crio uma imagem gif de acordo com o caminho dela

		}
		else{
			$error=true;
		}

		if($erro){return false;}
		else{return $picture;}
	}


	public function resizeBox($path , $widthMax , $heightMax ,  $pathDst = 0 ){
		$picture = $this->createImage($path);

		$heightPicture  = imagesy($picture);//pega a altura da imagem
		$widthPicture   = imagesx($picture);//pega a largura da imagem

		$height =($heightPicture*$widthMax)/$widthPicture;
		$width =($widthPicture*$heightMax)/$heightPicture;

		if($width>$widthMax){

			$width =$widthMax;

		}
		if($height>$heightMax){

			$height =$heightMax;

		}

		if(!$pathDst){
		      $pathDst =$path;
		}

        $pictureNew = imagecreatetruecolor($width,$height);

        @imagecopyresampled($pictureNew,$picture,0,0,0,0,$width,$height,$widthPicture,$heightPicture);
        @imagejpeg($pictureNew,$pathDst, 95 );
        @imagedestroy($pictureNew);
	}

}

?>

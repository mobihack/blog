<?php
namespace Shatter;
class fileDB{

    public $file;

    public function  __construct($newFile=null){
        if($newFile==null){
            throw new Exception('Please set a file to use the class!');
            die();
        }
        //$newFile=str_replace(array('/','\\'),DIRECTORY_SEPARATOR,$newFile);
        //$newFile=str_replace('&amp;','&',$newFile);

        $this->file=str_replace(basename($newFile),$this->strip(basename($newFile),'file'),$newFile);

    }
    public function read($array=true)
    {

        if (!is_file($this->file)) {
            return false;
        } else {
            $rawData=include($this->file);
            $data = json_decode($rawData,$array);
            if ($this->jsonErrorCheck() == true)
                return $data;
            else
                return false;

        }

    }

    public function write($newData = [],$appendData=false)
    {

            $writeData=$this->dataTraverse($newData);

        if($appendData==true) {
            $oldData=$this->read();

            if($oldData==false){
                $oldData=[];
                $data=$writeData;
            }
            else
                $data = $this->array_merge_recursive_distinct($oldData, $writeData);
        }
        else{
            $data=$writeData;
        }

        $jsonData = json_encode($data);

        if ($this->jsonErrorCheck() == true):
            $data = "<?php
return '$jsonData';
?>";
           file_put_contents($this->file,$data);
           return true;
        else:
            return false;
        endif;


    }

    public function dataTraverse($newData = []){

        $returnData=[];

        foreach ($newData as $itemName => $itemValue):
            if(is_array($itemValue)){
                $newItemValue=$this->dataTraverse($itemValue);
            }
            elseif(is_numeric($itemValue) or is_bool($itemValue)) {
                $newItemValue = $itemValue;
            }
            else{
                $newItemValue=$this->strip($itemValue);
            }
            unset($newData[$itemName]);
            $returnData[$itemName]=$newItemValue;

        endforeach;
    return $returnData;
    }

    public function strip($raw, $mode = false)
    {
        $output = $raw;
            if ($mode == 'text') {
                $output = preg_replace('/[^a-z0-9. ]/i', null, $output);
            }
            else if ($mode == "file") {
                $output = str_replace(array('[',']', '__'), array( null, null, '_'), $output);
            }

        $output = htmlentities($output, ENT_QUOTES, 'UTF-8');
        $output = addslashes($output);
        $output = str_replace('\\','&#92;',$output);
        return $output;
    }


    public function jsonErrorCheck()
    {
        if (json_last_error() != JSON_ERROR_NONE):
            switch (json_last_error()) {
                case JSON_ERROR_DEPTH:
                    $error = 'Maximum stack depth exceeded';
                    break;
                case JSON_ERROR_CTRL_CHAR:
                    $error = 'Unexpected control character found';
                    break;
                case JSON_ERROR_SYNTAX:
                    $error = 'Syntax error, malformed JSON';
                    break;
            }
            throw new Exception('JSON Error: ' . $error);
            return false;
        else:

            return true;
        endif;
    }
    public function array_merge_recursive_distinct(array &$array1,array &$array2){
    $merged = $array1;

    foreach ( $array2 as $key => &$value )
    {
        if ( is_array ( $value ) && isset ( $merged [$key] ) && is_array ( $merged [$key] ) )
        {
            if($key==null)
                $merged [] = $this->array_merge_recursive_distinct ( $merged [$key], $value );
                else
            $merged [$key] = $this->array_merge_recursive_distinct ( $merged [$key], $value );
        }
        else
        {

            if($key==null)
                $merged [] = $value;
            else
                $merged [$key] = $value;
        }
    }
    return $merged;
}

}

?>

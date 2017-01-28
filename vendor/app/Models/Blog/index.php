<?php
namespace app\Models\Blog;
class Index{
    static public function latest($searchDir) {
        $output = array();
        foreach( new \RecursiveIteratorIterator(
                     new \RecursiveDirectoryIterator( $searchDir, \FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS ) ) as $value ) {
            if ( $value->isFile() && strstr($value->getBaseName(),'.post.')=='.post.php' ) {
                $output[] = array( 'time'=>$value->getCTime(), 'file'=>$value->getPathName() );
            }
    }
        usort ( $output, function( $a, $b ) {
                return $a['time'] < $b['time'];
            });
        return $output;
    }

    static public function formatData($blogTopics,$index){
        $blogPosts = [];

        //var_dump($start,$end,$count);
        for ($i = $index['start']; $i < $index['end']; $i++) {

            $post = new \Shatter\FileDB($blogTopics[$i]['file']);
            try {
                $postData = $post->read();
            } catch (\Exception $error) {
                die('Blog Post Error!');
            }

            $postData ['posturl'] = SF_INSTALLDIR . '/' . str_replace(array(BASEPATH.'data/post' . '/', '.post.php'), null, $blogTopics[$i]['file']) . '.html';
            $postData ['authorurl'] = SF_INSTALLDIR.'/author/'.$postData['author'].'/';
            $postData ['formatted_date'] = date('F d, Y',$postData['created_at']);
            $blogPosts[] = $postData;
        }

        return $blogPosts;


    }
}
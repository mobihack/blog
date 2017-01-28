<?php
namespace app\Controllers\blog;
class blog
{
    protected $app;
    public function __construct($app)
    {
        $this->app=$app;
    }

    public function index($searchDir=BASEPATH.'data/post',$searchType=['type'=>null,'data'=>null])
    {
        $noPerPage = 5;

        $blogTopics = \app\Models\Blog\index::latest($searchDir);

        /* Blog Post pagination and count per page calculation */
        $page = isset($setPage) ? $setPage : 1;
        $count = count($blogTopics);
        $noOfPages = ceil($count / $noPerPage);

        if ($page > $noOfPages)
            $page = $noOfPages;

        $start = ($noPerPage * ($page - 1));

        if ($start < 0)
            $start = 0;
        else if ($start > $count)
            $start = 0;

        $end = $start + $noPerPage;
        if ($end > $count)
            $end = $count;



            $data=array(
                'blogPosts'=>\app\Models\Blog\Index::FormatData($blogTopics,array('start'=>$start,'end'=>$end)),
                'noOfPages'=>$noOfPages,
                'page'=>$page
                );

                $data['pageHeader']=['type'=>$searchType['type'],'data'=>$searchType['data']];

            $this->app->render('blog/index',$data);
    }
    public function viewMonth()
    {
        $searchDir=BASEPATH.'data/post/'.$this->app->routerMatch['params']['year'].'/'.$this->app->routerMatch['params']['month'].'/';
        if(is_dir($searchDir)){
            $this->index($searchDir,['type'=>'custom','data'=>date('F, Y', strtotime('01-'.$this->app->routerMatch['params']['month'].'-'.$this->app->routerMatch['params']['year']))]);
        }else{
            $this->app->callError404();
        }
    }
    public function viewYear()
    {
        $searchDir=BASEPATH.'data/post/'.$this->app->routerMatch['params']['year'].'/';
        if(is_dir($searchDir)){
            $this->index($searchDir,['type'=>'custom','data'=>$this->app->routerMatch['params']['year']]);
        }else{
            $this->app->callError404();
        }
    }

    public function viewPost()
    {
        $postFile=BASEPATH.'data/post/'.$this->app->routerMatch['params']['year'].'/'.$this->app->routerMatch['params']['month'].'/'.$this->app->routerMatch['params']['post'].'.post.php';
        if(file_exists($postFile)) {

            $post = new \Shatter\FileDB($postFile);

            $postData = $post->read();

            $author = new \Shatter\FileDB(BASEPATH.'/data/author/'.strtolower($postData['author']).'.user.php');

            $authorData = $author->read();


            $data=array(
                'authorData'=>$authorData,
                'postData'=>$postData
            );

            $this->app->render('blog/post',$data);
        }
        else{
            $this->app->callError404();
        }
    }

    public function viewAuthor()
    {
        $authorFile=BASEPATH.'/data/author/'.strtolower($this->app->routerMatch['params']['author']).'.user.php';

        if(file_exists($authorFile)) {


            $author = new \Shatter\FileDB($authorFile);
            $authorData = $author->read();


            $data=array(

                'authorData'=>$authorData,
            );

            $this->app->render('blog/user',$data);
        }
    }
}
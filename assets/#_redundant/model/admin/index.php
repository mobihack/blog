<?php

function postSearch($searchDir) {
    $output = array();
    foreach( new RecursiveIteratorIterator(
                 new RecursiveDirectoryIterator( $searchDir, FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS ) ) as $value ) {
        if ( $value->isFile() && strstr($value->getBaseName(),'.post.')=='.post.php' ) {
            $output[] = array( 'time'=>$value->getCTime(), 'file'=>$value->getPathName() );
        }
    }

    return $output;
}
function timeago($timestamp) {

    $strTime = array("second", "minute", "hour", "day", "month", "year");
    $length = array("60","60","24","30","12","10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
        $diff     = time()- $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        return $diff.' ' . $strTime[$i] .($diff>1?'s':null). ' ago ';
    }
}
$sidebar=[];
$notiData=new Shatter\FileDB(BASEPATH.'/data/panel/log.panel.php');
try {
    $notifications = array_reverse($notiData->read());
}catch (Exception $error){
    die('Panel Notifications Error!');
}
$sidebar['notifications']=$notifications;

if($setPage=='logout'){

}
else if($setPage==null){
    $setPage='index';
}

if(is_file(BASEPATH.'views/admin/'.$setPage.'.php')){

    if($setPage=='index'){



    }
    elseif($setPage=='users'){
        $noPerPage=20;
        $blogTopics=glob(BASEPATH.'data/author/*.user.php');

        /* Blog Post pagination and count per page calculation */
        $page=isset($setPage)?$setPage:1;
        $count=count($blogTopics);
        $noOfPages=ceil($count / $noPerPage);

        if ($page > $noOfPages)
            $page = $noOfPages;

        $start = ($noPerPage * ($page-1));

        if ($start < 0)
            $start = 0;
        else if ($start > $count)
            $start = 0;

        $end = $start + $noPerPage;
        if ($end > $count)
            $end = $count;

        $userList='';


        for ($i = $start; $i <$end; $i++)
        {

            $post=new Shatter\FileDB($blogTopics[$i]);
            try {
                $postData = $post->read();
            }catch (Exception $error){
                die('Blog Post Error!');
            }
            $userList.='<div class="media">
  <div class="media-left media-middle">
    <a href="'.SF_INSTALLDIR.'/admin/users/profile='.strtolower($postData['id']).'/">
      <img class="media-object" style="height: 6em; width: 6em;border-radius: 50%;" src="'.SF_INSTALLDIR.'/data/author_img/'.strtolower($postData['id']).'-img.jpg" alt="'.$postData['name'].' Image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">'.$postData['name'].' <small>(@'.$postData['id'].')</small></h4>
    <p>Account started on '.date('F d, Y',$postData['created_at']).'</p>
    <div class="btn-group btn-group-sm" role="group">
                            <a class="btn btn-outline btn-success" href="'.SF_INSTALLDIR.'/admin/users/profile='.strtolower($postData['id']).'/">profile</a>
                            <a class="btn btn-outline btn-info" href="'.SF_INSTALLDIR.'/admin/users/edit='.strtolower($postData['id']).'/">edit</a>
                            <a class="btn btn-outline btn-warning" href="'.SF_INSTALLDIR.'/admin/users/revoke='.strtolower($postData['id']).'/">revoke role</a><!--- remember a logout will only fix the role chang -->
                            <a class="btn btn-outline btn-danger" href="'.SF_INSTALLDIR.'/admin/users/delete='.strtolower($postData['id']).'/">remove</a>

                        </div> 
  </div>
</div>
<hr>';

        }
    }
    elseif($setPage=='posts'){

        $noPerPage=20;

        if($setSubPage==null || $setSubPage=="all"){
            $setSubPage='all';
            $blogTopics=postSearch('data/post');

            /* Blog Post pagination and count per page calculation */
            $page=isset($setPage)?$setPage:1;
            $count=count($blogTopics);
            $noOfPages=ceil($count / $noPerPage);

            if ($page > $noOfPages)
                $page = $noOfPages;

            $start = ($noPerPage * ($page-1));

            if ($start < 0)
                $start = 0;
            else if ($start > $count)
                $start = 0;

            $end = $start + $noPerPage;
            if ($end > $count)
                $end = $count;

            $blogPosts='';


            for ($i = $start; $i <$end; $i++)
            {

                $post=new Shatter\FileDB($blogTopics[$i]['file']);
                try {
                    $postData = $post->read();
                }catch (Exception $error){
                    die('Blog Post Error!');
                }
                $blogPosts.='<div class="post-preview">
                    <a href="'.SF_INSTALLDIR.'/'.str_replace(array('data/post'.'/','.post.php'),null,$blogTopics[$i]['file']).'.html">
                        <h2 class="post-title">
                            '.$postData['title'].'
                        </h2>
                        <h3 class="post-subtitle">
                            '.$postData['subtitle'].'
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="'.SF_INSTALLDIR.'/author/'.$postData['author'].'/">'.$postData['author'].'</a> on '.date('F d, Y',$postData['created_at']).'</p>
                </div>
                <hr>';

            }
        }elseif($setSubPage=="series"){
            $blogTopics=glob(BASEPATH.'data/series/*.series.php');

            /* Blog Post pagination and count per page calculation */
            $page=isset($setPage)?$setPage:1;
            $count=count($blogTopics);
            $noOfPages=ceil($count / $noPerPage);

            if ($page > $noOfPages)
                $page = $noOfPages;

            $start = ($noPerPage * ($page-1));

            if ($start < 0)
                $start = 0;
            else if ($start > $count)
                $start = 0;

            $end = $start + $noPerPage;
            if ($end > $count)
                $end = $count;

            $blogPosts='';


            for ($i = $start; $i <$end; $i++)
            {

                $post=new Shatter\FileDB($blogTopics[$i]);
                try {
                    $postData = $post->read();
                }catch (Exception $error){
                    die('Blog Post Error!');
                }
                $blogPosts.='<div class="post-preview">
                    <a href="'.SF_INSTALLDIR.'/'.str_replace(array('data/post'.'/','.post.php'),null,$blogTopics[$i]).'.html">
                        <h2 class="post-title">
                            '.$postData['name'].'
                        </h2>
                        <h3 class="post-subtitle">
                            '.$postData['id'].'
                        </h3>
                    </a>
                    <p class="post-meta">Total <b>'.count($postData['created_at']).'</b> posts! Account started on '.date('F d, Y',$postData['created_at']).'</a>.</p>
                </div>
                <hr>';

            }
            if($blogPosts==null){
                $blogPosts='<div class="text-center">
<span class="fa fa-close" style="font-size: 10em"></span><br>
            <span style="font-weight: lighter">No Series</span><br>
            <span style="font-weight: lighter; color:grey">Create a <a href="'.SF_INSTALLDIR.'/admin/posts/series">new series</a> to start!</span>
                      </div>';
            }
        }elseif($setSubPage=="category"){
                $blogPosts='<div class="text-center">
<span class="fa fa-close" style="font-size: 10em"></span><br>
            <span style="font-weight: lighter">No Categories</span><br>
            <span style="font-weight: lighter; color:grey">Category Support will be added soon!</span>
                      </div>';
        }else if($setSubPage=="user"){

            $blogTopics=glob(BASEPATH.'data/author/*.user.php');

            /* Blog Post pagination and count per page calculation */
            $page=isset($setPage)?$setPage:1;
            $count=count($blogTopics);
            $noOfPages=ceil($count / $noPerPage);

            if ($page > $noOfPages)
                $page = $noOfPages;

            $start = ($noPerPage * ($page-1));

            if ($start < 0)
                $start = 0;
            else if ($start > $count)
                $start = 0;

            $end = $start + $noPerPage;
            if ($end > $count)
                $end = $count;

            $blogPosts='';


            for ($i = $start; $i <$end; $i++)
            {

                $post=new Shatter\FileDB($blogTopics[$i]);
                try {
                    $postData = $post->read();
                }catch (Exception $error){
                    die('Blog Post Error!');
                }
                $blogPosts.='<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" style="height: 6em; width: 6em;border-radius: 50%;" src="'.SF_INSTALLDIR.'/data/author_img/'.strtolower($postData['id']).'-img.jpg" alt="'.$postData['name'].' Image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">'.$postData['name'].' <small>(@'.$postData['id'].')</small></h4>
    <span>Total <b>'.count($postData['created_at']).'</b> posts! <a href="'.SF_INSTALLDIR.'/'.str_replace(array('data/post'.'/','.post.php'),null,$blogTopics[$i]).'.html">a</a>.</span>
    <p>Account started on '.date('F d, Y',$postData['created_at']).'</p> 
  </div>
</div>
<hr>';

            }
        }


    }
    elseif($setPage=='main'){

        $dasboardData=[];

        $dasboardData['postCount']=count(postSearch(BASEPATH.'data/post/'));
        $dasboardData['userCount']=count(glob(BASEPATH.'data/author/*.user.php'));
        //$dasboardData['']=;
        $dasboardData['isLocked']=(is_file(BASEPATH.'data/blog.lock.php'))?'ON':'OFF';

        $dasboardData['notifications']=$notifications;

    }

    include (BASEPATH.'views/admin/_header.php');
    include (BASEPATH.'views/admin/'.$setPage.'.php');
    include (BASEPATH.'views/admin/_footer.php');
}else{
    header('location:' . SF_INSTALLDIR . '/admin/index');
    die();
}
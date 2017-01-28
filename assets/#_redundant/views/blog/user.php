<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo SF_INSTALLDIR; ?>/assets/img/user-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <img class="user-img" src="<?php echo SF_INSTALLDIR; ?>/data/author_img/<?php echo $userData['id']; ?>-img.jpg" alt="Profile image"/>
                    <h1><?php echo $userData['name']; ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo $userData['subtitle']; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p><?php echo nl2br($userData['bio']); ?></p>
            <hr>
            <p class="post-meta">Joined Blog on <?php echo date('F d, Y',$userData['created_at']);?></p>
        </div>
    </div>
</div>
{{ include('Base/blog/inc/_header.php') }}

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ SF_INSTALLDIR }}/assets/img/user-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <img class="user-img" src="{{ SF_INSTALLDIR }}/data/author_img/{{ authorData.id }}-img.jpg" alt="Profile image"/>
                    <h1>{{ authorData.name }}</h1>
                    <hr class="small">
                    <span class="subheading">{{ authorData.subtitle }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>{{ authorData.bio|raw|nl2br }}</p>
            <hr>
            <p class="post-meta">Joined Blog on {{ authorData.created_at|date('F d, Y') }}</p>
        </div>
    </div>
</div>

{{ include('Base/blog/inc/_footer.php') }}
{{ include('Base/blog/inc/_header.php') }}

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{ SF_INSTALLDIR }}/assets/img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{ postData.title }}</h1>
                    <h2 class="subheading">{{ postData.subtitle }}</h2>
                    <span class="meta">Posted by <a href="{{ SF_INSTALLDIR }}/author/{{ postData.author }}/">{{ postData.author }}</a> on {{ postData.created_at|date('F d, Y') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>{{ postData.content|raw|nl2br }}</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
<div class="page-header">
<h2>Author <small>learn more about {{ authorData.name }}</small></h2>
</div>
                <blockquote>
                <p>{{ authorData.bio_short|raw|nl2br }}</p>
                    </blockquote>
                <br>
                <a class="pull-right btn btn-primary" href="{{ SF_INSTALLDIR }}/author/{{ postData.author }}/">Visit Profile &rarr;</a>
            </div>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-header">
                    <h2>Comments <small>add fuel to the conversation</small></h2>
                </div>
                <div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                     var disqus_config = function () {
                     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                     };
                     */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = '//mobihack.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
        </div>
    </div>
</article>
<hr>

{{ include('Base/blog/inc/_footer.php') }}
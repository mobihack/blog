{{ include('Base/blog/inc/_header.php') }}

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ SF_INSTALLDIR }}/assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                <h2 class="page-header">{% if pageHeader.type=='custom' %}Posts from {{ pageHeader.data }}{% else %}Latest Posts{% endif %}</h2>
            </div>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {% for post in blogPosts %}

                <div class="post-preview">
                    <a href="{{ post.posturl|raw }}">
                        <h2 class="post-title">
                            {{ post.title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ post.subtitle }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="{{ post.authorurl }}">{{ post.author }}</a> on {{ post.formatted_date }}</p>
                </div>
                <hr>

                {% endfor %}

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">

                        {% if page==1 %}
                        <!--nothing currently -->
                        {% elseif page>1 %}
                            <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page-1; ?>/">&larr; Newer Posts</a>
                        {% else %}
                            <span>&larr; Newer Posts</span>
                        {% endif %}

                    </li>
                    <li class="next">
                        {% if page==1 and page==noOfPages %}
                            <!--nothing currently -->
                        {% elseif page!=noOfPages %}
                            <a href="<?php echo SF_INSTALLDIR; ?>/page/<?php echo $page+1; ?>/">Older Posts &rarr;</a>
                        {% else %}
                            <span>Older Posts &rarr;</span>
                        {% endif %}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

{{ include('Base/blog/inc/_footer.php') }}
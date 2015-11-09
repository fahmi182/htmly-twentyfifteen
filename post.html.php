<article class="post type-post hentry <?php if (!empty($p->image) || !empty ($p->audio) || !empty ($p->video)):?>has-post-thumbnail<?php endif;?>">
    <?php if (!empty($p->image)):?>
    <div class="post-thumbnail">
        <img style="width:100%;" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>">
    </div>
    <?php endif; ?>
    <?php if (!empty($p->audio)):?>
    <div class="post-thumbnail">
        <iframe width="100%" height="200px" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->video)):?>
    <div class="post-thumbnail">
        <iframe width="100%" height="315px" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->quote)):?>
    <div class="post-blockquote">
        <blockquote class="quote"><?php echo $p->quote ?></blockquote>
    </div>
    <?php endif; ?>
    <?php if (!empty($p->link)):?>
    <div class="post-link">
        <a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->link ?></a>
    </div>
    <?php endif; ?>
    <a id="more"></a>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h2>
    </header>
    <div class="entry-content">
        <?php echo $p->body; ?>
    </div>
    <div class="author-info">
        <h2 class="author-heading">Published by</h2>
        <div class="author-avatar">
            <img width="56" height="56" class="avatar avatar-56" src="<?php echo site_url();?>themes/twentyfifteen/images/avatar.png" alt="<?php echo $author->name; ?>">    
        </div><!-- .author-avatar -->

        <div class="author-description">
            <h3 class="author-title"><?php echo $author->name; ?></h3>

            <?php echo $author->about ?>

        </div><!-- .author-description -->
    </div>
    <footer class="entry-footer">
        <span class="posted-on">
            <time class="entry-date published updated"><?php echo date('F d, Y', $p->date) ?></time> 
        </span>
        <span class="byline">
            <span class="author vcard">
                <a href="<?php echo $p->authorUrl; ?>"><?php echo $p->author; ?></a>
            </span>
        </span>
        <span class="cat-links">
            <?php echo $p->category; ?>
        </span>
        <span class="tags-links">
            <?php echo $p->tag; ?>
        </span>
        <?php if (disqus_count()) { ?>
            <span class="comments-link"><a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span>
        <?php } elseif (facebook()) { ?>
            <span class="comments-link"><a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></span>
        <?php } ?>
    </footer>
</article>
<?php if (disqus()): ?>
    <?php echo disqus($p->title, $p->url) ?>
<?php endif; ?>
<?php if (disqus_count()): ?>
    <?php echo disqus_count() ?>
<?php endif; ?>
<?php if (facebook() || disqus()): ?>
<div class="comments-area" id="comments">
    <?php if (facebook()): ?>
        <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
    <?php endif; ?>
    <?php if (disqus()): ?>
        <div id="disqus_thread"></div>
    <?php endif; ?>
</div>
<?php endif; ?>
<nav role="navigation" class="navigation post-navigation">
    <h2 class="screen-reader-text">Post navigation</h2>
    <div class="nav-links">
        <?php if (!empty($prev)): ?>
            <div class="nav-previous"><a rel="prev" href="<?php echo($prev['url']); ?>"><span aria-hidden="true" class="meta-nav">Previous</span> <span class="screen-reader-text">Previous post:</span> <span class="post-title"><?php echo($prev['title']); ?></span></a></div>
        <?php endif; ?>
        <?php if (!empty($next)): ?>
            <div class="nav-next"><a rel="next" href="<?php echo($next['url']); ?>"><span aria-hidden="true" class="meta-nav">Next</span> <span class="screen-reader-text">Next post:</span> <span class="post-title"><?php echo($next['title']); ?></span></a></div>
        <?php endif; ?>
    </div>
</nav>
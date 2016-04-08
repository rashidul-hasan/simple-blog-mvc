
    <div class="callout large primary">
        <div class="row column text-center">
            <h1>Our Blog</h1>
        </div>
    </div>

    <div class="row" id="content">
        <div class="medium-12 columns">

        <?php if($_SESSION['flash']['notice'] != ''): ?>

            <span class="success label">
                <?php echo $_SESSION['flash']['notice'];  ?>
            </span>

        <?php endif; ?>

        <?php if($posts):  ?>

            <?php foreach($posts as $post): ?>

            <div class="blog-post">
                <h3><a href="/posts/<?php echo $post['id']; ?>"><?php echo ucwords($post['title']);  ?></a><small> <?php echo date( 'd-m-Y', strtotime( $post['created_at'] )); ?></small></h3>
                <img class="thumbnail" src="http://placehold.it/850x350">
                <p><?php  echo $post['body']; ?></p>
                <div class="callout">
                    <ul class="menu simple">
                        <li><a href="#"><?php  echo $post['username']; ?></a></li>
                        <li><a href="#">Comments: 3</a></li>
                    </ul>
                </div>
            </div> <!-- end .blog-post -->

            <p>
                <a class="button" href="/posts/<?php echo $post['id']; ?>/edit">edit</a>
                <a class="alert button" href="/posts/<?php echo $post['id'] ?>/delete">delete</a>
            <p>

            <?php  endforeach; ?>
        <?php endif; ?>

        </div> <!-- end column -->
    </div> <!-- end row -->








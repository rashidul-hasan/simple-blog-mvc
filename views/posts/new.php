    <div class="row" id="content">
        <div class="medium-12 columns">

<form action="<?php //echo SERVER_ROOT.'/'; ?>/posts/create" method="post">

    <label>
    Title of your post
    <input type="text" name="post[title]" placeholder="" value="<?php //echo $post['title'];  ?>">
    </label>

    <label>
    Your post
    <textarea placeholder="None" cols="40" name="post[body]" rows="5"><?php //echo $post['body'];  ?></textarea>
    </label>



    <input name="post[user_id]" value="1" type="hidden" />

    <input type="submit" class="success button save" value="save" />

</form>



        </div> <!-- end column -->
    </div> <!-- end row -->

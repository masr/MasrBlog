<li class="sidebar_recent_comments widget">

    <? $comments = mz_get_recent_visitor_comments(5);
    if ($comments) :?>
        <h2>最新评论</h2>
        <ul>
            <? foreach ($comments as $comment) : ?>
            <li class="comment">
                <div class="user_head">
                    <?  if ($comment->comment_author_url) : ?>
                    <a href="<?=$comment->comment_author_url?>" class="user_img">
                        <?=mz_get_cached_avatar($comment->comment_author_email, 30) ?>
                    </a>
                    <a href="<?=$comment->comment_author_url?>">
                        <?=$comment->comment_author?>
                    </a>
                    <? else: ?>
                    <?= mz_get_cached_avatar($comment->comment_author_email, 30) ?>
                    <?= $comment->comment_author ?>
                    <?  endif ?>在
                    <?=mz_get_recent_comment_post_link($comment)?>评论道：
                    </div>
                <div class="txt">
                    <?=$comment->comment_content?>
                </div>
            </li>
            <? endforeach; ?>
        </ul>
        <? else:
        echo "本站点暂无评论";
    endif;
    ?></li>

<h2>Blog</h2>
<p>All blog-like list of all content with the type "post", <a href='<?=create_url("content")?>'>view all content</a>.</p>

<?php if($contents != null):?>
  <?php foreach($contents as $val):?>
    <h3><?=esc($val['title'])?></h3>
    <p class='smaller-text'><em>Posted on <?=$val['created']?> by <?=$val['owner']?></em></p>
    <p><?=filter_data($val['data'], $val['filter'])?></p>
    <p class='smaller-text silent'><a href='<?=create_url("content/edit/{$val['id']}")?>'>edit</a></p>
  <?php endforeach; ?>
<?php else:?>
  <p>No posts exists.</p>
<?php endif;?>
<ul>
<li><a href='<?=create_url('index')?>'>Go to Index Controller</a>
</ul>

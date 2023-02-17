<?php
  $num_args = count($args);
?>

<ul class="text-zinc-400 flex mt-4 justify-center">
  <?php foreach($args as $link): ?>
    <li>
      <a class="bg-blue-600 text-white py-1 px-4 inline-block rounded-md mx-2" href="<?php echo $link['url'] ?>">
        <?php echo $link['title'] ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>
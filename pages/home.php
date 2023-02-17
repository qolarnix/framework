<section class="bg-zinc-900 h-screen flex flex-wrap items-center justify-center">
  <div>
    <h1 class="text-white text-center font-bold text-3xl">
      Framework <span class="text-zinc-400">Homepage</span>
    </h1>

    <?php
      get_template_part(
        'subtitle',
        'PHP Framework for building websites'
      );

      get_template_part(
        'links',
        $links = array(
          array(
            'title' => 'Docs',
            'url' => '/docs'
          ),
          array(
            'title' => '404 Route',
            'url' => '/404'
          )
        )
      );
    ?>
  </div>
</section>
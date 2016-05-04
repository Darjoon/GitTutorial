<section id="all">
    <?php foreach ($allRecipe as $recipe) {
        echo $recipe->rpicture;
  ?>
        <a href="/recipe/detail/<?php echo $recipe->rno ;?>"><img width="100" height="100" src="/public/assets/img/<?php echo $recipe->rpicture; ?>"></a>
    <?php   }
    ?>
</section>


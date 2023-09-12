<?php 
    $db = json_decode(file_get_contents('pages/lostandfound/data.json'), true);
    $no_image_path = 'img/pages/lostandfound/no-photo.png';
?>

<h1>Lost and Found</h1>

<p>All Items found at EF 27 are in Storage and can be redeemed only at the Security FrontDesk at next Eurofurence in Hamburg.</p>

<div class="uk-grid-small uk-grid-match uk-child-width-1-2@l uk-child-width-1-4@xl uk-margin-bottom" uk-grid>
    <?php
    foreach ($db['data'] as $data)
    {
        foreach (['image', 'thumb'] as $imgtype) {
            if ($data[$imgtype])
            {
                $newpath = 'img/pages/lostandfound/' . $imgtype . '/' . basename($data[$imgtype]);

                if (!file_exists($newpath))
                {
                    if (file_put_contents($newpath, file_get_contents($data[$imgtype])))
                    {
                        $data[$imgtype] = $newpath;
                    }
                    else
                    {
                        $data[$imgtype] = $no_image_path;
                    }
                }
                else
                {
                    $data[$imgtype] = $newpath;
                }
            }
            else
            {
                $data[$imgtype] = $no_image_path;
            }
        }

        switch($data['status'])
        {
            case 'L': $data['status'] = "Lost Item"; break;
            case 'F': $data['status'] = "Found Item"; break;
            default: $data['status'] = "Unknown Status '".$data['status']."'"; break;
        }
    ?>

    <div>
        <div class="uk-card uk-card-default" uk-scrollspy="cls:uk-animation-fade">
            <div class="uk-card-media-top">
                <div uk-lightbox>
                    <a href="<?= $data['image'] ?>" class="ef-hide-ext"><img class="uk-height-max-medium" src="<?= $data['thumb'] ?>" alt="(no image)" /></a>
                </div>
            </div>
            <div class="uk-card-body">
                <div class="uk-card-badge uk-label">
                    <?= $data['status'] ?>
                </div>

                <h3 class="uk-card-title reset-font"> <?= $data['title'] ?></h3>
                <p>Item ID: <?= $data['id'] ?></p>

                <p><?= $data['description'] ?></p>
                <?= $data['lost_timestamp']? "<p>Lost: " . $data['lost_timestamp'] . "</p>" : "" ?>
                <?= $data['found_timestamp']? "<p>Found: " . $data['found_timestamp'] . "</p>" : "" ?>
                <?= $data['return_timestamp']? "<p>Return: " . $data['return_timestamp'] . "</p>" : "" ?>
            </div>
        </div>
    </div>
    <? } ?>

</div>
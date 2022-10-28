<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Stat Tracker</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/app.css')); ?>" />
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>
    </head>

    <body class="bg-black text-white">
        <header class="h-32 bg-gray-800">

            <nav>
                <div class="flex items-center">
                    <ul class="flex">
                        <li class="hover:underline mx-8"><a href="/categories">Categories</a></li>
                        <li class="hover:underline mr-8"><a href="/teams">Teams</a></li>
                        <li class="hover:underline mr-8"><a href="/games">Games</a></li>
                        <li class="hover:underline"><a href="/stats">Stats</a></li>
                    </ul>
                </div>
            </nav>

        </header>
        <div class="min-h-screen">
            <?php echo e($slot); ?>

        </div>
    </body>

</html><?php /**PATH C:\xampp\Projects\Quiz\resources\views/components/layout.blade.php ENDPATH**/ ?>
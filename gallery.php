<!-- including header secition -->
<?php
$title="Gallery || ADS EXHIBITION AND EVENTS SOLUTION";
$dir="gallery";
 include('structure/header.php'); ?>
<!-- End of Header -->


<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- CODE HERE -->

 <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                Gallery
                </h3>
            </div>
        </section><!--page-tree end here-->
  <div class="space-70"></div>
  <div class="container popup-container mb50">
           <div class="row">
               <?php

/**
 * Optimized Gallery Generator
 * Iterates from 1 to the calculated total number of files in the directory
 * and dynamically checks for the presence of .mp4, .jpg, and .png files
 * before displaying them. This version includes accurate file counting and client-side filtering.
 *
 * NOTE: This requires the PHP script to be able to access the file system
 * relative to the directory where this script is executed.
 */
?>
<style>
/* CSS for consistent aspect ratio alignment */
.gallery-item-fixed {
    position: relative;
    width: 100%;
    /* 4:3 Aspect Ratio (75% height relative to width). Change '75%' for a different ratio (e.g., 56.25% for 16:9). */
    padding-bottom: 75%;
    overflow: hidden;
}

.gallery-item-fixed img,
.gallery-item-fixed video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures media fills container without distortion */
}

/* CSS for Filtering */
.filter-button {
    cursor: pointer;
    padding: 8px 15px;
    margin: 5px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.filter-button.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}
/* Ensure the gallery items are initially visible (handled by default), but the class determines visibility */
.gallery-container {
    display: flex; /* Assuming the container is flexible or uses a row wrapper */
    flex-wrap: wrap;
}

</style>

<!-- Add client-side script for filtering -->
<script>
    function filterGallery(filter) {
        // Get all filter buttons and remove the 'active' class
        const buttons = document.querySelectorAll('.filter-button');
        buttons.forEach(button => button.classList.remove('active'));

        // Set the clicked button as 'active'
        document.querySelector(`.filter-button[data-filter="${filter}"]`).classList.add('active');

        // Get all gallery items
        const items = document.querySelectorAll('.gallery-item');

        items.forEach(item => {
            // Show all if 'all' is selected
            if (filter === 'all') {
                item.style.display = 'block';
            } else {
                // If the item has the required filter class, show it, otherwise hide it
                if (item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            }
        });
    }

    // Set 'All' filter as active by default on load
    document.addEventListener('DOMContentLoaded', () => {
        filterGallery('all');
    });
</script>

<div class="row">
    <?php

/**
 * Optimized Gallery Generator
 * Iterates from 1 to the calculated total number of files in the directory
 * and dynamically checks for the presence of .mp4, .jpg, and .png files
 * before displaying them. This version includes accurate file counting and client-side filtering.
 *
 * *** TROUBLESHOOTING TIP: MEDIA NOT SHOWING ***
 * If your images/videos do not load, it means the path 'assets/img/gallery/' is incorrect
 * relative to the location of this PHP file. You may need to adjust $GALLERY_DIR.
 * For example, if this PHP script is in a 'pages' folder, the path should be '../assets/img/gallery/'.
 *
 * NOTE: This requires the PHP script to be able to access the file system
 * relative to the directory where this script is executed.
 */
?>
<style>
/* CSS for consistent aspect ratio alignment */
.gallery-item-fixed {
    position: relative;
    width: 100%;
    /* 4:3 Aspect Ratio (75% height relative to width). Change '75%' for a different ratio (e.g., 56.25% for 16:9). */
    padding-bottom: 75%;
    overflow: hidden;
}

.gallery-item-fixed img,
.gallery-item-fixed video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures media fills container without distortion */
}

/* CSS for Filtering */
.filter-button {
    cursor: pointer;
    padding: 8px 15px;
    margin: 5px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.filter-button.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}
/* New class for hiding items reliably */
.hidden-item {
    display: none !important;
}

.gallery-container {
    display: flex; /* Assuming the container is flexible or uses a row wrapper */
    flex-wrap: wrap;
}

</style>

<!-- Add client-side script for filtering -->
<script>
    function filterGallery(filter) {
        // Get all filter buttons and remove the 'active' class
        const buttons = document.querySelectorAll('.filter-button');
        buttons.forEach(button => button.classList.remove('active'));

        // Set the clicked button as 'active'
        document.querySelector(`.filter-button[data-filter="${filter}"]`).classList.add('active');

        // Get all gallery items
        const items = document.querySelectorAll('.gallery-item');

        items.forEach(item => {
            // Start by hiding the item
            item.classList.add('hidden-item');

            let isVisible = false;

            // Check if item should be visible
            if (filter === 'all') {
                isVisible = true;
            } else if (item.classList.contains(filter)) {
                isVisible = true;
            }

            // Show item if visibility condition met
            if (isVisible) {
                item.classList.remove('hidden-item');
            }
        });
    }

    // Set 'All' filter as active by default on load
    document.addEventListener('DOMContentLoaded', () => {
        filterGallery('all');
    });
</script>

<div class="row">
    <?php

/**
 * Optimized Gallery Generator
 * Iterates from 1 to the calculated total number of files in the directory
 * and dynamically checks for the presence of .mp4, .jpg, and .png files
 * before displaying them. This version includes accurate file counting and client-side filtering.
 *
 * *** TROUBLESHOOTING TIP: MEDIA NOT SHOWING ***
 * If your images/videos do not load, it means the path 'assets/img/gallery/' is incorrect
 * relative to the location of this PHP file. You may need to adjust $GALLERY_DIR.
 * For example, if this PHP script is in a 'pages' folder, the path should be '../assets/img/gallery/'.
 *
 * NOTE: This requires the PHP script to be able to access the file system
 * relative to the directory where this script is executed.
 */
?>
<style>
/* CSS for consistent aspect ratio alignment */
.gallery-item-fixed {
    position: relative;
    width: 100%;
    
    /* MODIFIED: Changed from 4:3 (75%) to 16:9 (56.25%) for better video viewing */
    /* Modern aspect ratio property */
    aspect-ratio: 16 / 9;
    /* Fallback for older browsers (16:9 ratio is 9/16 = 0.5625) */
    padding-bottom: 56.25%; 
    
    overflow: hidden;
}

.gallery-item-fixed img,
.gallery-item-fixed video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures media fills container without distortion */
}

/* CSS for Filtering */
.filter-button {
    cursor: pointer;
    padding: 8px 15px;
    margin: 5px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.filter-button.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}
/* New class for hiding items reliably */
.hidden-item {
    display: none !important;
}

.gallery-container {
    display: flex; /* Assuming the container is flexible or uses a row wrapper */
    flex-wrap: wrap;
}

</style>

<!-- Add client-side script for filtering -->
<script>
    function filterGallery(filter) {
        // Get all filter buttons and remove the 'active' class
        const buttons = document.querySelectorAll('.filter-button');
        buttons.forEach(button => button.classList.remove('active'));

        // Set the clicked button as 'active'
        document.querySelector(`.filter-button[data-filter="${filter}"]`).classList.add('active');

        // Get all gallery items
        const items = document.querySelectorAll('.gallery-item');

        items.forEach(item => {
            // Start by hiding the item
            item.classList.add('hidden-item');

            let isVisible = false;

            // Check if item should be visible
            if (filter === 'all') {
                isVisible = true;
            } else if (item.classList.contains(filter)) {
                isVisible = true;
            }

            // Show item if visibility condition met
            if (isVisible) {
                item.classList.remove('hidden-item');
            }
        });
    }

    // Set 'All' filter as active by default on load
    document.addEventListener('DOMContentLoaded', () => {
        filterGallery('all');
    });
</script>

<div class="row">
    <?php

/**
 * Optimized Gallery Generator
 * Iterates from 1 to the calculated total number of files in the directory
 * and dynamically checks for the presence of .mp4, .jpg, and .png files
 * before displaying them. This version includes accurate file counting and client-side filtering.
 *
 * *** TROUBLESHOOTING TIP: MEDIA NOT SHOWING ***
 * If your images/videos do not load, it means the path 'assets/img/gallery/' is incorrect
 * relative to the location of this PHP file. You may need to adjust $GALLERY_DIR.
 * For example, if this PHP script is in a 'pages' folder, the path should be '../assets/img/gallery/'.
 *
 * NOTE: This requires the PHP script to be able to access the file system
 * relative to the directory where this script is executed.
 */
?>
<style>
/* CSS for consistent aspect ratio alignment (Made more robust with !important) */
.gallery-item-fixed {
    position: relative;
    width: 100% !important; /* Ensure it takes full column width */
    
    /* MODIFIED: 16:9 (Widescreen) ratio for videos */
    aspect-ratio: 16 / 9;
    padding-bottom: 56.25%; /* Fallback for older browsers (16:9 ratio is 9/16 = 0.5625) */
    
    overflow: hidden;
}

/* TARGET the actual media elements and force them to fill the container */
.gallery-item-fixed img,
.gallery-item-fixed video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important; 
    height: 100% !important;
    object-fit: cover !important; /* Ensures media fills container without distortion */
}

/* **NEW FIX: Explicitly target video element to prevent browser sizing overrides** */
.gallery-item-fixed video {
    /* Use min/max to ensure the video itself respects the forced 100% dimensions */
    min-width: 100%;
    min-height: 100%;
}

/* CSS for Filtering */
.filter-button {
    cursor: pointer;
    padding: 8px 15px;
    margin: 5px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.filter-button.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}
/* New class for hiding items reliably */
.hidden-item {
    display: none !important;
}

.gallery-container {
    display: flex; /* Assuming the container is flexible or uses a row wrapper */
    flex-wrap: wrap;
}

</style>

<!-- Add client-side script for filtering -->
<script>
    function filterGallery(filter) {
        // Get all filter buttons and remove the 'active' class
        const buttons = document.querySelectorAll('.filter-button');
        buttons.forEach(button => button.classList.remove('active'));

        // Set the clicked button as 'active'
        document.querySelector(`.filter-button[data-filter="${filter}"]`).classList.add('active');

        // Get all gallery items
        const items = document.querySelectorAll('.gallery-item');

        items.forEach(item => {
            // Start by hiding the item
            item.classList.add('hidden-item');

            let isVisible = false;

            // Check if item should be visible
            if (filter === 'all') {
                isVisible = true;
            } else if (item.classList.contains(filter)) {
                isVisible = true;
            }

            // Show item if visibility condition met
            if (isVisible) {
                item.classList.remove('hidden-item');
            }
        });
    }

    // Set 'All' filter as active by default on load
    document.addEventListener('DOMContentLoaded', () => {
        filterGallery('all');
    });
</script>

<div class="row">
<?php

// --- Configuration Variables ---
$GALLERY_DIR = 'assets/img/gallery/';
// We limit the display loop to 100 max, but you can change this.
$MAX_LOOP_ITERATIONS = 100;
$BASE_COLUMN_CLASSES = 'col-md-4 margin-btm-20 gallery-item'; // Base classes for every item
// -------------------------------

// --- Directory Count Logic (Corrected and Unified) ---
$ALL_EXTENSIONS = ['mp4', 'jpg', 'png'];
$totalDirectoryCount = 0;
$videoCount = 0;
$imageCount = 0;
$maxIndexFound = 0; // To determine the actual maximum number to loop up to.

// Loop through each extension to get the full count and separate counts
foreach ($ALL_EXTENSIONS as $ext) {
    // Find all files matching the pattern (e.g., assets/img/gallery/*.jpg)
    $files = glob($GALLERY_DIR . '*.{' . $ext . '}', GLOB_BRACE);
    $count = count($files);
    $totalDirectoryCount += $count;

    if ($ext === 'mp4') {
        $videoCount = $count;
    } else {
        $imageCount += $count;
    }

    // Also, find the largest numerical index to ensure we don't try to loop past existing files
    foreach ($files as $file) {
        // Extract the filename (e.g., '12.jpg')
        $filename = basename($file);
        // Extract the number part (e.g., '12') before the dot
        if (preg_match('/^(\d+)\./', $filename, $matches)) {
            $maxIndexFound = max($maxIndexFound, (int)$matches[1]);
        }
    }
}

// Set the loop limit to the actual maximum index found (or a hardcoded limit if preferred)
$LOOP_LIMIT = min($MAX_LOOP_ITERATIONS, $maxIndexFound);

// Initialize a counter to track the actual number of media files found and displayed
$galleryCount = 0;
?>

<!-- Filter Buttons Section -->
<div class="col-12 text-center mb-4">
    <!-- Counts now correctly reflect files found via glob() -->
    <button class="filter-button active" data-filter="all" onclick="filterGallery('all')">All (<?php echo $totalDirectoryCount; ?>)</button>
    <button class="filter-button" data-filter="is-image" onclick="filterGallery('is-image')">Images (<?php echo $imageCount; ?>)</button>
    <button class="filter-button" data-filter="is-video" onclick="filterGallery('is-video')">Videos (<?php echo $videoCount; ?>)</button>
</div>

<!-- Start the optimized loop in a gallery container -->
<div class="gallery-container">
<?php
// We loop up to the highest numerical index found in the directory
for ($i = 1; $i <= $LOOP_LIMIT; $i++) {
    
    // 1. Check for Video (.mp4) first
    $videoPath = $GALLERY_DIR . $i . '.mp4';

    if (file_exists($videoPath)) {
        $item_classes = $BASE_COLUMN_CLASSES . ' is-video';
        // If MP4 exists, display the video player
        ?>
        <div class="<?php echo $item_classes; ?>">
            <!-- BEGIN Fixed Height Wrapper -->
            <div class="gallery-item-fixed">
                <video controls preload="metadata">
                    <source src="<?php echo $videoPath; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- END Fixed Height Wrapper -->
        </div>
        <?php
        $galleryCount++; // Increment counter for video
        continue; // Skip the rest of the checks for this index and move to the next iteration
    }

    // 2. Check for Images (.jpg or .png)
    $imageFound = false;
    $imagePath = '';
    $imageExtensions = ['.jpg', '.png'];

    foreach ($imageExtensions as $ext) {
        $tempPath = $GALLERY_DIR . $i . $ext;
        if (file_exists($tempPath)) {
            $imagePath = $tempPath;
            $imageFound = true;
            break; // Found the image, no need to check other extensions
        }
    }

    if ($imageFound) {
        $item_classes = $BASE_COLUMN_CLASSES . ' is-image';
        // If an image (JPG or PNG) exists, display it
        ?>
        <div class="<?php echo $item_classes; ?>">
            <!-- BEGIN Fixed Height Wrapper -->
            <div class="gallery-item-fixed">
                <a href="<?php echo $imagePath; ?>">
                    <img src="<?php echo $imagePath; ?>" alt="Gallery Item <?php echo $i; ?>">
                </a>
            </div>
            <!-- END Fixed Height Wrapper -->
        </div>
        <?php
        $galleryCount++; // Increment counter for image
    }

    // If neither image nor video exists for $i, nothing is displayed, and the loop moves to the next number.
}
?>
</div> 
</div> <!-- Close row -->

</div> <!-- Close row -->

</div> <!-- Close row -->

</div> <!-- Close row -->
           </div>
</div>


<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->
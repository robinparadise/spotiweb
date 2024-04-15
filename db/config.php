<?php
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spotiweb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {      
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database if it doesn't exist
    try {
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
      if (mysqli_query($conn, $sql)) {
          // echo "Database created successfully<br>";
      } else {
          echo "Error creating database: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating database: " . $e->getMessage() . "<br>";
    }

    // Connect to the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    try {
      // Create table if it doesn't exist
      $sql = "CREATE TABLE IF NOT EXISTS `articles` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `category` varchar(255) NOT NULL,
          `title` varchar(255) NOT NULL,
          `description` text NOT NULL,
          `image_url` varchar(255) NOT NULL,
          PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
      if (mysqli_query($conn, $sql)) {
          // echo "Table created successfully<br>";
      } else {
          echo "Error creating table: " . mysqli_error($conn) . "<br>";
      }
    } catch (Exception $e) {
      echo "Error creating table: " . $e->getMessage() . "<br>";
    }

    return $conn;
}

function populateData() {
    // Connect to the database
    $conn = connectDB();

    // Clean the articles table
    try {
        $sql_clean = "DELETE FROM articles";
        if (mysqli_query($conn, $sql_clean)) {
            // echo "Table cleaned successfully<br>";
        } else {
            echo "Error cleaning table: " . mysqli_error($conn) . "<br>";
        }
    } catch (Exception $e) {
        echo "Error cleaning table: " . $e->getMessage() . "<br>";
    }

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis, purus ac sodales luctus, libero libero luctus libero, non luctusShoes apophenia jeans sunglasses kanji boy human fetishism face forwards singularity sensory fluidity corrupted Chiba artisanal numinous monofilament. Tanto drone geodesic faded sentient military-grade 3D-printed jeans order-flow nano-cartel wonton soup Tokyo systema gang smart-pre. Dissident nodality pre-corrupted office woman disposable otaku car sub-orbital footage man into euro-pop long-chain hydrocarbons hacker. Computer pre-man singularity franchise-space corrupted sprawl sign math-Legba carbon nodality monofilament human receding long-chain hydrocarbons. Stimulate market gang Kowloon computer tube DIY. Military-grade dead range-rover advert denim Kowloon neural table hacker BASE jump monofilament free-market into woman. Spook tube order-flow woman sign warehouse urban city sentient Shibuya dissident drugs San Francisco advert tiger-team-space. ";

    // Sample data array
    $sample_data = array(
      array("Music", 1, "Top 10 Albums of 2023", "Check out the best albums released in 2023! " . $lorem, "https://picsum.photos/id/201/640/640"),
      array("Conciertos", 2, "Upcoming Concerts in Your City", "Find out which artists are performing live near you! " . $lorem, "https://picsum.photos/id/202/640/640"),
      array("Festivales", 3, "The Ultimate Festival Guide for 2023", "Discover the hottest music festivals happening worldwide! " . $lorem, "https://picsum.photos/id/203/640/640"),
      array("Bandas", 4, "Interview with Band XYZ", "Exclusive interview with the members of Band XYZ! " . $lorem, "https://picsum.photos/id/204/640/640"),
      array("Otros", 5, "Music Industry Trends Report", "Get insights into the latest trends shaping the music industry. " . $lorem, "https://picsum.photos/id/305/640/640"),
      array("Music", 6, "Classic Rock Legends Reunion Tour", "Iconic rock bands reunite for a legendary tour! " . $lorem, "https://picsum.photos/id/206/640/640"),
      array("Conciertos", 7, "Concert Review: Artist ABC Live in Concert", "Read our review of Artist ABC's electrifying live performance! " . $lorem, "https://picsum.photos/id/307/640/640"),
      array("Festivales", 8, "Local Music Festivals to Attend This Summer", "Explore the vibrant music scene in your area with these festivals! " . $lorem, "https://picsum.photos/id/208/640/640"),
      array("Bandas", 9, "Behind the Music: The Making of Album XYZ", "Go behind the scenes with Band XYZ and learn about their creative process! " . $lorem, "https://picsum.photos/id/209/640/640"),
      array("Otros", 10, "The Impact of Streaming on Music Consumption", "How has streaming technology changed the way we listen to music? " . $lorem, "https://picsum.photos/id/210/640/640"),
      array("Music", 11, "New Music Friday: Latest Releases", "Discover the newest songs and albums released this week! " . $lorem, "https://picsum.photos/id/211/640/640"),
      array("Conciertos", 12, "Guide to Virtual Concerts in 2023", "Experience live music from the comfort of your home with virtual concerts! " . $lorem, "https://picsum.photos/id/212/640/640"),
      array("Festivales", 13, "Exploring World Music: A Cultural Journey", "Dive into the rich tapestry of world music and explore diverse musical traditions! " . $lorem, "https://picsum.photos/id/213/640/640"),
      array("Bandas", 14, "Spotlight on Emerging Artists", "Discover promising up-and-coming bands making waves in the music scene! " . $lorem, "https://picsum.photos/id/214/640/640"),
      array("Otros", 15, "The Evolution of Music Videos", "From MTV to YouTube: tracing the evolution of music videos in the digital age. " . $lorem, "https://picsum.photos/id/215/640/640"),
      array("Music", 16, "Iconic Movie Soundtracks That Defined an Era", "Relive cinematic moments with unforgettable movie soundtracks! " . $lorem, "https://picsum.photos/id/216/640/640"),
      array("Conciertos", 17, "Concert Photography: Capturing the Magic of Live Music", "Explore the art of concert photography and the stories behind the images! " . $lorem, "https://picsum.photos/id/217/640/640"),
      array("Festivales", 18, "Music Festivals: A Global Celebration of Culture", "Experience the cultural diversity and creative energy of music festivals around the world! " . $lorem, "https://picsum.photos/id/218/640/640"),
      array("Bandas", 19, "The Art of Album Cover Design", "Uncover the creative process behind iconic album cover artwork! " . $lorem, "https://picsum.photos/id/219/640/640"),
      array("Otros", 20, "The Future of Music Technology", "From AI to blockchain: exploring the cutting-edge innovations shaping the future of music. " . $lorem, "https://picsum.photos/id/220/640/640"),
      array("Music", 21, "Music and Mental Health: Healing Through Sound", "Discover the therapeutic power of music in supporting mental and emotional well-being! " . $lorem, "https://picsum.photos/id/221/640/640"),
      array("Conciertos", 22, "Concert Etiquette: Tips for Enjoying Live Music Events", "Learn how to be a respectful and considerate audience member at concerts! " . $lorem, "https://picsum.photos/id/222/640/640")
    );

    // Insert sample data into the articles table
    foreach ($sample_data as $post) {
        $category = mysqli_real_escape_string($conn, $post[0]);
        $title = mysqli_real_escape_string($conn, $post[2]);
        $description = mysqli_real_escape_string($conn, $post[3]);
        $image_url = mysqli_real_escape_string($conn, $post[4]);

        try {
            $sql_insert = "INSERT INTO articles (category, title, description, image_url) VALUES ('$category', '$title', '$description', '$image_url')";
            if (mysqli_query($conn, $sql_insert)) {
                // echo "Record inserted successfully<br>";
            } else {
                echo "Error inserting record: " . mysqli_error($conn) . "<br>";
            }
        } catch (Exception $e) {
            echo "Error inserting record: " . $e->getMessage() . "<br>";
        }
    
    }


    // Close connection
    mysqli_close($conn);
}

// Populate data
// populateData();
?>
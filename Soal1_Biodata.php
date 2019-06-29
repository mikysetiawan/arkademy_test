<?php
$biodata = array(
        "name" => "Miky Setiawan",
        "age" => 23,
        "address" => "Taman Penta A48 Jimbaran, Bali, Indonesia",
        "hobbies" => ["Coding", "Racing", "Music"],
        "is_married" => false,
        "list_school " => array(
                "SD" => array(
                        "name" => "SDK Soverdi Tuban, Bali",
                        "year_in" => 2002,
                        "year_out" => 2008,
                        "major" => null
                    ),
                "SMP" => array(
                        "name" => "SMP Taman Sastra Jimbaran, Bali",
                        "year_in" => 2008,
                        "year_out" => 2011,
                        "major" => null
                    ),
                "SMA" => array(
                        "name" => "SMA Kutapura Kuta, Bali",
                        "year_in" => 2011,
                        "year_out" => 2014,
                        "major" => "IPA"
                    ),
                "S1" => array(
                        "name" => "STIKOM Bali",
                        "year_in" => 2014,
                        "year_out" => 2018,
                        "major" => "Computer System"
                    ),
            ),
        "skills" => array(
                0 => array(
                        "skill_name" => "PHP",
                        "level" => "expert"
                    ),
                1 => array(
                        "skill_name" => "HTML & CSS",
                        "level" => "expert"
                    ),
                2 => array(
                        "skill_name" => "Javascript (React)",
                        "level" => "advance"
                    ),
                3 => array(
                        "skill_name" => "Typescript (Ionic)",
                        "level" => "advance"
                    ),
                4 => array(
                        "skill_name" => "Java (Android)",
                        "level" => "expert"
                    ),
                5 => array(
                        "skill_name" => "Kotlin (Android)",
                        "level" => "expert"
                    )
            ),
        "interest_in_coding" => true
);

echo json_encode($biodata);

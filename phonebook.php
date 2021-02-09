<h3>একটি পারিবারিক ফোন বুকের জন্য এরে ডাটা শিট দৈরি করুন এবং সেটাকে পাবলিস্ট করুন</h3>
<?php
function personalPhonebook()
{
    $allPhonebook = [
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],
        [
            'name' => 'Sinthy Akhter',
            'address'   => 'Kotua tali, Magbazar, Dhaka-1200',
            'number' => '01958742564'
        ],

    ];

    foreach ($allPhonebook as $person) {

        echo "Name : " . $person['name'] . "<br>";
        echo "Address : " . $person['address'] . "<br>";
        echo "=============================<br>";
        echo "Phone Number = " . $person['number'] . "<hr><hr>";

    }
}
personalPhonebook();

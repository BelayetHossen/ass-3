<h3>একটি ক্লাবের সকল মেমবারদের ডাটা এরেতে নিয়ে বয়সের উপর বেইজ করে ১৮ বছরের বেশি সবাইতে একটি স্বাগত মেসেজ পাঠান</h3>
<?php


    function clubWishes(){
        $members=[
            [
                'name' => 'Tamzid Rohan',
                'age'  => 10
            ],
            [
                'name' => 'Thakur Dada',
                'age'  => 20
            ],
            [
                'name' => 'Liton Talukdar',
                'age'  => 25
            ],
            [
                'name' => 'Mithun Chokroborti',
                'age'  => 28
            ],
            [
                'name' => 'Razib Sarkar',
                'age'  => 35
            ],
            [
                'name' => 'Ripon Khan',
                'age'  => 42
            ],
            [
                'name' => 'Shihab Uddin',
                'age'  => 65
            ],
        ];



        foreach($members as $member){

            if($member['age'] >= 40){
                echo "Your Age is " . $member['age'] . " We appreciate For you. ".$member['name']."<br>";
            }
            elseif($member['age'] >= 18 and $member['age'] <40){
                echo "Welcome. Your Age is " . $member['age'] . " Please continue with us. ".$member['name']."<br>";
            }
            elseif($member['age'] >= 0 and $member['age'] <18){
                echo "Your Age is " . $member['age'] . " You are not allowed, Please Continue studies best. ".$member['name']."<br>";
            }
            else{
                echo "Invalid input";
            }
        }
    }
    clubWishes();

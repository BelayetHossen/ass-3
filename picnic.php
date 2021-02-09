<h3>একটি বনভোজনের জন্য চাদার এরে ডাটা তৈরি করুন যেখানে সবাই সবার বেসিক ইনফরমেসন সহ চাদা প্রদান করবে ইচ্ছামতন</h3>


<?php

  function picnic()
  {
      $students = [
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
          [
              'name' => 'Sinthy Akhter',
              'address' => 'Kotua tali, Magbazar, Dhaka-1200',
              'number' => '01958742564',
              'amount' => 500
          ],
      ];

      foreach ($students as $student) {

          echo "Student Name = " . $student['name'] . "<br>";
          echo "Contact Number = " . $student['number'] . "<br>";
          echo "Address = " . $student['address'] . "<br>";
          echo "Amount = " . $student['amount'] . "<hr><hr>";

      }
      $total = 0;
      for ($i = 0; $i <= 5; $i++) {
          $total = $student['amount'] + $total;
      }
      echo "Total Amount = " . $total;
  }
  picnic();



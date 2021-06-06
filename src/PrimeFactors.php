<?php

namespace App;

class PrimeFactors
{
  public function generate($number)
  {
    $factors = [];
    $divisor = 2;

    // 1. Is the number divisible by 2?
    // 2. If true, then divide by 2. If false, Increase number and try again
    // 3. Repeat

    while ($number > 1) {
      while ($number % $divisor === 0) {
        $factors[] = $divisor;

        $number = $number / $divisor;
      }
      $divisor++;
    }
    return $factors;
  }
}

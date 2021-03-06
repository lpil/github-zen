<?php

header('Access-Control-Allow-Origin: *');

$zen = [
  "Anything added dilutes everything else.",
  "Approachable is better than simple.",
  "Avoid administrative distraction.",
  "Design for failure.",
  "Encourage flow.",
  "Favor focus over features.",
  "Half measures are as bad as nothing at all.",
  "It's not fully shipped until it's fast.",
  "Keep it logically awesome.",
  "Mind your words, they are important.",
  "Non-blocking is better than blocking.",
  "Practicality beats purity.",
  "Responsive is better than fast.",
  "Speak like a human."
];

echo $zen[array_rand($zen)];
?>

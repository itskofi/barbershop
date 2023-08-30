<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barber</title>
  @vite('resources/css/app.css')
</head>
<body>

  <div class="bg-fixed">
      <img class="object-cover w-full h-full " src="{{ url('images/barber-chair-2.jpg') }}" alt="">
  </div>

  <div class="flex bg-gray-100">
    <div class="w-1/2 my-auto px-2 text-xs sm:text-xl space-y-2">
      <div class="text-xl sm:text-4xl font-semibold">Barbershop Team</div>
      <div class="font-bold uppercase">Your local Family</div>
      <div class="">We are here to give you the best haircut you can imagine</div>
    </div>
    <div class="w-1/2">
      <img src="{{ url('images/barber-team.jpg') }}" alt="">
    </div>
  </div>
</body>
</html>

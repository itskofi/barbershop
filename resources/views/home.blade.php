<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barber</title>
  @vite('resources/css/app.css')
</head>
<body>

  <div class="bg-fixed h-52">
      <img class="object-cover w-full h-full " src="{{ url('images/barber-chair-2.jpg') }}" alt="">
  </div>

  <div class="mt-4 px-2 flex">
    <div class="px-2 w-1/2 my-auto text-xs sm:text-xl">
      <div class="text-primary font-bold uppercase">Your local Family</div>
      <div class="text-xl sm:text-4xl font-semibold">We are</div>
      <div class="mt-2">We are here to give you the best haircut you can imagine</div>
    </div>
    <div class="w-1/2">
      <img class="rounded-lg" src="{{ url('images/barber-team.jpg') }}" alt="">
    </div>
  </div>

  <div class="mt-4 px-2 flex flex-row-reverse ">
    <div class="w-1/2 my-auto px-2 text-xs sm:text-xl">
      <div class="text-primary font-bold uppercase tracking">Renew your look</div>
      <div class="text-xl sm:text-4xl font-semibold">You get the best</div>
      <div class="mt-2">With over a decade experience you will get the best experience</div>
    </div>
    <div class="w-1/2">
      <img class="rounded-lg" src="{{ url('images/barber-team.jpg') }}" alt="">
    </div>
  </div>

  <div class="mt-4">
    <div class="text-xl font-semibold text-center">The Team</div>
    <div class="mt-4 flex">
      <div class="px-2 flex flex-col w-1/3">
        <div class="">
          <img class="rounded-lg object-cover h-48" src="{{ url('images/barber-1.jpg') }}" alt="">
        </div>
        <div class="">
          <div class="">John Elfa</div>
          <div class="text-gray-400 text-sm">Specialized in Mens Hair</div>
        </div>
      </div>

      <div class="px-2 flex flex-col w-1/3">
        <div class="">
          <img class="rounded-lg object-cover h-48" src="{{ url('images/barber-2.webp') }}" alt="">
        </div>
        <div class="">
          <div class="">Daniel Elfa</div>
          <div class="text-gray-400 text-sm">Specialized in Womens Hair</div>
        </div>
      </div>

      <div class="px-2 flex flex-col w-1/3">
        <div class="">
          <img class="rounded-lg object-cover h-48" src="{{ url('images/barber-3.jpg') }}" alt="">
        </div>
        <div class="">
          <div class="">Alex Storms</div>
          <div class="text-gray-400 text-sm">Specialized in Afro Hair</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

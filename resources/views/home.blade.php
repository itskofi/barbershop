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
        <div class="text-center ">
          <div class="text-base">John Elfa</div>
          <div class="text-gray-400 text-xs">Specialized in Mens Hair</div>
        </div>
      </div>

      <div class="px-2 flex flex-col w-1/3">
        <div class="">
          <img class="rounded-lg object-cover h-48" src="{{ url('images/barber-2.webp') }}" alt="">
        </div>
        <div class="text-center ">
          <div class="text-base">Daniel Elfa</div>
          <div class="text-gray-400 text-xs">Specialized in Womens Hair</div>
        </div>
      </div>

      <div class="px-2 flex flex-col w-1/3">
        <div class="">
          <img class="rounded-lg object-cover h-48" src="{{ url('images/barber-3.jpg') }}" alt="">
        </div>
        <div class="text-center">
          <div class="text-base">Alex Storms</div>
          <div class="text-gray-400 text-xs">Specialized in Afro Hair</div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-4 px-2">
    <div class="text-xl font-semibold text-center">Services</div>
    <div class="flex flex-col divide-dotted divide-y rounded-lg shadow-lg bg-primary text-white p-4">
      <div class="flex justify-between">
        <div class="">Haircut</div>
        <div class="text-secondary font-semibold">25€</div>
      </div>
      <div class="flex justify-between">
        <div class="">Hair Trim</div>
        <div class="text-secondary font-semibold">10€</div>
      </div>
      <div class="flex justify-between">
        <div class="">Beard</div>
        <div class="text-secondary font-semibold">20€</div>
      </div>
      <div class="flex justify-between">
        <div class="">Beard Trim</div>
        <div class="text-secondary font-semibold">12€</div>
      </div>
      <div class="flex justify-between">
        <div class="">Hair and beard</div>
        <div class="text-secondary font-semibold">35€</div>
      </div>
 
    </div>
  </div>

  <div class="mt-4 px-2">
    <div class="">
      <div class="text-xl font-semibold text-center">Looks</div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
      <div>
          <img class="h-auto max-w-full rounded-lg" src="{{ url('images/haircut-1.jpg')}}" alt="">
      </div>
      <div>
          <img class="h-auto max-w-full rounded-lg" src="{{ url('images/haircut-2.jpg')}}" alt="">
      </div>
      <div>
          <img class="h-auto max-w-full rounded-lg" src="{{ url('images/haircut-3.jpg')}}" alt="">
      </div>
      <div>
          <img class="h-auto max-w-full rounded-lg" src="{{ url('images/haircut-4.jpg')}}" alt="">
      </div>
      <div>
          <img class="h-auto max-w-full rounded-lg" src="{{ url('images/haircut-6.webp')}}" alt="">
      </div>
    </div>
  </div>
</body>
</html>

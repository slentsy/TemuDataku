<footer class="bg-[#233B76] text-white">
  <!-- Row 1: Main Footer Content -->
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-[200px] p-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
      <!-- Logo -->
      <div class="">
        <img src="{{ asset('images/temudataku-2.png') }}" class="h-16 mb-4" alt="TemuDataku Logo">
        <p class="text-sm font-regular">Kelurahan Karangbesuki <br> Kecamatan Sukun, Kota Malang</p>
      </div>

      <!-- Site Map -->
      <div>
        <h4 class="font-semibold mb-2">Site Map</h4>
        <ul class="space-y-1 text-sm">
          <li><a href="{{ route('aboutUs') }}" class="hover:underline">About Us</a></li>
          <li>
            @guest
            <a href="{{ route('register') }}" class="hover:underline">Mentoring</a>
            @else
            <a href="{{ route('mentoring') }}" class="hover:underline">Mentoring</a>
            @endguest
          </li>
          <li>
            @guest
            <a href="{{ route('register') }}" class="hover:underline">Practice</a>
            @else
            <a href="{{ route('practice') }}" class="hover:underline">Practice</a>
            @endguest
          </li>
          <li>
            @guest
            <a href="{{ route('register') }}" class="hover:underline">Bootcamp</a>
            @else
            <a href="{{ route('bootcamp') }}" class="hover:underline">Bootcamp</a>
            @endguest
          </li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="font-semibold mb-2">Contact Us</h4>
        <ul class="space-y-2">
          <li>
            <div class="flex items-center space-x-2">
              <a><img src="{{ asset('images/wa-icon.png') }}" alt="WhatsApp" class="h-6"></a>
              <a href="https://api.whatsapp.com/send/?phone=6285156750480&text&type=phone_number&app_absent=0" class="text-sm hover:underline">085156750480</a>
            </div>
          </li>
          <li>
            <div class="flex items-center space-x-2">
              <a href=""><img src="{{ asset('images/email-icon.png') }}" alt="Email" class="h-6"></a>
              <a class="text-sm">example@gmail.com</a>
            </div>
          </li>
        </ul>
      </div>

      <!-- Social Media -->
      <div>
        <h4 class="font-semibold mb-2">Our Social Media</h4>
        <ul class="space-y-2">
          <li>
            <div class="flex items-center space-x-2">
              <a href="https://www.instagram.com/temudataku/"><img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram" class="h-6"></a>
              <a href="https://www.instagram.com/temudataku/" class="text-sm hover:underline">@temudataku</a>
            </div>
          </li>
          <li>
            <div class="flex items-center space-x-2">
              <a><img src="{{ asset('images/linkedin-icon.png') }}" alt="Linkedin" class="h-6"></a>
              <a href="https://www.linkedin.com/company/temudataku/" class="text-sm hover:underline">TemuDataku</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Row 2: Copyright with same margin -->
  <div class="bg-[#E9E6FE] p-5">
    <div class="mx-8">
      <p class="text-center text-gray-800 text-sm">
        Copyright © 2025, Sophia Madlentsy Tambunan
      </p>
    </div>
  </div>
</footer>
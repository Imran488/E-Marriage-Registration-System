<!-- Topbar -->
@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
<center>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<h4 style=" color:black">যে ব্যক্তি বিয়ে করলো সে তার অর্ধেক দ্বীন পূর্ণ  করে ফেললো। বাকি অর্ধেকের জন্য সে আল্লাহকে ভয় করুক।<br>(বায়হাকী, শু’আবুল ঈমান – ৫৪৮৬)</h4>
</nav>
</center>




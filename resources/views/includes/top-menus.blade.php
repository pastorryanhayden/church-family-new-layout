<div class="filter ">
    <button class="close" onclick="document.querySelector('.filter').classList.remove('on');">
        @include('icons.close')
    </button>
    Filter Stuff
</div>
<div class="settings ">
    <button class="close" onclick="document.querySelector('.settings').classList.remove('on');">
        @include('icons.close')
    </button>
    Settings Menu
</div>
<header class="top-menu">
    <button onclick="document.querySelector('.filter').classList.add('on');">
        @include('icons.adjustments-horizontal')
    </button>
    <button onclick="document.querySelector('.settings').classList.add('on');">
        <img src="https://pbs.twimg.com/profile_images/1592882930082267138/qgnYx0Ng_400x400.jpg" alt="">
    </button>
</header>
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
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
    </button>
</header>
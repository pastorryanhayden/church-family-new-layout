<nav class="fixed-menu">
    <a href="#" class="{{$active == 'home' ? 'active' : ''}}" title="Home">
        @include('icons.home')
    </a>
    <a href="#" class="{{$active == 'people' ? 'active' : ''}}" title="People">
        @include('icons.users')
    </a>
    <a href="#" class="{{$active == 'messaging' ? 'active' : ''}}" title="Messaging">
        @include('icons.chat-bubble')
    </a>
    <a href="#" class="{{$active == 'groups' ? 'active' : ''}}" title="Groups">
        @include('icons.rectangle-group')
    </a>
    <a href="#" class="{{$active == 'attendence' ? 'active' : ''}}" title="Attendence">
        @include('icons.calendar')
    </a>
</nav>